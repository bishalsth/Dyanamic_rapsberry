<!-- navbar -->
<div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark  p-0" id="mainNavbar" style="background-color: white;">
        
                <!-- navbar logo -->
        
                <a href="{{url('/')}}" class="navbar-brand py-2 px-3">
                    <img src="{{asset('img/frontend_images/logo.png') }}" style="height: 48px;" alt="">
                </a>
        
                <!-- Collapse button to replace links below 992px wide screen -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbarContent">
                    <span class="navbar-toggler-icon">
        
                    </span>
        
                </button>
        
                <!-- Navigation links -->
                <div class="collapse navbar-collapse justify-content-around" id="mainNavbarContent" >
        
                    <!-- align on left -->
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link px-3 " style="color:black;">HOME</a>
        
                        </li>
        
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link px-3 " style="color:black;">ABOUT</a>
        
                        </li>
        
                        <!-- <li class="nav-item">
                            <a href="{{url('/service')}}" class="nav-link px-3 " style="color:black;">SERVICES</a>
        
                        </li> -->

                        <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-dark" href="{{url('/service')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/counseling')}}">Counseling Service</a>
          <a class="dropdown-item" href="{{url('/staff')}}">Staff Outsourcing Service</a>
          <a class="dropdown-item" href="{{url('/recruitment')}}">Recruitment Services</a>
          <a class="dropdown-item" href="{{url('/employee')}}">Employee Record</a>
          <a class="dropdown-item" href="{{url('/candidate')}}">Candidate Assessment</a>
          <a class="dropdown-item" href="{{url('/management')}}">Management Consulting</a>

          
        </div>
      </li>
        
                        <li class="nav-item">
                            <a href="{{url('/career')}}" class="nav-link px-3 " style="color:black;">CAREER</a>
        
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/email')}}" class="nav-link px-3 " style="color:black;">CONTACT US</a>
        
                        </li>
        
                        
       
        
                </div>
            </nav>
        </div>
        
       