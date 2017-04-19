@extends('layout/layout')
@section('content')
    <body>

      <div  class="wrapper search-page" ng-controller="loginController">

        <div class="header w-nav" data-animation="default" data-collapse="medium" data-duration="400">
          <a class="brand w-nav-brand" href="{{url('/')}}"><img class="logo" src="{{asset('assets/images/safarkhoush-logo.png')}}" width="65">
            <div class="logo-text logo-dark-text">safarkhoush</div>
          </a>
          <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="{{url('howItWork')}}">How it works?</a><a class="nav-link w-nav-link" data-toggle="modal" data-target="#myModal" ng-if="!loggedIn">Sign In</a><a class="sign-up-button w-button" data-toggle="modal" data-target="#signupModal" ng-if="!loggedIn">Sign Up</a>
            <a class="sign-up-button w-button" data-toggle="modal" data-target="#userModal" ng-if="loggedIn" " ng-click="userDetail()" ng-cloak>@{{dp}}</a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
        <div ng-controller="HomeController">
        <section class="search-holder" ng-init="initService()">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-2 col-xs-6 relative">
                <p>Select Activity</p>
                <div class="form-group">
                  <div class="select-holder">
                    <select ng-model="service" ng-change="filterService()">
                      <option value="" ng-selected="true">Select</option>
                      <option ng-repeat="ser in services" value='@{{ser.name}}' ng-cloak>@{{ser.name}}</option>
                    </select>
                  </div>
                </div>
                <a href="">Looking for a specific event?</a>
              </div>
              <div class="col-md-3 col-xs-6 relative">
                <p>Date Range</p>
                <div class="row mrbt10">
                  <div class="col-md-3">
                    <label> <small> From </small></label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" placeholder="07/03/2017" id="datepicker" ng-model="date.from" class="form-control" ng-change="filterDate()">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label> <small> To </small></label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" placeholder="07/03/2017" id="datepicker2" ng-model="date.to" class="form-control" ng-change="filterDate()">
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-xs-6 relative">
                <p>Price Range</p>
                <p class="blue-text"> <strong> Rs. 1,000 - Rs. 150,000 </strong></p>
                <div class="form-group">
                  Min:<input type="number" class="form-control" value="0" name="" ng-model="range.min" ng-change="filterRange()">
                  Max:<input type="number" class="form-control" value="0" name="" ng-model="range.max" ng-change="filterRange()">
                </div>
              </div>
              <div class="col-md-3 col-xs-6 relative">
                <p>Number of persons</p>
                <div class="form-group quantity">
                  <input type="number" ng-model="capacity" ng-change="filterCapacity()" class="form-control" step="1" min="1">
                </div>
                <a href="">Not Sure?</a>
              </div>
              <div class="col-md-2 col-xs-6 text-center">
                <p>Matching Results</p>
                <h4 class="green-text" ng-cloak>@{{tours.length}}</h4>
                <button class="btn btn-success" ng-click="reset()">Reset Search</button>
              </div>
            </div>
          </div>
        </section>
        <section class="container-fix">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Search" ng-model="search">
                <button type="button" class="btn btn-success" ng-click="filter(search)">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>

            </div>
          </div>
        </section>

        <section class="bg-gray">

          <div class="container-fluid" ng-if="!notrip" ng-cloak>
            <div class="row">
              <div class="col-md-12" ng-cloak>
                <h1 class="blue-text">@{{tours.length}} Results Found</h1>
              </div>
            </div>
            <!--AngularJs HomeController-->
            <div class="row">
              <div class="col-md-12">
                <div class="box-card">
                  <div class="row" ng-repeat="tour in tours.slice(0,records)">
                    <div class="col-md-3">
                      <div class="image-holder" ng-cloak>
                        <img src="{{asset('images')}}/@{{tour.poster}}">
                      </div>
                    </div>
                    <div class="col-md-4" ng-cloak>
                      <h2 class="blue-text">@{{tour.title}}</h2>
                      <span class="blue-text">@{{tour.operator}}</span>
                      <p>@{{tour.description}}</p>
                      <p>Capacity: @{{tour.rquantity}}</p>
                      <p>From:@{{tour.date_to_go}}<br>To:@{{tour.date_to_return}}</p>
                      <span class="tags">#@{{tour.service}}</span><span class="tags">#Diving</span>
                    </div>
                    <div class="col-md-2">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td><i class="iconSearch icon-1"></i></td>
                            <td>SECURITY</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-2"></i></td>
                            <td>VALUE</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-3"></i></td>
                            <td>STAFF</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-4"></i></td>
                            <td>FACILITIES</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-5"></i></td>
                            <td>FUN</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-6"></i></td>
                            <td> <span class="blue-text"> AVG. RATING </span></td>
                            <td><span class="blue-text"> @{{tour.rating}} </span></td>
                          </tr>
                          <!--<tr>
                          <div style="padding:0px;margin:0px;">
                            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#ratingModal" ng-click="rate(tour.id)">Rate</button>
                          </div>
                          </tr>-->
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-3 text-center">
                      <div class="box-right" ng-cloak>
                        <h3>Rs. @{{tour.cost_per_person}}</h3>
                        <p>per person</p>
                        <button class="btn btn-success" ng-click="detail(tour.id)">Trips Details</button>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button class="btn btn-success" id="loadbtn" ng-click="loadMore()">Load More</button> 
                  </div>         
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row" ng-if="notrip" ng-cloak>
              <div class="col-md-12">
                <div class="box-card">

              <div class="col-md-12" ng-cloak>
                <h2 class="blue-text">We couln't find a trip to your destination on the dates provided but here are some popular options.</h2>
              </div>
          
                  <div class="row" ng-repeat="t in trip">
                    <div class="col-md-3">
                      <div class="image-holder" ng-cloak>
                        <img src="{{asset('images')}}/@{{t.poster}}">
                      </div>
                    </div>
                    <div class="col-md-4" ng-cloak>
                      <h2 class="blue-text">@{{t.title}}</h2>
                      <span class="blue-text">@{{t.operator}}</span>
                      <p>@{{t.description}}</p>
                      <p>Capacity: @{{t.rquantity}}</p>
                      <p>From:@{{t.date_to_go}}<br>To:@{{t.date_to_return}}</p>
                      <span class="tags">#@{{t.service}}</span><span class="tags">#Diving</span>
                    </div>
                    <div class="col-md-2">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td><i class="iconSearch icon-1"></i></td>
                            <td>SECURITY</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-2"></i></td>
                            <td>VALUE</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-3"></i></td>
                            <td>STAFF</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-4"></i></td>
                            <td>FACILITIES</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-5"></i></td>
                            <td>FUN</td>
                            <td>9.0</td>
                          </tr>
                          <tr>
                            <td><i class="iconSearch icon-6"></i></td>
                            <td> <span class="blue-text"> AVG. RATING </span></td>
                            <td><span class="blue-text"> 9.5 </span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-3 text-center">
                      <div class="box-right" ng-cloak>
                        <h3>Rs. @{{t.cost_per_person}}</h3>
                        <p>per person</p>
                        <button class="btn btn-success" ng-click="detail(t.id)">Trips Details</button>
                      </div>
                    </div>
                  </div>         
                </div>
              </div>
            </div>
          
        </section>
        </div>
@endsection