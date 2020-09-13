<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>VACANCY</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{url('/admin/add-job')}}">Add JOBS</a></li>
        <li><a href="{{url('/admin/view-job')}}">View JOBS</a></li>
    
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Applied Job</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="{{url('/admin/view-applied-job')}}">View Applied Job</a></li>
        <!-- <li><a href="{{url('/admin/view-job')}}">View JOBS</a></li> -->
    
      </ul>
    </li>


   
   
 
  </ul>
</div>
<!--sidebar-menu-->