<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index(){
        $about = About::all();
        $fact = Fact::all();
        $skill = Skill::all();
        $portfolio = Portfolio::all();
        return view("page1",compact("about","fact","skill","portfolio"));
    }
}
