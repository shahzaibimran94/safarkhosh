@extends('include.header')
@section('title','Operators')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tour Operators</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="directs-links">
      <a href="{{url('operatorForm')}}" class="btn btn-primary pull-right">Add New Tour Operator</a>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          
            <h2>All Operators</h2>            
          
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Contact Name</th>
                  <th>Phone No.</th>
                  <th>Email</th>
                  <th>FB page URL</th>
                  <th>Tours</th>
                  <th>Address</th>
                  <th>Edit</th>
                  <th>Block</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                @foreach($query as $q)
                <tr>
                <td>{{$q->name}}</td>
                <td>{{$q->cname}}</td>
                <td>{{$q->phone}}</td>
                <td>{{$q->email}}</td>
                <td>{{$q->fburl}}</td>
                <td><a href="{{url('publish',$q->name)}}">Click</a></td>
                <td>{{$q->address}}</td>
                <td><a href="{{url('editOperator',$q->id)}}">Edit</a></td>
                <td><a href="{{url('blockOperator',$q->id)}}">Block</a></td>
                <td><a href="{{url('delOperator',$q->id)}}">Delete</a></td>
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