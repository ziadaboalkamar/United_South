<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\about_us;
use App\Models\Project;
use App\Models\project_station;
use App\Models\Service;
use App\Models\Team;
use App\Models\testimonial;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $services = Service::with("projects")->get();
       $about = about_us::all()->last();
        $projectStation = project_station::all()->last();
        $testimonials = testimonial::all();
        $teamMembers = Team::all();
        return view('Front-end.index',compact('services','about','projectStation','testimonials','teamMembers'));
    }
    public function team(){
        $teamMembers = Team::all();
        return view('Front-end.ourTeam',compact('teamMembers'));

    }
    public function about(){
        $aboutUs = about_us::latest()->first();
        return view('Front-end.aboutUs',compact('aboutUs'));

    }
    public function services(Service $service){
        return view('Front-end.categoryPage',compact('service'));

    }
    public function project(Project $project){
       $relatedProjects = Project::where("service_id",$project->service_id)->where("id",'!=',$project->id)->get();
        return view('Front-end.project',compact('project','relatedProjects'));
    }

}
