@extends('include.header')
@section('title','Service')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Service</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Service</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form class="form-horizontal form-label-left" action="{{url('saveService')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id"  value="@if($edit!=null){{$edit->id}}@else{{0}}@endif" />
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Service Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="@if($edit!=null){{$edit->name}}@endif"  class="form-control col-md-7 col-xs-12"  name="name" placeholder="Enter New Service Name" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-5 col-md-offset-3 ">
                          <button id="send" type="submit" class="btn btn-success btn-lg pull-right">Add Service</button>
                        </div>
                      </div>
                      </form>
                   </div>
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Service</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table   class="table table-border">
                  <thead>
                  <tr>
                  <th>Name</th>
                  <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($view as $key => $val)
                  <tr>
                  <td>{{$val->name}}</td>
                  <td>
                  <a href="{{url('Index',$val->id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{url('del',$val->id)}}"><i class="fa fa-trash"></i></a>
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