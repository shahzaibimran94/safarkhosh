@extends('include.header')
@section('title','Tours')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tours</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          
            <h2>All Tours</h2>            
          
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Trip Title</th>
                  <th>Invoice</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Mail for Rating</th>

                </tr>
              </thead>
              <tbody>
                @foreach($data as $q)
                <tr>
                <td>{{$q->title}}</td>
                <td>{{$q->invoiceId}}</td>
                <td>{{$q->customerName}}</td>
                <td>{{$q->email}}</td>
                <td><a href="{{url('rate',$q->title)}}">Click</a></td>
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
@endsection