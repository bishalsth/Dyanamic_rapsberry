@extends('layouts.frontLayouts.front_design')
@section('content')

<div class="bg_career"></div>
     
       
       
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

     <div class="container border mt-5 ">
        
     <h4>Vacancy</h4>
        @foreach($jobs as $job)
         <div class="row ">

             <div class="col-md-12 mt-5 mb-5">
                 <div class="graphic text-secondary border">
                     <h6 class="ml-3 text-center text-dark">{{$job->v_name}} </h6>
     
                     <p class="mt-3 ml-2 mr-2" style="font-size: 14px; text-align:justify;">
                         {{$job->description}}
                     </p>
                     <!-- <button class="btn text-white mb-3 ml-3" style="background-color:#b8133f">Read More</button> -->
                     <a href="{{url('/carrer-detail/'.$job->id)}}" class="btn text-white mb-3 ml-3" style="background-color:#b8133f">Read More</a>
                 </div>
             </div>
         </div>
        @endforeach

         <!-- <div class="row">
     
             <div class="col-md-12 mt-5 mb-5">
                 <div class="graphic text-secondary border">
                     <h6 class="ml-3 text-center text-dark">Graphic Designer </h6>
     
                     <p class="mt-3 ml-3" style="font-size: 14px;">
                         Job Description: Conceptualizing creative ideas. Working with different design platforms such as digital and print forms. Planning concepts by studying relevant information and materials. Collaborate with team to ensure consistency of designs across various media outlets. Communicating with clients about layout and design. 
                         Create compelling graphics and layouts, logos, designs, print. Maintain awareness of current […]
                     </p>
                     <button class="btn text-white mb-3 ml-3" style="background-color:#b8133f">Read More</button>
                 </div>
             </div>
         </div>

         <div class="row">
     
             <div class="col-md-12 mt-5 mb-5">
                 <div class="graphic text-secondary border">
                     <h6 class="ml-3 text-center text-dark">HR Analyst </h6>
     
                     <p class="mt-3 ml-3" style="font-size: 14px;">
                         Job Description: Conceptualizing creative ideas. Working with different design platforms such as digital and print forms. Planning concepts by studying relevant information and materials. Collaborate with team to ensure consistency of designs across various media outlets. Communicating with clients about layout and design. 
                         Create compelling graphics and layouts, logos, designs, print. Maintain awareness of current […]
                     </p>
                     <button class="btn text-white mb-3 ml-3" style="background-color:#b8133f">Read More</button>
                 </div>
             </div>
         </div> -->
     </div>
     
     



@endsection