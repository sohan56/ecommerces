<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <meta charset="utf-8" />
 <title>{{ _lang('Admin') }}</title>
 <meta content="width=device-width, initial-scale=1.0" name="viewport" />
 <meta content="" name="description" />
 <meta content="Mosaddek" name="author" />
 <link href="{{asset('public/assets/admin/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/assets/bootstrap/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/css/style.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/css/style-responsive.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/css/style-default.css')}}" rel="stylesheet" id="style_color" />
 <link href="{{asset('public/assets/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
 <link href="{{asset('public/assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>

 <script type="text/javascript">
  function checkDelete()
  {

    chk = confirm ("Are You sure to Delete This??");
    if(chk)
    {
      return true;

    }else{
      return false;
    }
  }

</script>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
 <!-- BEGIN HEADER -->
 <div id="header" class="navbar navbar-inverse navbar-fixed-top">
   <!-- BEGIN TOP NAVIGATION BAR -->
   <div class="navbar-inner">
     <div class="container-fluid">
       <!--BEGIN SIDEBAR TOGGLE-->
       <div class="sidebar-toggle-box hidden-phone">
         <div class="icon-reorder"></div>
       </div>
       <!--END SIDEBAR TOGGLE-->
       <!-- BEGIN LOGO -->
       <a class="brand" href="{{url('/admin')}}">
         <img src="{{asset('public/')}}/logo3.jpg" alt="Metro Lab" width="132" width="28" />
       </a>
       <!-- END LOGO -->
       <!-- BEGIN RESPONSIVE MENU TOGGLER -->
       <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="arrow"></span>
       </a>
       <!-- END RESPONSIVE MENU TOGGLER -->

       <!-- END  NOTIFICATION -->
       <div class="top-nav ">
         <ul class="nav pull-right top-menu" >

           <!-- BEGIN USER LOGIN DROPDOWN -->
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <img src="{{asset('public/assets/admin/')}}/img/avatar1_small.jpg" alt="">
               <span class="username"><?php echo Session::get('admin_name');?></span>
               <b class="caret"></b>
             </a>
             <ul class="dropdown-menu extended logout">
               <li><a href="#"><i class="icon-user"></i> {{ _lang('My Profile') }}</a></li>
               <li><a href="#"><i class="icon-cog"></i> {{ _lang('My Settings') }}</a></li>
               <li><a href="{{URL::to('/logout')}}"><i class="icon-key"></i> {{ _lang('Log Out') }}</a></li>
             </ul>
           </li>
           <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
       </div>
     </div>
   </div>
   <!-- END TOP NAVIGATION BAR -->
 </div>
 <!-- END HEADER -->
 <!-- BEGIN CONTAINER -->
 <div id="container" class="row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="sidebar-scroll">
    <div id="sidebar" class="nav-collapse collapse">

     <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
     <div class="navbar-inverse">
      <form class="navbar-search visible-phone">
       <input type="text" class="search-query" placeholder="Search" />
     </form>
   </div>
   <!-- END RESPONSIVE QUICK SEARCH FORM -->
   <!-- BEGIN SIDEBAR MENU -->
   <ul class="sidebar-menu">
    <li class="sub-menu active">
      <a class="" href="{{url('/admin')}}">
        <i class="icon-dashboard"></i>
        <span>{{ _lang('Dashboard') }}</span>
      </a>
    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Admin') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
<!--         <li><a class="" href="{{URL::to('/add-new-admin')}}">{{ _lang('Add New Admin') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-new-admin')}}">{{ _lang('Manage New Admin') }}</a></li>
        <li><a class="" href="{{URL::to('/add-category')}}">{{ _lang('Add New User') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-category')}}">{{ _lang('Manage New user') }}</a></li> -->

      </ul>
    </li>

    <!-- <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Category') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-category')}}">{{ _lang('Add Category') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-category')}}">{{ _lang('Manage Category') }}</a></li>

      </ul>
    </li> -->
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Mens Category') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-mens-category')}}">{{ _lang('Add Category') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-mens-category')}}">{{ _lang('Manage Category') }}</a></li>

      </ul>
    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Womens Category') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-womens-category')}}">{{ _lang('Add Category') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-womens-category')}}">{{ _lang('Manage Category') }}</a></li>

      </ul>
    </li>
