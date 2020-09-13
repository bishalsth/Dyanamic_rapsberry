@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Coupons</a> <a href="#" class="current">Validation</a> </div>
    <h1>View Coupon</h1>
    
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('flash_message_error') }}</strong>
</div>
        @endif  
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('flash_message_success') }}</strong>
</div>
        @endif 
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Coupons</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>JOB ID</th>

                 <th> Vacancy Name</th>
              

                 <th> Job Category</th>

                 <th> Total Requirement</th>
                 <th> Educaional Qualification</th>
                 <th> Experience</th>
                 <th> Type of industry</th>
                 <th> Preferred Gender</th>
                 <th> Jobe Type</th>
                 <th> Salary</th>
                 <th>Action</th>
v
                </tr>
              </thead>
              <tbody>
                  @foreach($jobs as $job)
                <tr class="gradeX">
                  <td>{{$job->id}}</td>
                  <td>{{$job->v_name}}</td>
              
                  <td>{{$job->job_category}}</td>
                  <td>{{$job->total_req}}</td>
                  <td>{{$job->educational_qal}}</td>
                  <td>{{$job->experience}}</td>
                  <td>{{$job->type}}</td>
                  <td>{{$job->gender}}</td>
                  <td>{{$job->job_type}}</td>
                  <td>{{$job->salary}}</td>
                 

                  
                  
                  <td class="center"><a href="{{url('/admin/edit-job/'.$job->id)}}" class="btn btn-primary btn-mini">Edit</a> | <a id ="delCat" href="{{url('/admin/delete-job/'.$job->id)}}" class="btn btn-danger btn-mini">Delete</a></td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection