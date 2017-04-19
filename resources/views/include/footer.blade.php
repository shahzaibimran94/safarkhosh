<footer>
          <div class="pull-right">
            BlackCollective(Pvt) Ltd.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
     <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
     <!-- Custom JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('assets/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('assets/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets/js/flot/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('assets/js/flot/date.js')}}"></script>
    <script src="{{asset('assets/js/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/js/flot/curvedLines.js')}}"></script>
    <!-- jVectorMap -->
    <script src="{{asset('assets/js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets/build/js/custom.min.js')}}"></script>
          <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script>
 $(function () {
    $(".date").datepicker();
    date(".now");
    $(".date").focusout(function () {
        if ($(this).val().trim() == "") {
            date(".date");
        }
    });

    function date(selector) {
        var dNow = new Date();
        var localdate = dNow.getFullYear()+'/' +(dNow.getMonth() + 1)+'/' + dNow.getDate();
       
    }

});
</script>
    <script>
    $(".abc").on("keypress", function (event) {

            var englishAlphabetAndWhiteSpace = /[A-Za-z ]/g;


            var key = String.fromCharCode(event.which);


            if (event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabetAndWhiteSpace.test(key)) {
                return true;
            }
            return false;
        });

         $('.abc').on("paste", function (e) {
            e.preventDefault();
        });
        $(".abc1").on("keypress", function (event) {

            var englishAlphabetAndWhiteSpace = /[A-Za-z0-9|-]/g;


            var key = String.fromCharCode(event.which);


            if (event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 32 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabetAndWhiteSpace.test(key)) {
                return true;
            }


            return false;
        }); $('.abc1').on("paste", function (e) {
            e.preventDefault();
        });
        $(document).bind("contextmenu", function (e) {
            e.preventDefault();
        });
         //form only numbers
        $(".num").on("keypress", function (e) {
          
            var evt = (e) ? e : window.event;
            var charCode = (evt.keyCode) ? evt.keyCode : evt.which;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        });
    </script>
    @yield('script')
  </body>
</html>