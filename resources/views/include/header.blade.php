<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <title>Admin | @yield('title')</title>
    <link href="{{asset('assets/build/css/form.css')}}" rel="stylesheet"> 
    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="{{asset('assets/css/maps/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet"/>
     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">

<!--  -->
<!--Import Google Icon Font-->
    <link href='http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!--Import Multi Step Indicator css-->
    <link href="{{asset('assets/formwizard/css/gsi-step-indicator.min.css')}}" rel="stylesheet" />

    <!--Import  Step Form Wizard css-->
    <link href="{{asset('assets/formwizard/css/tsf-step-form-wizard.min.css')}}" rel="stylesheet" />
    <!--Import  demo css-->
    <link href="{{asset('assets/formwizard/css/demo.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/formwizard/plugin/parsley/css/parsley.min.css')}}" rel="stylesheet" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


        <!-- Jquery -->
      <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script> 
    <script>
    var jq = jQuery.noConflict();
     jq(document).ready(function(){
            $(document).ajaxStart(function() {
                jq('#ajaxload').show();
            });
            $(document).ajaxStop(function() {
                 jq('#ajaxload').hide();
            });
      });
    </script>
<!--  -->
  </head>
      
  <body class="nav-md" id="main_frame" style="color:black">
    <div class="container body" style="background: #464748;">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="background-color:#464748" >
            <div class="navbar nav_title" style="border: 0;background-color:#fff">
              <a href="home" class="site_title">
                <center>
                <img class="img-responsive" stlyle=" width:170px; height:100px;" src="{{asset('assets/slogo.png')}}" /> 
                </center>
                
              </a>
            </div>

            <div class="clearfix"></div>

            <br />
            @include('include.siderbar')
            @yield('content')
            @include('include.footer')