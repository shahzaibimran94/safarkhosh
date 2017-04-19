@extends('layout/layout')
@section('content')
<body>

<div  class="wrapper search-page" ng-controller="loginController">

        <div class="header w-nav" data-animation="default" data-collapse="medium" data-duration="400">
          <a class="brand w-nav-brand" href="{{url('/')}}"><img class="logo" src="{{asset('assets/images/safarkhoush-logo.png')}}" width="65">
            <div class="logo-text logo-dark-text">safarkhoush</div>
          </a>
          <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="{{url('howItWork')}}">How it works?</a><a class="nav-link w-nav-link" data-toggle="modal" data-target="#myModal" ng-if="!loggedIn">Sign In</a><a class="sign-up-button w-button" data-toggle="modal" data-target="#signupModal" ng-if="!loggedIn">Sign Up</a>
            <a class="sign-up-button w-button" data-toggle="modal" data-target="#userModal" ng-if="loggedIn" ng-click="userDetail()" ng-cloak>@{{dp}}</a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>



  <section class="text-center trip-new" >
    <div class="container">
      <div class="row">
          <div class="col-md-5 col-md-offset-1 br1 pd0">
            <input type="text" class="form-control" placeholder="Hunza Valley, Pakistan">
          </div>
          <div class="col-md-2 from-location pd0">
            <input type="text" class="form-control datepicker_1" placeholder="From">
          </div>
          <div class="col-md-2 pd0">
            <input type="text" class="form-control datepicker_2" placeholder="To">
          </div>
          <div class="col-md-1  pd0">
              <button class="btn fullwd br0 btn-primary">Search</button>
          </div>
      </div>
    
    </div>
  </section>

  <section class="trip-main bg-gray hiw-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="trip-main-box">
            <div class="trip-main-head">
              <div class="row">
                <div class="col-md-12  text-left">
                 <h2>How It Works</h2>
                </div>
              </div>
            </div>
            <div class="trip-main-body hiw-page">
              <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('assets/images/work-img.png')}}"> 
                
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection