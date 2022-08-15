<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Adminstrative;
use App\Models\Contact;
use App\Models\Courses;
use App\Models\Document;
use App\Models\Financially;
use App\Models\Job;
use App\Models\Meeting;
use App\Models\News;
use App\Models\Plan;
use App\Models\Policy;
use App\Models\publicAssociation;
use App\Models\Questionnaire;
use App\Models\Target;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    //
    public function index()
    {

        $our_vision = Document::where('key', 'vision')->first();
        $who_us = Document::where('key', 'who-us')->first();
        $message = Document::where('key', 'message')->first();
        $our_value = Document::where('key', 'our_value')->first();
        $our_logo = Document::where('key', 'logo')->first();
        $url = Document::where('key', 'url')->first();

        $news = News::all();
        $teams = Team::all();
        $courses = Courses::all();
        $message = Document::where('key', 'vision')->first();
        return response()->view('front.index', compact('news', 'teams', 'courses', 'url', 'our_vision', 'who_us', 'message', 'our_value', 'our_logo'));
    }
    public function publicAssociations()
    {
        $items = publicAssociation::all();
        return response()->view('front.general_assembly.general_assembly', compact('items'));
    }


    public function jobs(Request $request)
    {


        $data = DB::table('jobs');
        if( $request->search){
            $data = $data->where('title', 'LIKE', "%" . $request->search . "%");
        }
        $data = $data->paginate(10);

        return response()->view('front.jobs.jobs', compact('data'));
    }



    public function jobDetails($id)
    {
        $items = Job::findOrFail($id);
        return response()->view('front.jobs.iob-details', compact('items'));
    }
    public function news()
    {
        $items = news::all();

        return response()->view('front.news.news', compact('items'));

    }

public function newss()
    {
        $news = news::all();
        
        return response()->view('front.index', compact('news'));

    }
    public function newsDetails($id)
    {
        $items = news::findOrFail($id);
        return response()->view('front.news.news-details', compact('items'));
    }


    public function adminstrative()
    {
        $paln = Plan::all();
        $aqchievement  = Achievement::all();
        $financially = Financially::all();
        $adminstratives = Adminstrative::all();
        $polices = Policy::all();
        $targets = Target::all();
        return view('front.adminstrative_systems.adminstrative-systems', compact('paln', 'aqchievement', 'financially', 'adminstratives', 'polices', 'targets'));
    }

    public function manager()
    {
        $items = Meeting::all();
        return view('front.managers.managers', compact('items'));
    }
    public function teamDetails()
    {

        $teams = Team::all();
        return response()->view('front.members.members-details', compact('teams'));
    }
    public function courses(Request $request)
    {

        $courses = Courses::when($request->search, function ($q) use ($request) {

            return $q->where ('title', '%' . $request->search . '%');

        })->when($request->type, function ($q) use ($request) {

            return $q->where('type', $request->type);

        })->get();
        return response()->view('front.meetings-courses.meetings-courses-details', compact('courses'));
    }
    public function coursesDetails($id)
    {

        $courses = Courses::findOrFail($id);
        return response()->view('front.meetings-courses.course-details', compact('courses'));
    }
    public function contact()
    {
        return view('front.contact.contact-us');
    }
    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'messageTitle' => 'required',
            'message' => 'required',

        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->messageTitle = $request->input('messageTitle');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->back();
    }
    public function docment()
    {
        $url = Document::where('key', 'url')->first();

        return view('front.parent', compact('url'));
    }

    public function questionnaire()
    {
        $items = Questionnaire::all();
        return view('front.questionnaire.questionnaire',compact('items'));
    }



    public function consultation()
    {

        return view('front.consultations.consultations' );
    }

    public function ecommerce()
    {

        return view('front.ecommerce.ecommerce' );
    }
    public function condition()
    {

        return view('front.terms_conditions.terms-conditions' );
    }
}
