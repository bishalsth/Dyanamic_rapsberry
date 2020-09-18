<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Employee;
class HomeController extends Controller
{
    public function index(){
        // meta tags
        $meta_title ="Raspberry HR and Management Consulting";
        $meta_description="
        
        As Raspberry, a HR and Management Consulting Organization in Nepal provides
         a wide range of business performance solutions that enable business owners
          to be more systematic and strategic about the role that people play in the
           success of a company. Through our flagship, full-service HR solution,
            we provide everything you need to grow your business, from large company
             benefits to payroll processing, while managing employer liability and
              compliance issues.
         Your challenges multiply as the business grows. At Raspberry, we believe 
         that you don’t have to go alone on the journey.
        
        ";
        $meta_keywords="Consulting website, Human resource management, solution management";
        return view('homepage')->with(compact('meta_title','meta_description','meta_keywords'));
    }

    public function about(){
         // meta tags
         $meta_title ="About us Raspberry";
         $meta_description="business performance solution  management consulting, candidate assessment, 
         payroll processing, managing employer liability and compliance issues";
         $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.about')->with(compact('meta_title','meta_description','meta_keywords'));

    }

    public function service(){
        
        return view('home.service');
    }

    public function career(){
         // meta tags
         $meta_title ="Carrer  Raspberry";
         $meta_description="  Career Raspberry provides you with various opportunity to explore your 
         career with job posted on our website.  Please stay updated with us. We are always looking
          for talented, creative, flexible and hard-working people to join our team. Raspberry, 
          a HR and Management Consulting Organization in Nepal aims to consistently exceed industry 
          standards by providing clients with a";
         $meta_keywords="Consulting website, Human resource management, solution management";
        $jobs=Job::get();
        // echo "<pre>";print_r($jobs);die;
        return view('home.career')->with(compact('jobs','meta_title','meta_description','meta_keywords'));
    }

    // public function contact(){
    //     return view('home.contact');
    // }

    public function counseling(){
          // meta tags
          $meta_title ="counseling Raspberry";
          $meta_description="Counseling Services enables employees to optimize their psychological health so that they may fulfill their job role as individuals and contribute to building healthy relationships and communities toward greater autonomy and effectiveness, with higher productivity rate for the organization";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.counsell')->with(compact('meta_title','meta_description','meta_keywords'));
    }

    public function staff(){
          // meta tags
          $meta_title ="Staff  Raspberry";
          $meta_description="Raspberry will be your best and reliable outsourcing partner to help you get your job done. We provide skilled workers for nearly any industry at our clients’ needs. Sharing the responsibility of outsourcing service with Raspberry gives you the power to cost cut liability in a costly industry, while matching labor forecasts to demand needs.";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.staff')->with(compact('meta_title','meta_description','meta_keywords'));
    }
    public function recruitment(){
          // meta tags
          $meta_title ="Recruitment Raspberry";
          $meta_description="For a company to be competitive must have a talent pool of human resources and our recruitment service is ready to serve with dedicated team with best hiring practice. Raspberry helps you to increase efficiency in hiring and retention to ensure consistency and compliance in the recruitment and selection process. Raspberry lets you focus in the core value of you organization, while handling the overall recruitment process for your organization.";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.recruitment')->with(compact('meta_title','meta_description','meta_keywords'));
    }
    public function employee(){
          // meta tags
          $meta_title ="Employee Raspberry";
          $meta_description="When you outsource your HR functions with Raspberry, we provides you Employer Record Services. An employer of record handles all HR, including payroll processing and funding; tax deposits and filing; and employment contracts and paperwork. The Employer of Record actually becomes the primary employer of your employees on paper and you keep full control of your business operations and data.";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.employee')->with(compact('meta_title','meta_description','meta_keywords'));
    }
    public function candidate(){
          // meta tags
          $meta_title ="Candidate Raspberry";
          $meta_description="Candidate Assessment is the process by which an employer evaluates individuals when considering them for an open position. The purpose of the report is to provide insights about the respondent various factors required to carry the selection process. The ultimate goal of candidate assessment is to refine the candidates and get the quality candidates.";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.cadidate')->with(compact('meta_title','meta_description','meta_keywords'));
    }
    public function management(){
          // meta tags
          $meta_title ="Management  Raspberry";
          $meta_description="Raspberry, as a management consulting firm, we provide professional service by assisting organizations to improve human resource which works to transform strategy into reality. We develop quality talent who is well organized, effective and perform at their best. We serve our client focusing on making quality talents to organizations.";
          $meta_keywords="Consulting website, Human resource management, solution management";
        return view('home.service_section.management')->with(compact('meta_title','meta_description','meta_keywords'));
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
            $employee->job_type= $data['job_type'];
            $employee->name= $data['name'];
            $employee->email=$data['email'];
            $employee->phone=$data['phone'];
            $employee->save();

            return redirect('/career')->with('flash_message_success','You have successfully the applied Job'); 
       
            
        }

    }
}
