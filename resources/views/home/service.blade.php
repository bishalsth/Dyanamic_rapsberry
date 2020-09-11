@extends('layouts.frontLayouts.front_design')
@section('content')


<div class="bg_service"></div>
      
        
    
        
      <div class="container-fluid bg-light counter-section" >
          <div class="row">
              <div class="container">
                  <p class="text-dark mt-5" style="text-align: justify; font-size:15px;">
                      
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quas laborum consequatur exercitationem odio veritatis, tenetur aliquid hic sunt alias itaque explicabo veniam obcaecati sequi ab repellendus nostrum neque porro.
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quas laborum consequatur exercitationem odio veritatis, tenetur aliquid hic sunt alias itaque explicabo veniam obcaecati sequi ab repellendus nostrum neque porro.
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quas laborum consequatur exercitationem odio veritatis, tenetur aliquid hic sunt alias itaque explicabo veniam obcaecati sequi ab repellendus nostrum neque porro.
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quas laborum consequatur exercitationem odio veritatis, tenetur aliquid hic sunt alias itaque explicabo veniam obcaecati sequi ab repellendus nostrum neque porro.
                      
                  
                  
                  </p>
              </div>
          </div>
          <div class="row mt-3">
                <div class="col-md-12">
                    <h4 class="text-dark mt-5 mb-5" style="text-align: center;">Our Services</h4>
                </div>
            </div>

            <div class="row ">
        
               <div class="container">
                   <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/counsel.jpeg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body " style="text-align: center;">
                                <h6 class="text-dark">Counseling Service</h6>
                            <a href="{{url('/counseling')}}" class="btn text-white mb-5 " style="background-color:#b8133f; font-size:14px;     ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/outsourcing.jpeg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">
                                    Staff Outsourcing Service</h6>
                            <a href="{{url('/staff')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px; ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/recrutiment.jpeg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Recruitment Services</h6>
                            <a href="{{url('/recruitment')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px;    ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
                   </div>
               </div>
        
            </div>

            <div class="row ">
        
               <div class="container">
                   <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/employee.jpg') }} " height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Employee Record</h6>
                           <a href="{{url('/employee')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px; ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/assesment.jpg') }} " height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Candidate Assessment</h6>
                           <a href="{{url('/candidate')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px;   ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/management.jpeg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Management Consulting</h6>
                           <a href="{{url('/management')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px;  ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
                
                   </div>
               </div>
             </div>

            
        </div>

@endsection