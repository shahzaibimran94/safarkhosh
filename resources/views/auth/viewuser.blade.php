@extends('include.header')
@section('title','View User')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered">
                  <thead>
                  <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>UserName</th>
                  <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($view as $key => $val)
                  <tr>
                  <td>{{++$key}}</td>
                  <td>{{$val->name}}</td>
                  <td>{{$val->email}}</td>
                  <td>{{$val->username}}</td>
                  <td><a href="{{url('edituser',array($val->id))}}" ><i class="fa fa-edit"></i></a> 
                  <a href="{{url('trash',$val->id)}}" ><i class="fa fa-trash"></i></a> 
                      </td>
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