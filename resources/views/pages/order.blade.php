@extends('layout/layout')
@section('content')
<style type="text/css">
  #section-to-print{
    
  }
</style>
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

  <div ng-controller="orderController">
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

  <section class="trip-main order-head bg-gray">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="trip-main-box">
            <div class="trip-main-head">
              <div class="row">
                <div class="col-md-5  text-left">
                  <h2>Place Order</h2>
                </div>
                <div class="col-md-4 text-right pull-right">
                  <!--<a href=""><button class="btn br3 btn-lg-custom btn-info">Order Now</button></a>-->
                </div>
              </div>
            </div>
            <div class="trip-main-body">
              <div class="row">
                <div class="col-md-6">
                  <p>@{{description}} </p>
                  <span class="tags">
                    #scuba
                  </span>
                  <span class="tags">
                    #scuba
                  </span>
                </div>
                <div class="col-md-3 text-center pull-right">
                 <p>Select Number Of Person</p>
                 <div class="form-group quantity">
                  <input type="number" class="form-control" min="1" max="10" step="1" ng-model="quantity" ng-change="quantityChanged()">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12 text-center">
                <p> For every person, mention the details. You can select different addons for different persons depending on their preferences.</p>
              </div>
            </div>
            <!--quantitycontroller-->

            <div class="row" id="link">

              <div class="col-md-12">

                <div class="order-box" ng-repeat="item in form track by $index" >

                  <div class="row  text-center">
                    <div class='col-md-1'>
                      <h3>@{{item.ID}}</h3> 
                    </div>
                    <form>
                    <div class='col-md-3'>
                      <input type='text' class='form-control' name="fullname" ng-model='item.fullName' placeholder='Enter Full Name'>
                    </div> 
                    <div class='col-md-2'>
                      <input type='number' class='form-control' ng-model='item.cnic' placeholder='Enter CNIC Number'> 
                    </div>
                    <div class='col-md-3'>
                      <input type='number' class='form-control' ng-model='item.contact' placeholder='Enter Contact Number'> 
                    </div>
                    <div class='col-md-3'>
                      <input type='text' class='form-control' ng-model='item.personEmail' placeholder='Enter Email Address'>
                    </div>
                    </form>
                  </div>

                  <div class="row mrtp30">
                    <div class="col-md-5 col-md-offset-1">
                      <div class="extras-holder">
                        <p>Extras</p>
                        <div class="form-group">
                          <input type="checkbox" id="test" ng-model="extra[item.ID]" ng-true-value="1" ng-true-value="0"/>
                          <label for="test">Separate Room/Tent Rs. 1,500</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <h2 style="text-align:center"><label class="label label-danger">@{{message}}</label></h2>
                <hr class="">
                <a href="#link2"><button class="btn br3 btn-lg-custom btn-info pull-right" ng-click="submit()">Process</button></a>
              </div>

            </div>

            <hr class="">
            <div class="row mrtp30">
              <div class="col-md-12 text-center">
                <p>
                  Here’s your invoice. Please click on the checkout button to proceed. You can print this invoice by clicking the print button.
                </p>
              </div>
            </div>
            <!--checkout controller starts-->
            <div class="row" id="section-to-print">
              <div class="col-md-12">
                <div class="bg-gray invoice-holder">
                  <div class="row mrbt30">
                    <div class="col-md-3">
                      <img src="{{asset('assets/images/logodark.png')}}" width="200">
                    </div>
                    <div class="col-md-3 text-right pull-right">
                      <p>INVOICE # @{{yourInvoice}}</p>
                    </div>
                  </div>
                  <div class="mrtp60 row">
                    <div class="col-md-3">
                      <p>Prepared for </p>
                      <h3>@{{clientName}}</h3>
                    </div>
                    <div class="col-md-3 text-right pull-right">
                     <p>Date </p>
                     <h3><?php echo date('d-m-y');?></h3>
                   </div>
                 </div>

                 <div class='row'>
                  <div class="col-md-12">
                    <div class="order-content">
                      <div class="row">
                        <div class="col-md-6">
                          <h5>We appreciate your business.</h5>
                          <p>Thanks for being a customer. A detailed summary of your invoice

                            is below. If you have questions, we’re happy to help. Email

                            support@safarkhoush.com or contact us through other

                            support channels.</p>
                          </div>
                          <div class="col-md-3 pull-right text-right">
                            <img src="{{asset('assets/images/file-img.png')}}" width="100">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row" id="link2">
                    <div class="col-md-12">
                      <div class="order-content">
                        <div class="row">
                          <div class="col-md-12">
                            <h5 class="blue-text">Invoice Summary</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Description</th>
                                  <th>Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>@{{quantity}} Trippers for @{{triptitle}} Trip Rs. @{{cost}} per head</td>
                                  <td>Rs. @{{amount}}</td>
                                </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td>
                                    Service Charges
                                  </td>
                                  <td>Rs. 10,000</td>
                                </tr>
                                <tr>
                                  <td>
                                    Total Charges
                                  </td>
                                  <td>Rs. @{{total}}</td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mrtp30">
                    <div class="col-md-12 pull-right text-right">
                      <button class="btn btn-dark btn-lg-custom br3 btn-default" onclick="printDiv()">Print</button>
                      <button class="btn br3 btn-lg-custom btn-info" ng-click="order()">Checkout</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div><!--ending of ordercontroller-->
<script type="text/javascript">
  function printDiv() {
     w=window.open();
w.document.write($('#section-to-print').html());
w.print();
w.close();
}
</script>
@endsection