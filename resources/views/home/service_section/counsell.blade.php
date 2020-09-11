@extends('layouts.frontLayouts.front_design')
@section('content')

     
<div class="container-fluid bg-danger text-white">
          <div class="row ">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">Counseling Service</h1>
              </div>
            
          </div>
          <div class="row">
             <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('img/frontend_images/counsel.jpeg')}}" width="100%" height="100%" alt="">
                      </div>
                 </div>
             </div>
          </div>
          <div class="row " style="text-align: left;">
              <div class="container">
                  <div class="row mt-5">
                    <div class="col-md-12">

                        <h3><b><u>Description</u></b></h3>
                        <p style="text-align: justify;">
                            Counseling Services enables employees to optimize their psychological health so that
                            they may fulfill their job role as individuals and contribute to building healthy
                            relationships and communities toward greater autonomy and effectiveness, with higher
                            productivity rate for the organization


                        </p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
@endsection