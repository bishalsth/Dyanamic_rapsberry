@extends('layouts.frontLayouts.front_design')
@section('content')

      
    
       
<div class="container-fluid bg-danger text-white">
          <div class="row ">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">Employee Record</h1>
              </div>
            
          </div>
          <div class="row">
             <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('img/frontend_images/employee.jpg')}}" width="100%" height="100%" alt="">
                      </div>
                 </div>
             </div>
          </div>
          <div class="row " style="text-align: left;">
              <div class="container">
                  <div class="row mt-5">
                    <div class="col-md-12">

                        <h3><b><u>Description</u></b></h3>
                        <p style='text-align:justify;'>
      
                            When you outsource your HR functions with Raspberry, we provides you Employer
                            Record Services. An employer of record handles all HR, including payroll processing
                            and funding; tax deposits and filing; and employment contracts and paperwork. The
                            Employer of Record actually becomes the primary employer of your employees on
                            paper and you keep full control of your business operations and data.  
                        </p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
       
       

   
@endsection