<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $request->validate([
            "img" => "required",
            "categorie" => "required"
        ]);
        $portfolio->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
        $portfolio->categorie= $request->categorie;
        $portfolio->save();
        return redirect()->route("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view("portfolio.edit",compact("portfolio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "img" => "required",
            "categorie" => "required"
        ]);
        Storage::disk("public")->delete("img/"  . $portfolio->img);

        $portfolio->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
        $portfolio->categorie= $request->categorie;
        $portfolio->save();
        return redirect()->route("admin");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk("public")->delete("img/"  . $portfolio->img);

        $portfolio->delete();
        return redirect()->back();
    }
}
