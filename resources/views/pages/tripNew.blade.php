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
      <div ng-controller="detailController">
      <section class="text-center trip-new">
        <div class="container">
          <div class="row">
            <form ng-controller="HomeController">
            <div class="col-md-5 col-md-offset-1 br1 pd0">
              <input type="text" class="form-control" placeholder="Hunza Valley, Pakistan" ng-model="query">
            </div>
            <div class="col-md-2 from-location pd0">
              <input type="text" class="form-control datepicker_1" id="Date-from" placeholder="From" ng-model="from">
            </div>
            <div class="col-md-2 pd0">
              <input type="text" class="form-control datepicker_2" id="Date-To" placeholder="To" ng-model="to">
            </div>
            <div class="col-md-1  pd0">
              <input type="submit" name="Search" class="btn fullwd br0 btn-primary" ng-click="show()">
            </div>
            </form>
          </div>
          <div class="row text-left trip-head">
            <div class="col-md-12">
              <h2>@{{title}}</h2>
              <p>By @{{operator}}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="trip-main bg-gray">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="trip-main-box">
                <div class="trip-main-head">
                  <div class="row">
                    <div class="col-md-3  text-left">
                     <h5>COST PER PERSON</h5>
                     <p>RS. @{{cost}}</p>
                   </div>
                   <div class="col-md-3 text-center ">
                    <h5>REMAINING CAP</h5>
                    <p>@{{rcapacity}}</p>
                  </div>
                  <div class="col-md-3 text-center ">
                    <h5>TOTAL CAPACITY</h5>
                    <p>@{{capacity}}</p>
                  </div>
                  <div class="col-md-3 pdtp25 text-center ">
                   <button class="btn btn-info btn-fw br3" ng-click="book(id)">Book Now</button>
                 </div>
               </div>
             </div>
             <div class="trip-main-body">
              <div class="row">
                <div class="col-md-9">
                  <p>@{{description}}</p>
                  </div>
                  <div class="col-md-3">
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
                </div>
                <div id="map"></div>
                <script>
                  var map;
                  function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: -34.397, lng: 150.644},
                      zoom: 8
                    });
                  }
                </script>
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-green"> Trip ltinerary</h2>
                  </div>
                </div>
                <!--<iframe 
                 width="600"
                 height="450"
                 frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCbAfQP7Joorbj3AKKKXJtzhQ2ifkeoypA&origin=lahore&destination=hunza"> </iframe>-->
                <div class="row">
                  <div class="col-md-4" ng-repeat="i in itenary">
                    <div class="trip-panel br-green">
                      <div class="trip-panel-head bg-green text-center">
                        <p>Day @{{i.ID}}</p>
                      </div>
                      <div class="trip-panel-body">
                        <ul>
                          <li>@{{i.day}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>                           
              </div>
              <div class="trip-review">
                <div class="row">
                  <div class="col-md-12">
                    <div class="tabs-holder">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">QUESTIONS</a></li>
                        <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REVIEWS</a></li>-->
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" placeholder="Ask all the questions you have here" ng-model="comnt" ng-click="comment()"></textarea>
                              </div>
                            </div>
                            <div class="col-md-2 pull-right">
                                <button class="btn btn-info btn-fw br3" ng-click="submitComment(id,operator,comnt)">Submit</button>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="comment-holder">
                                <ul>
                                  <li class="row" ng-repeat="q in question track by $index">
                                    <div class="col-md-2">
                                      <img src="{{asset('assets/images/img1.png')}}">
                                    </div>
                                    <div class="col-md-8">
                                      <h3>@{{q.name}}</h3>
                                      <p>@{{q.comment}}</p>
                                      <span class="glyphicon glyphicon-share-alt"></span><span class="glyphicon glyphicon-heart
                                      "></span>
                                    </div>
                                    <div class="col-md-2">
                                      <p>@{{q.created_at}}</p>
                                    </div>

                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--<div role="tabpanel" class="tab-pane" id="profile">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="comment-holder">
                                <ul>
                                  <li class="row">
                                    <div class="col-md-2">
                                      <img src="{{asset('assets/images/img1.png')}}">
                                    </div>
                                    <div class="col-md-8">
                                      <h3>Azam Shahani</h3>
                                      <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                                      <span class="glyphicon glyphicon-share-alt"></span><span class="glyphicon glyphicon-heart
                                      "></span>
                                    </div>
                                    <div class="col-md-2">
                                      <p>1 Hours ago</p>
                                    </div>

                                  </li>
                                  <li class="row pdlf90">
                                    <div class="col-md-2">
                                      <img src="{{asset('assets/images/img1.png')}}">
                                    </div>
                                    <div class="col-md-8">
                                      <h3>Azam Shahani</h3>
                                      <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                                      <span class="glyphicon glyphicon-share-alt"></span><span class="glyphicon glyphicon-heart
                                      "></span>
                                    </div>
                                    <div class="col-md-2">
                                      <p>12 Hours ago</p>
                                    </div>
                                    
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="trip-right">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="blue-text">Photos from the Trip</h2>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6" ng-repeat="i in images">
                  <div class="gallery-holder">
                    <img src="{{asset('images')}}/@{{i}}">
                  </div>
                </div>
              </div>
              
              <div ng-show="showImage">
              <div class="row">
                <div class="col-md-9">
                  <div class="gallery-holder">
                    <img src="{{asset('images')}}/@{{image}}">
                  </div>
                </div>
              </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    </div><!--detailcontroller ending-->
@endsection
