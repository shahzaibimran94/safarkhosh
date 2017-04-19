@extends('include.header')
@section('title','Orders')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Orders</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="directs-links pull-right">
      <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" data-column="0" placeholder="Search By Invoice ID..." data-lastsearchtime="1491036679800">
      <br>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">


          <h2></h2>            
          
          <div class="x_content">
          <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th>Invoice ID</th>
                  <th>Customer ID</th>
                  <th>Customer Name</th>
                  <th>Title</th>
                  <th>Operator/Seller</th>
                  <th>Type</th>
                  <th>No. of Passengers/Items</th>
                  <th>Total Payment</th>
                  <th>Payment Status</th>
                  <th>Cancel</th>
                </tr>
              </thead>
             <tbody>
              @foreach($query as $q)
                <tr>
                <td>{{$q->invoiceId}}</td>
                <td>{{$q->customerId}}</td>
                <td>{{$q->customerName}}</td>
                <td>{{$q->title}}</td>
                <td>{{$q->operator}}</td>
                <td>{{$q->type}}</td>
                <td>{{$q->passenger}}</td>
                <td>{{$q->payment}}</td>
                <td>@if($q->status==0)
                    NotPaid
                    @endif
                    @if($q->status==1)
                    Paid
                    @endif
                    <a class="fa fa-refresh pull-right" href="{{url('changeOrder',$q->id)}}"></a>
                </td>
                <td>{{$q->cancel}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
@endsection
@endsection