
@extends('layouts.frontLayouts.front_design')
@section('content')

<div class="container">

          <div class="row">
              <div class="col-md-12">
                  <h2 class="text-center text-danger" >{{$job->v_name}}</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  
            <h2>Description</h2>
            <p style="text-align: justify;"> 
            
           
            {{$job->description}}
            </p>

            <h2>Job Specification</h2>
            <p style="text-align: justify;">
            
          {{$job->job_spec}}
            </p>

          
          


            <h2> Job Features:</h2>

<table style="width:100%">
  <tr>
    <th>Job Category:</th>
    <td>{{$job->job_category}} </td>
  </tr>
  <tr>
    <th>Total Requirement:</th>
    <td>{{$job->total_req}}</td>
  </tr>
  <tr>
    <th>Educaional Qualification: </th>
    <td>{{$job->educational_qal}} </td>
  </tr>

  <tr>
    <th>Experience:  </th>
    <td>{{$job->experience}} </td>
  </tr>

  <tr>
    <th>Type of industry:  </th>
    <td>{{$job->type}}  </td>
  </tr>

  <tr>
    <th>Preferred Gender:   </th>
    <td>{{$job->gender}} </td>
  </tr>


  <tr>
    <th>Job Type: Part Time  </th>
    <td>{{$job->job_type}} </td>
  </tr>

  <tr>
    <th>Salary:    </th>
    <td>{{$job->salary}}  </td>
  </tr>
</table>




          
            </div>




          </div>



      </div>
       


       <div class="container border mt-5">
       <div class="row">
       <div class="col-md-12">
       
       <h4 class="text-center text-danger"> Form</h4>
       
       <form action="{{url('/apply-cv')}}" method="post" id="apply_job" name="apply_job" enctype="multipart/form-data"> 
       {{ csrf_field()}}
             <div class="form-group">
              
            <label for="">Your Name</label>
              <input class="form-control" type="text" name="name" id="name" >
             </div>

              <div class="form-group">
              
              <label for="">Your Email address</label>
              <input class="form-control" type="email" name="email" id="email">
              </div>

             
             <div class="form-group">
             <label for="">Contact Number</label>
              <input class="form-control" type="text" name="phone" id="phone">
             
             </div>
              
             <b><label class="mt-5" for="">Your CV: </label></b>
            <input class="ml-5" type="file" id="file" name="file">

              <!-- <p> <a href="#" class="btn btn-success mt-2">Apply</a></p> -->
            <div class="form-group">
            <button class="btn btn-success mt-5">Apply</button></div>
              </form>
       
       </div>
       </div>
       </div>
      @endsection