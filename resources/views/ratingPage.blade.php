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
  <div class="value-prop-section">
  	<form method="POST" action="{{url('storeRating')}}">
  	<input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <input type="hidden" name="email" value="@{{dp}}">
  	<h1 style="color:white;">Rate {{$data->title}}</h1>
  	<div class="col-md-2 col-md-offset-5">
  		<label>Security</label>
  		<select name="security">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  		</select>
  		<label>Value</label>
  		<select name="value">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  		</select>
  		<label>Staff</label>
  		<select name="staff">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  		</select>
  		<label>Facilities</label>
  		<select name="facilities">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  		</select>
  		<label>Fun</label>
  		<select name="fun">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  		</select><br><br>
  		<input type="submit" class="btn btn-info btn-fw br3" name="submit" value="Submit">
  		</div>
  	</form>  
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
@endsection