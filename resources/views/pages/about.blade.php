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
   

  <section class="about-main">
      
      <div class="container-fluid">
          
          <div class="row">
              
              <div class="col-md-12">
                  
                  <h1>We carry <span class="green-text"> people </span> to </br> <span class="blue-text"> beautiful places </span></h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <a href="#" id="aboutinfolink" class="arrow-down"></a>

              </div>

          </div>

      </div>

  </section>
  <section class="about-info" id="aboutinfo">
    
    <div class="container-fluid">
      
      <div class="row">
        
          <div class="col-md-4">
            
            <div class="info-box pdtp120">
              
                <i class="icon-booked"></i>
                <p>2 000 000+</p>
                <a href="">Booked Fights</a>

            </div>

          </div>

           <div class="col-md-4">
            
            <div class="info-box">
              
                <i class="icon-search"></i>
                <p>10 000 000+</p>
                <a href="">Search per Day </a>

            </div>

          </div>

           <div class="col-md-4">
            
            <div class="info-box pdtp120">
              
                <i class="icon-price"></i>
                <p>225 000+</p>
                <a href="">Price Updates Per Minute</a>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section class="about-content">
      
      <div class="container-fluid">
          
          <div class="row">
              
              <div class="col-md-12">
                    
                    <i class="qaute-icon"></i>

                  <p>Lorem Ipsum is simply dummy text of </br>

the printing and typesetting industry.</p>

              </div>

          </div>

      </div>

  </section>

   <section class="about-content_2">
      
      <div class="container-fluid">
          
          <div class="row">
              
              <div class="col-md-12">
                    
                    <div class="content-holder">

                                <h2>Lorem ipsum dolor </br>

              sit amet, lorem ipsum </br>

              dolor sit amet, lorem ipsum.</h2>
                              <p>Lorem ipsum dolor sit amet, lorem ipsum. </br>

              Dolor sit amet,</p>
                              <button class="btn btn-transparent">Yet, another long button</button>
                </div>
              </div>

          </div>

      </div>

  </section>

  <section class="textimonial">
      
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="description">
                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum cumque dolore ducimus est exercitationem explicabo molestiae, velit! Eum nam porro voluptate. "
                        </p>
                    </div>
                    <div class="pic">
                        <img src="" alt="">
                    </div>
                    <div class="user-info">
                      <h3 class="testimonial-title">Williamson</h3>
                      <span class="post">Web Designer</span>
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="description">
                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum cumque dolore ducimus est exercitationem explicabo molestiae, velit! Eum nam porro voluptate. "
                        </p>
                    </div>
                    <div class="pic">
                        <img src="" alt="">
                    </div>
                    <div class="user-info">
                      <h3 class="testimonial-title">Williamson</h3>
                      <span class="post">Web Designer</span>
                    </div>
                </div>
                  <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="description">
                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum cumque dolore ducimus est exercitationem explicabo molestiae, velit! Eum nam porro voluptate. "
                        </p>
                    </div>
                    <div class="pic">
                        <img src="" alt="">
                    </div>
                    <div class="user-info">
                      <h3 class="testimonial-title">Williamson</h3>
                      <span class="post">Web Designer</span>
                    </div>
                </div>
                  <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="description">
                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum cumque dolore ducimus est exercitationem explicabo molestiae, velit! Eum nam porro voluptate."
                        </p>
                    </div>
                    <div class="pic">
                        <img src="" alt="">
                    </div>
                    <div class="user-info">
                      <h3 class="testimonial-title">Williamson</h3>
                      <span class="post">Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </section>

  <section class="images-section">
      
      <div class="container-fluid">
          
          <div class="row">
              
              <div class="col-md-12">
                  
                  <div class="image-box">
                      
                      <img src="{{asset('assets/images/img2.png')}}">

                  </div>
                    <div class="image-box">
                      
                      <img src="{{asset('assets/images/img3.png')}}">

                  </div>
                    <div class="image-box">
                      
                      <img src="{{asset('assets/images/img2.png')}}">

                  </div>
                    <div class="image-box">
                      
                      <img src="{{asset('assets/images/img3.png')}}">

                  </div>
                    <div class="image-box">
                      
                      <img src="{{asset('assets/images/img2.png')}}">

                  </div>
                    <div class="image-box">
                      
                      <img src="{{asset('assets/images/img3.png')}}">

                  </div>


              </div>

          </div>

      </div>

  </section>
@endsection