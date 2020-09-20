@extends('layouts.frontLayouts.front_design')
@section('content')

    <!-- SLider  -->
    <div class="container-fluid">
            
                
            <div class="row">
                <div class="slide">

                    <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                          
                            <img class="d-block w-100" src="{{asset('img/frontend_images/images/business-meeting-5395567_1920.jpg') }} "   height="690px" alt="First slide">
                            <div class="carousel-caption" style="color:black; font-family: Impact, Charcoal, sans-serif;">
                                <h1>Ready to Begin Your journey </h1>
                                <p >We act as an Employer of Record</p>
                                
                          
                              </div>
                          
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/frontend_images/images/Frpmt.jpg') }} "  height="690px" alt="Second slide">
                            <div class="carousel-caption" style="color:black; font-family: Impact, Charcoal, sans-serif;">
                               <h1>  Welcome to Raspberry</h1>
                                <p>We Provide Wide Range of Business Solutions
                                   </p>
                                
                                   
                                   
                                    
                              </div>
                          
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/frontend_images/images/Front Human resource.jpg') }} "  height="690px" alt="Third slide">
                            <div class="carousel-caption" style="color:black; font-family: Impact, Charcoal, sans-serif;">
                                <h1>Human Resource Services </h1>
                                <p>Services With Solution</p>
                          
                              </div>
                          
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>        
            
                        
                    
                    
                       
                    
           
        </div>

        <!-- slider ends -->





       
        <!-- About-->
        <section class="page-section  " id="about" style="background-color:brown">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4 class="text-white mt-0 flash">Who we are?</h4>
                        <hr class="divider light my-4" />
                        <p class="text-white mb-4 " style="text-align: justify; font-size: 15px;">

                            As Raspberry, a HR and Management Consulting Organization in Nepal provides a wide range of business performance solutions that enable business owners to be more systematic and strategic about the role that people play in the success of a company. Through our flagship, full-service HR solution, we provide everything you need to grow your business, 
                            from large company benefits to payroll processing, while managing employer liability and compliance issues.

Your challenges multiply as the business grows. At Raspberry, we believe that you don’t have to go alone on the journey.



                        </p>

                        <a href="{{url('/about')}}" class="btn text-white" style="background-color:#34840a;"> Read More</a>
                        
                    </div>
                </div>
            </div>
        </section>
       
       <!-- About ends -->





       <!-- Service -->


     
        <div class="container-fluid bg-light counter-section" >

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
                            <img class="card-img-top" src="{{asset('img/frontend_images/new/Counseling Ser.jpg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body " style="text-align: center;">
                                <h6 class="text-dark">Counseling Service</h6>
                            <a href="{{url('/counseling')}}" class="btn text-white mb-5 " style="background-color:#b8133f; font-size:14px;     ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/new/Oursourcing.jpg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">
                                    Staff Outsourcing Service</h6>
                            <a href="{{url('/staff')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px; ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/images/pexels-oleg-magni-2058130.jpg') }} " height="200px;" alt="Card image cap">
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
                            <img class="card-img-top" src="{{asset('img/frontend_images/new/Employee Record.jpg') }}" height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Employee Record</h6>
                           <a href="{{url('/employee')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px; ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/images/write-593333_1920.jpg') }} " height="200px;" alt="Card image cap">
                            <div class="card-body" style="text-align: center;">
                                <h6 class="text-dark">Candidate Assessment</h6>
                           <a href="{{url('/candidate')}}" class="btn text-white mb-5" style="background-color:#b8133f; font-size:14px;   ">Read More</a>
                            
                            </div>
                          </div>
                       </div>
        
                       <div class="col-md-4">
                        <div class="card mt-2 mb-2 ml-2" style="width: 300px; height:330px;">
                            <img class="card-img-top" src="{{asset('img/frontend_images/images/startup-594090_1920.jpg') }}" height="200px;" alt="Card image cap">
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

        <!-- Counter -->

        <div class="container-fluid counter-section" >

            <div class="row text-center     " >
        
                <div class="col-md-3 counter-box mt-3  "  >
                    <div class="icon-box"><i class="  fa fa-4x fa-users  mb-4"></i></div>

                    
                    <div class="counter" data-target="200">0</div>
                    <p style="font-size: 15px;">Staff Outsourced</p>
                </div>
        
                <div class="col-md-3 counter-box mt-3">
                    <!-- fas fa-people-arrows -->
                    <div class="icon-box"><i class="fa fa-camera fa-4x  mb-4"></i></div>
                    <div class="counter" data-target="100">0</div>
                    <p style="font-size: 15px;">Cilents Satisfaction</p>
                </div>
        
                <div class="col-md-3 counter-box mt-3">
                    <div class="icon-box">
                        <!-- <i class="fas fa-digging"></i> -->
                        <i class="fa fa-4x fa-home  mb-4"></i></div>
                    <div class="counter" data-target="100">0</div>
                    <p style="font-size: 15px;">Counseling</p>
                </div>
        
                <div class="col-md-3 counter-box mt-3">
                    <div class="icon-box">
                    <!-- <i class="fa fa-address-card"></i> -->
                    <i class="fa fa-4x fa-address-card  mb-4"></i>
                    </div>
                    <div class="counter" data-target="100">0</div>
                    <p style="font-size: 15px;"> Recruitment</p>
                </div>
        
        
            </div>
        </div>

      

        @endsection