<!--     <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Manufacturer') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-manufacturer')}}">{{ _lang('Add Manufacturer') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-manufacturer')}}">{{ _lang('Manage manufacturer') }}</a></li>

      </ul>
    </li> -->

    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Home Product') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-product')}}">{{ _lang('Add Product') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-product')}}">{{ _lang('Manage product') }}</a></li>

      </ul>

    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Mens Product') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-mens-product')}}">{{ _lang('Add Mens Product') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-mens-product')}}">{{ _lang('Manage Mens product') }}</a></li>

      </ul>

    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Womens Product') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-womens-product')}}">{{ _lang('Add Womens Product') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-womens-product')}}">{{ _lang('Manage womens product') }}</a></li>

      </ul>

    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Electronics Product') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/add-e-product')}}">{{ _lang('Add Electronics Product') }}</a></li>
        <li><a class="" href="{{URL::to('/manage-e-product')}}">{{ _lang('Manage Electronics product') }}</a></li>

      </ul>

    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Customer') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/view-customer')}}">{{ _lang('View Customer') }}</a></li>


      </ul>
    </li>
    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Orders') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('/orders')}}">{{ _lang('Order List') }}</a></li>


      </ul>
    </li>

    <li class="sub-menu">
      <a href="javascript:;" class="">
        <i class="icon-book"></i>
        <span>{{ _lang('Settings') }}</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub">
        <li><a class="" href="{{URL::to('settings/general')}}">{{ _lang('General') }}</a></li>
        <li><a class="" href="{{URL::to('/admin/languages')}}">{{ _lang('Languages') }}</a></li>
      </ul>

    </li>
  </ul>
  <!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->  
<div id="main-content">
 <!-- BEGIN PAGE CONTAINER-->
 <div class="container-fluid">
  <!-- BEGIN PAGE HEADER-->   
  <div class="row-fluid">
   <div class="span12">

    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
     {{ _lang('Dashboard') }}
   </h3>
   <ul class="breadcrumb">
     <li>
       <a href="#">{{ _lang('Home') }}</a>
       <span class="divider">/</span>
     </li>
     <li>
       <a href="#">{{ _lang('') }}</a>
       <span class="divider">/</span>
     </li>
     <li class="active">
       {{ _lang('Dashboard') }}
     </li>
     <li class="pull-right search-wrap">
       <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
         <div class="input-append search-input-area">
           <input class="" id="appendedInputButton" type="text">
           <button class="btn" type="button"><i class="icon-search"></i> </button>
         </div>
       </form>
     </li>
   </ul>
   <!-- END PAGE TITLE & BREADCRUMB-->
 </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
@yield('content')



<!-- END PAGE CONTENT-->         
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->  
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
 © 2019 Shopify Store. All rights reserved |
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="{{asset('public/assets/admin/')}}/js/jquery-1.8.3.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('public/assets/admin/')}}/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="{{asset('public/assets/admin/')}}/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="{{asset('public/assets/admin/')}}/js/excanvas.js"></script>
   <script src="{{asset('public/assets/admin/')}}/js/respond.js"></script>
 <![endif]-->

 <script src="{{asset('public/assets/admin/')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
 <script src="{{asset('public/assets/admin/')}}/js/jquery.sparkline.js" type="text/javascript"></script>
 <script src="{{asset('public/assets/admin/')}}/assets/chart-master/Chart.js"></script>

 <!--common script for all pages-->
 <script src="{{asset('public/assets/admin/')}}/js/common-scripts.js"></script>

 <!--script for this page only-->

 <script src="{{asset('public/assets/admin/')}}/js/easy-pie-chart.js"></script>
 <script src="{{asset('public/assets/admin/')}}/js/sparkline-chart.js"></script>
 <script src="{{asset('public/assets/admin/')}}/js/home-page-calender.js"></script>
 <script src="{{asset('public/assets/admin/')}}/js/chartjs.js"></script>

 <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>