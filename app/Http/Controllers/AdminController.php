<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Job;


class AdminController extends Controller
{

    public function login(Request $request)
    
    {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
                // echo "Succes";die;
                return redirect('admin/dashboard');
            }else{
                // echo "failed";die;
                return redirect('/admin')->with('flash_message_error','Invalid username or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out successfully');

    }

    public function addjob(Request $request)
    {
        if($request->isMethod('post')){

            $data = $request->all();
            // echo "<pre>";print_r($data);die;

            $job = new Job;
            $job->v_name = $data['v_name'];
            $job->description = $data['description'];
            $job->job_spec = $data['job_spec'];
            $job->job_category = $data['job_category'];
            $job->total_req = $data['total_req'];
            $job->educational_qal = $data['educational_qal'];
            $job->experience = $data['experience'];
            $job->type = $data['type'];
            $job->gender = $data['gender'];
            $job->job_type = $data['job_type'];
            $job->salary = $data['salary'];
            $job->save();
            return redirect()->back()->with('flash_message_success','Job added succesfullt');
        




        }


        return view('admin.job.add_job');
    }

    public function viewJob(){
        $jobs = Job::get();
        // $jobs = json_decode(json_encode($jobs));
        //     echo "<pre>";print_r($jobs);die;

        return view('admin.job.view_job')->with(compact('jobs'));
    }

    public function deletJob($id=null){
        if(!empty($id)){
            Job::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Job deleted Successfully ');
        
        }
    }

    public function editJob(Request $request,$id=null){
        if($request->isMethod('post')){
            $data= $request->all();
            // echo "<pre>";print_r($data);die;
            // Job::where(['id'=>$id])->update(['v_name'=>$data['v_name'],['description'=>$data['description'],['job_spec'=>$data['job_spec'],['job_category'=>$data['job_category'],
            // ['total_req'=>$data['total_req'],['educational_qal'=>$data['educational_qal'],['experience'=>$data['experience'],
            // ['type'=>$data['type'],['gender'=>$data['gender'],['job_type'=>$data['job_type'],
            // ['salary'=>$data['salary']]);

            Job::where(['id'=>$id])->update(['v_name'=>$data['v_name'],
            'description'=>$data['description'],'job_spec'=>$data['job_spec'],'job_category'=>$data['job_category'],'total_req'=>$data['total_req'],
            'educational_qal'=>$data['educational_qal'],'experience'=>$data['experience']
            ,'type'=>$data['type'],'gender'=>$data['gender'],'job_type'=>$data['job_type'],'salary'=>$data['salary']]);
            return redirect('/admin/view-job')->with('flash_message_success','Jobs updated Successfully ');
        }
        $job = Job::where(['id'=>$id])->first();
        return view('admin.job.edit_job')->with(compact('job'));
    }


    public function viewApplyJob(){
        return view('admin.job.view_applied_job');
    }

}
