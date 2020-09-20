
 @extends('layouts.frontLayouts.front_design')
@section('content')

<div class="container ">
            <div class="row">
                <div class="col-md-12 mt-5 mb-5 ">
                    <section >
                    <iframe width="100%" height="300px"src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.950475711937!2d85.3376161!3d27.6871602!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ad4c7f99e1%3A0x3f81fa5fbbe7eba4!2sRaspberry%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1600324528072!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9706.30219324354!2d85.31796209174713!3d27.71556926579691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191aaaaaaaab%3A0xa852eefd9cf32c10!2sASTU%20RESEARCH%20FOUNDATION%20TRUST!5e0!3m2!1sen!2snp!4v1599366808478!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    </section>
        
                </div>
            </div>

            <div class="row bg-success border ">
           
            <div class="col-md-6  text-center text-white mt-2 mb-2">
            <h5>Contact Information</h5>
            </div>
            <div class="col-md-6 mt-2 mb-2 text-center text-white">
            <h5>Contact Form </h5>
            </div>

            
            </div>
            

            <div class="row mt-6 border mb-5 " >
               
                <div class="col-md-6 text-secondary border " style="text-align: center;">
                    <!-- <h4 class="mt-5">Contact Information</h4> -->
        
                    <p class="mt-5" style="font-size: 15px;">Have any querry! Contact Us.</p>
        
                    <p class="mt-5" style="font-size: 15px; ">Raspberry Solution Pvt. Ltd.</p>
        
                    <p style="font-size: 15px;">Kathmandu, Nepal</p>
        
                    <p style="font-size: 15px;">+977 9801010200</p>
        
                    <p style="font-size: 15px;">info@raspberry.com.np</p>
        
                   <p style="font-size: 15px;"> FOLLOW US</p>
        
                  
                   <div class="centerdiv ">
        <a href="https://www.facebook.com/RaspberrySolution.com" target="_blank" >
            <i class="fa  fa-facebook"></i>
        </a>

        <a href="https://www.instagram.com/raspberrysolution/" target="_blank">
            <i class="fa   fa-instagram"></i>
        </a>

        <a href="https://www.linkedin.com/in/raspberry-solution-recruitment-and-outsourcing-company-in-nepal/" target="_blank">
            <i class="fa   fa-linkedin"></i>
        </a>
        
    </div>
        
                  
        
                </div>
                <div class="col-md-6 mb-5 " >
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
        
                <form action="{{url('/email/send')}}" method="post" enctype="multipart/form-data" name="cv" id="cv">
    {{csrf_field()}}
                          <p class="mt-2"style="font-size: 14px;">If you have any query please fill the form below. We will get back to you soon. 
                          
                          </p>

                          <hr>
                          
                        <div class="form-group  text-secondary" >
                            <label for="" style="font-size: 14px;">Name <span class="text-danger">*</span></label>
                          
                          <input style="font-size: 14px;" type="text" class="form-control" name="nama" placeholder="Enter Your Name" required>
                          
                        </div>
        
                        <div class="form-group text-secondary">
                            <label for="" style="font-size: 14px;">Email <span class="text-danger">*</span></label>
                          
                          <input type="email" class="form-control" name="email" placeholder="Enter Your Email" style="font-size: 14px;" required>
                          
                        </div>
        
                        <div class="form-group text-secondary">
                            <label for="" style="font-size: 14px;">Contact</label>
                          
                          <input type="text" class="form-control" name="contact" placeholder="Enter Your Contact" style="font-size: 14px;" required>
                          
                        </div>
                        <div class="form-group text-secondary">
                            <label for="exampleFormControlTextarea1" style="font-size: 14px;">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="messages" rows="3" required></textarea>
                          </div>


                         <div class="form-group">
                         <label for="" style="font-size: 14px;">Your CV:     </label>
                         <input  style="font-size: 14px;" type="file" name="image" required/>
                         </div>

                          <input type="submit"   class="btn btn-success text-white" style="font-size: 14px;" value="Submit"> 
                        </form>
                           
        
        
                  
        
                          
                        
                       
        
                </div>
            </div>
        </div>

  

@endsection