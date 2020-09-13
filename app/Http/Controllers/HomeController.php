<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Employee;
class HomeController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function about(){
        return view('home.about');

    }

    public function service(){
        return view('home.service');
    }

    public function career(){
        $jobs=Job::get();
        // echo "<pre>";print_r($jobs);die;
        return view('home.career')->with(compact('jobs'));
    }

    public function contact(){
        return view('home.contact');
    }

    public function counseling(){
        return view('home.service_section.counsell');
    }

    public function staff(){
        return view('home.service_section.staff');
    }
    public function recruitment(){
        return view('home.service_section.recruitment');
    }
    public function employee(){
        return view('home.service_section.employee');
    }
    public function candidate(){
        return view('home.service_section.cadidate');
    }
    public function management(){
        return view('home.service_section.management');
    }

    public function viewJObDetail($id=null){
        $job = Job::where(['id'=>$id])->first();
        return view('home.carrer_detail')->with(compact('job'));

    }

    public function applyCv(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            // echo "<pre>";print_r($data);die;

            $employee = new Employee; 

            // $request->validate([
            //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            // ]);
      
            $fileName = time().'.'.$request->file->extension();  
       
            $request->file->move(public_path('img'), $fileName);
            $employee->file = $fileName;
            $employee->name= $data['name'];
            $employee->email=$data['email'];
            $employee->phone=$data['phone'];
            $employee->save();

            return redirect('/career'); 
       
            
        }

    }
}
