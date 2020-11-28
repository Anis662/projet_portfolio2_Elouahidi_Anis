<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $about = About::all();
        $skill = Skill::all();
        $fact = Fact::all();
        $portfolio = Portfolio::all();
        return view("admin",compact("about","skill","fact","portfolio"));
    }
}
