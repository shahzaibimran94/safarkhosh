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
<body ng-controller="orderController">
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
                </div>
              </div>
            </div>
</body>
</html>