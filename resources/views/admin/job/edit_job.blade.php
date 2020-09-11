@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">JOBS</a> <a href="#" class="current">Validation</a> </div>
    <h1>Edit Vaccancy</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Job</h5>
          </div>
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
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/edit-job/'.$job->id)}}" name="add_job" id="add_job" novalidate="novalidate"> {{ csrf_field()}}
    

              <div class="control-group">
                <label class="control-label">Vacancy Name</label>
                <div class="controls">
                  <input type="text" name="v_name" id="v_name" value="{{  $job->v_name }}">
                </div>
              </div>


             
           
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  
                  <textarea name="description" id="description"  > {{ $job->description   }}
                 
                  </textarea>
                </div>
              </div>
           
              <div class="control-group">
                <label class="control-label">Job Specification</label>
                <div class="controls">
                  <input type="text" name="job_spec" value="{{   $job->job_spec }}"  id="job_spec" >
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Job Caategory</label>
                <div class="controls">
                  <input type="text" name="job_category" value="{{ $job->job_category   }}"  id="job_category">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Total Required </label>
                <div class="controls">
                  <input type="text" name="total_req" value="{{  $job->total_req  }}"  id="total_req">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Educational Qualification</label>
                <div class="controls">
                  <input type="text" name="educational_qal" value="{{  $job->educational_qal  }}"  id="educational_qal">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Experience</label>
                <div class="controls">
                  <input type="text" name="experience" value="{{   $job->experience }}"  id="experience">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Type</label>
                <div class="controls">
                  <input type="text" name="type" value="{{   $job->type }}"  id="type">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Gender </label>
                <div class="controls">
                  <input type="text" name="gender" value="{{  $job->gender  }}"  id="gender">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Job Type </label>
                <div class="controls">
                  <input type="text" name="job_type" value="{{   $job->job_type }}"  id="job_type">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Salary </label>
                <div class="controls">
                  <input type="text" name="salary" value="{{  $job->salary  }}"  id="salary">
                </div>
              </div>
              
           
            
              <div class="form-actions">
                <input type="submit" value="UPDATE JOB" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection