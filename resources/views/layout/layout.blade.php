<!DOCTYPE html>
<html ng-app="getTours" ngCloak>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tours</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
  <link href="{{asset('assets/css/normalize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/webflow.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/safarkhoush.webflow.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
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
      #map {
        height: 250px;
      }
    </style>

@yield('content');

      <footer class="footer">
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-md-3">
              <div class="footer-box">
                <h3>
                 <a class="" href="#"><img class="logo" src="{{asset('assets/images/safarkhoush-logo.png')}}" width="65">
                  <div class="logo-text logo-dark-text">safarkhoush</div>
                </a>
              </h3>
              <p><a href="">hi@safarkhoush.com</a></p>
              <p>+92 123 456 789</p>
              <p class="mrtp100">&copy 2016 Safarkhoush</p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="footer-box  footer-box-info ">

              <p class="pdl0">54, Square 6</p>
              <p class="pdl0">Area 7, SS, Mars South</p>
            </div>
          </div>
          <div class="col-md-2">
            <h6>Menu</h6>
            <ul class="menu-links">
              <li>
                <a href="">Link 1</a>
              </li>
              <li>
                <a href="">Link 2</a>
              </li>
              <li>
                <a href="">Link 3</a>
              </li>
              <li>
                <a href="">Link 4</a>
              </li>
              <li>
                <a href="">Link 5</a>
              </li>

            </ul>
          </div>
          <div class="col-md-2">
            <h6>Locations</h6>
            <ul class="menu-links">
              <li>
                <a href="">Location 1</a>
              </li>
              <li>
                <a href="">Location 2</a>
              </li>
              <li>
                <a href="">Location 3</a>
              </li>
              <li>
                <a href="">Location 4</a>
              </li>
              <li>
                <a href="">Location 5</a>
              </li>

            </ul>
          </div>
          <div class="col-md-3">
            <h6>Social</h6>
            <ul class="social-icons">
              <li>
                <a href=""><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-pinterest"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
               <a href=""><i class="fa fa-youtube"></i></a>
             </li>
           </ul>

           <div class="subscribe-holder">
            <input type="text" class="form-control" placeholder="Your Email here">
            <button class="btn br0 btn-info btn-primary">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <!-- Aangular Material load from CDN -->
  <script src="{{ asset('assets/js/angular.min.js')}}" type="text/javascript"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>-->
  <script src="{{ asset('assets/js/angular-material.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/webflow.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/ngStorage.min.js')}}" type="text/javascript"></script>
  <!-- Angular Application Scripts Load  -->
  <script src="{{ asset('public/angular/app.js') }}"></script>
  <script src="{{ asset('public/angular/controllers/HomeController.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbAfQP7Joorbj3AKKKXJtzhQ2ifkeoypA&callback=initMap"
    async defer></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
      $('#fullListing').click(function(){
        $('.bg-gray').addClass('colListing');
      });
      $('#colListing').click(function(){
        $('.bg-gray').removeClass('colListing');
      });
      jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
      jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

        btnUp.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue >= max) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue + 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue <= min) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue - 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });

      });
      $( function() {
        $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
      } );
      $( function() {
        $( "#datepicker2" ).datepicker({dateFormat: 'yy-mm-dd'});
      } );
    //$('.dateinput').datepicker({dateFormat: 'dd/mm/yy'});
  });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        itemsMobile:[600,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});

   
        function goToByScroll(id){
          // Reove "link" from the ID
        id = id.replace("link", "");
          // Scroll
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top},
            'slow');
    }

    $("#aboutinfolink").click(function(e) { 
          // Prevent a page reload when a link is pressed
        e.preventDefault(); 
          // Call the scroll function
        goToByScroll($(this).attr("id"));           
    });
    
  </script>
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
</body>
</html>