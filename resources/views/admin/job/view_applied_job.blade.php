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
                  <th> ID</th>
                  <th>Job Name</th>
                  <th>Name</th>
                  <th>Email</th>
                    <th>Contanct number</th>
                    <th>CV</th>


                
              

                 <th>Action</th>

                </tr>
              </thead>
              <tbody>
                  @foreach($applied as $apply)
                <tr class="gradeX">
                  <td>{{$apply->id}}</td>
                  <td>{{$apply->job_type}}</td>
                  <td>{{$apply->name}}</td>
                  <td>{{$apply->email}}</td>
                  <td>{{$apply->phone}}</td>
                  <td><a href="{{asset('/img/'.$apply->file)}}" class="btn btn-success" > View</a></td>
                
                 

                  
                  
                  <td class="center"> <a class="btn btn-primary" href="{{asset('/img/'.$apply->file)}}" download="{{$apply->file}}" > Download</a> |<a id ="delCat" href="{{url('/admin/delete-applied-job/'.$apply->id)}}" class="btn btn-danger btn-mini">Delete</a></td>
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