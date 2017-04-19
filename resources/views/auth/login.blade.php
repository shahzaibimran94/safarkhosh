<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Safar Khoush | Login</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <div class="panel panel-defualt" style="box-shadow: 0 0 46px rgba(221, 137, 45);">
          <div class="panel-header">
          <h2 class="title"><img src="{{asset('assets/logo-header.png')}}" ></h2>
          </div>
          <div class="panel-body">
            <form action="{{ route('login') }}" method="post">
              <div class="separator">
              </div>
              <div class="clearfix"></div>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                {{csrf_field()}}
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
               <center> <button class="btn btn-default submit" style="background-color:#dd892d;color:#fff"  type="submit">Log in</button>
                </center>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>

              <div>
                
                <p style="color:#91341e;">©2016 All Rights Reserved. <a href="http://softvilla.com.pk">SafarKhoush</a></p>
              </div>
            </form>
            </div>
            </div>
          </section>
        </div>

        
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>