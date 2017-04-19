<!DOCTYPE html>
<html ng-app="getTours" ngCloak>
<head>
  <meta charset="utf-8">
  <title>Safarkhoush</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link href="{{asset('assets/css/normalize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/webflow.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/safarkhoush.webflow.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('assets/js/modernizr.js')}}" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<style type="text/css">
      [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
        display: none !important;
      }
    </style>
<body  class="index home" ng-controller="loginController">
<!--this ng-show shows front page-->

  <div class="header w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <a class="brand w-nav-brand" href="{{url('/')}}"><img class="logo" src="assets/images/safarkhoush-logo.png" width="65">
      <div class="logo-text">safarkhoush</div>
    </a>
    <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="{{url('howItWork')}}">How it works?</a>
    <a class="nav-link w-nav-link" data-toggle="modal" data-target="#myModal" ng-if="!loggedIn">Sign In</a><a class="sign-up-button w-button" data-toggle="modal" data-target="#signupModal" ng-if="!loggedIn">Sign Up</a>
    <a class="sign-up-button w-button" data-toggle="modal" data-target="#userModal" ng-if="loggedIn" ng-click="userDetail()" ng-cloak>@{{dp}}</a>
    </nav>
    <div class="w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
  <div ng-controller="HomeController">
  <div class="widget">
    <ul class="w-list-unstyled">
      <li class="list-item">
        <a class="w-inline-block" href="" ng-click="busTrips()"><img src="{{asset('assets/images/ic_directions_bus_white_36px.svg')}}" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="" ng-click="biking()"><img src="{{asset('assets/images/ic_directions_bike_white_36px.svg')}}" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="" ng-click="explore()"><img src="{{asset('assets/images/ic_explore_white_36px.svg')}}" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="" data-toggle="modal" data-target="#csModal"><img src="{{asset('assets/images/ic_shopping_basket_white_36px.svg')}}" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="" data-toggle="modal" data-target="#csModal"><img src="{{asset('assets/images/ic_business_white_36px.svg')}}" width="30">
        </a>
      </li>
    </ul>
  </div>
  <div class="value-prop-section">
    <h1 class="main-value-prop">Experience Pakistan</h1>
    <h3 class="subheading">Choose from over a hundred expeditions across the country</h3><a class="primary-button w-button" data-toggle="modal" data-target="#signupModal">Join Now</a><a class="secondary-button w-button" href="{{url('about')}}">Learn More</a>
  </div>
  <div class="search-section">
    <div class="search-container w-container">
    <!-- Forms need fixing. Front end validations also required. Calendar dropdown to be implemented as well.  -->
      <div class="w-form">
        <div class="form-box" id="email-form" name="email-form">
          <label class="form-label" for="Location">Search for tours and adventures</label>
          <input class="location-input w-input" data-name="Location" id="Location" maxlength="256" ng-model="query" name="Location" placeholder="Hunza Valley, Pakistan" type="text">
          <input class="date-from-field w-input datepicker_1" data-name="Date from" id="Date-from" maxlength="256" ng-model="from" name="Date-from" placeholder="From" type="text">
          <input class="date-to-field w-input datepicker_2" data-name="Date To" id="Date-To" maxlength="256" ng-model="to" name="Date-To" placeholder="To" type="text">
          <input type="submit" name="Search" class="search-button w-button" ng-click="show()">
        </div>
      </div>
    </div>
    <div class="footer-div w-clearfix">
      <div class="copyright">Copyrights 2016&nbsp;Safarkhoush © &nbsp;All rights reserved</div><a class="footer-link" href="{{url('about')}}">About</a><a class="footer-link" href="#">Contact</a><a class="footer-link" href="#">Privacy Policy</a><a class="footer-link" href="#">Terms of service</a>
      <ul class="social-icons-list w-list-unstyled">
        <li class="list-item-footer">
          <a class="w-inline-block" href="#"><img src="{{asset('assets/images/facebook-box.png')}}" width="20">
          </a>
        </li>
        <li class="list-item-footer">
          <a class="w-inline-block" href="#"><img src="{{asset('assets/images/twitter-box.png')}}" width="20">
          </a>
        </li>
      </ul>
    </div>
  </div>
 </div>


  <div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <label>Username</label>
            <input class="form-control" type="text" ng-model="username">
            <label>Password</label>
            <input class="form-control" type="Password" ng-model="password">
          </form>
        </div>
        <div class="modal-footer">
          @{{error}}
          <button type="button" class="btn btn-primary" ng-click="login()">Login</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>

  <div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp</h4>
        </div>
        <div class="modal-body">
            <form>
            <label>Name</label>
            <input class="form-control" type="text" ng-model="name" value="">
            <label>Email</label>
            <label class="label label-danger" id="message">Email already Exists</label>
            <label class="label label-danger" id="notemail">example@server.com</label>
            <input class="form-control" type="email" id="mail" ng-model="email" value="">
            <label>Username</label>
            <label class="label label-danger" id="unmessage">Username already Exists</label>
            <input class="form-control" type="text" id="username" ng-model="username" value="">
            <label>Password</label>
            <label class="label label-danger">@{{passwordError}}</label>
            <input class="form-control" type="Password" ng-model="password" value="">
            </form>
        </div>
        <div class="modal-footer">
          @{{signupError}}
          <button type="button" class="btn btn-primary" ng-click="signup()">Submit</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>

  <div class="container">
  <div class="modal fade" id="userModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">@{{user.name}}</h2>
        </div>
        <div class="modal-body">
          <form>
            <h4>Email</h4>
            <label>@{{user.email}}</label>
            <h4>Username</h4>
            <label>@{{user.username}}</label>
          </form>
        </div>
        <div class="modal-footer">
          @{{error}}
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Update</button>
          <button type="button" class="btn btn-primary" ng-click="logout()">Logout</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>

  <div class="container">
  <div class="modal fade" id="updateModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">@{{user.name}}</h2>
        </div>
        <div class="modal-body">
          <form>
            <h4>Name</h4>
            <input class="form-control" type="text" ng-model="newName">
            <h4>Password</h4>
            <label class="label label-danger">@{{newPasswordError}}</label>
            <input class="form-control" type="password" ng-model="newPassword">
          </form>
        </div>
        <div class="modal-footer">
          @{{error}}
          <button type="button" class="btn btn-primary" ng-click="update(user.id)">Update</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>

  <div class="container">
  <div class="modal fade" id="csModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h2>Feature Comming Soon</h2></center>
        </div>
      </div>

    </div>
  </div>
  </div>
  
  
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-3311815518700050.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!-- Aangular Material load from CDN -->
  <script src="{{ asset('assets/js/angular.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/angular-material.min.js')}}" type="text/javascript"></script>
  <!-- src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.js" -->
  <script src="{{ asset('assets/js/ngStorage.min.js')}}" type="text/javascript"></script>
  <!-- Angular Application Scripts Load  -->
  <script src="{{ asset('public/angular/app.js') }}"></script>
  <script src="{{ asset('public/angular/controllers/HomeController.js') }}"></script>
  <script src="{{ asset('assets/js/webflow.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
 $( function() {
    $( ".datepicker_1 , .datepicker_2" ).datepicker({dateFormat: 'yy-mm-dd'});
  } );
  </script>
  <script>
    $(document).ready(function(){
     $('#message').hide();
    })
    $(document).ready(function(){
     $('#unmessage').hide();
    })
    $(document).ready(function(){
     $('#notemail').hide();
    })
  </script>
  <script>
    $('#mail').keyup(function(){
      
      var u=$(this).val();
      //var regex= /^([a-zA-Z0-9_.+-])+\(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      //return regex.test(email)
      
      $.ajax({
              url:"{{url('ajaxemail')}}/"+u,
              success:function(result){
                if(result)
                {
                $('#message').hide();
                }else{
                    $('#message').show();
                }        
              }
      });
    });

    $('#mail').blur(function(){
      
      var u=$(this).val();

      if(u.includes('@') && u.includes('.co')){
      $('#notemail').hide();
      }else{
      $('#notemail').show();
      }        

    });

    $('#username').keyup(function(){
      
      var u=$(this).val();
      
      $.ajax({
              url:"{{url('ajaxusername')}}/"+u,
              success:function(result){
                if(result)
                {
                $('#unmessage').hide();
                }else{
                    $('#unmessage').show();
                }        
              }
      });
    });
  </script>
  <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
  </script>
  <script type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>