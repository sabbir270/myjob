<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Carbon\Carbon;


use Illuminate\Http\Request;

class JobController extends Controller
{
    //showing all job list in homepage
    public function home(){
        return view('homePage',[
            'jobs'=>Job::latest()->filter(request(['tag','search']))->get()
        ]);
    }
    public function showSingleJob(Job $job_list)
    {
        return view('singleJob', [
            'job' => $job_list
        ]);
    }
    public function postNewJobForm(){
        return view('postJob');
    }
    public function saveJob(Request $request){
        $jobFields=$request->validate([
            'job_title'=>'required',
            'tags'=>'required',
            'company_name'=>'required',
            'location'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'job_description'=>'required',
            'deadline'=>'required',

        ]);
        if($request->hasFile('logo')){
            $jobFields['logo']=$request->file('logo')->store('companyLogo','public');
        }
        $jobFields['user_id']=auth()->id();
        Job::create($jobFields);
        return redirect('/')->with('message','job created successfully');
    }
    //returning edit form for job
    public function editJob(Job $job){
        return view('editJob',[
            'job'=>$job
        ]);
    }
    //

    public function updateJob(Request $request, Job $job){
        $jobFields=$request->validate([
            'job_title'=>'required',
            'tags'=>'required',
            'company_name'=>'required',
            'location'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'job_description'=>'required',
            'deadline'=>'required',

        ]);
        if($request->hasFile('logo')){
            $jobFields['logo']=$request->file('logo')->store('companyLogo','public');
        }
        $job->update($jobFields);
        return back()->with('message','job updatedted successfully');
    }
    public function deleteJob(Job $job){
        $job->delete();
        return redirect('/')->with('message','job deleted successfully');
    }
    public function manageJobs(){
        return view('manageJob',['jobs'=>auth()->user()->jobs()->get()]);
    }

}
