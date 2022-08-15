<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Adminstrative;
use App\Models\Courses;
use App\Models\Financially;
use App\Models\Job;
use App\Models\Meeting;
use App\Models\News;
use App\Models\Plan;
use App\Models\Policy;
use App\Models\publicAssociation;
use App\Models\Target;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class FrontController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        $teams = Team::all();
        $courses = Courses::all();
        return response()->view('front.index',compact('news', 'teams', 'courses'));
    }
    public function publicAssociations ()
    {
        $items = publicAssociation::all();
        return response()->view('front.general_assembly.general_assembly',compact('items'));
    }
    public function jobs ()
    {
        $items = Job::all();
        return response()->view('front.jobs.jobs',compact('items'));
    }
    // public function policies ()
    // {
    //     $items = Policy::all();
    //     return response()->view('front.terms_conditions.terms-conditions',compact('items'));
    // }

    public function adminstrative()
    {
        $paln = Plan::all() ;
        $aqchievement  = Achievement::all();
        $financially = Financially::all();
        $adminstratives = Adminstrative::all();
        $polices = Policy::all();
        $targets = Target::all();
        return view('front.adminstrative_systems.adminstrative-systems',compact('paln','aqchievement','financially', 'adminstratives','polices', 'targets'));
    }

    public function manager ()
    {
        $items = Meeting::all();
        return view('front.managers.managers',compact('items'));
    }
    public function teamDetails()
    {
        
        $teams = Team::all();
        return response()->view('front.members.members-details',compact('teams'));
    }
    public function courses()
    {
        
        $courses = Courses::all();
        return response()->view('front.meetings-courses.meetings-courses-details',compact('courses'));
    }
    public function coursesDetails($id)
    {
        
        $courses = Courses::findOrFail($id);
        return response()->view('front.meetings-courses.course-details',compact('courses'));
    }
      
}
