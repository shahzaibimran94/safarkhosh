@extends('include.header')
@section('title','New User')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Admin</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Admin</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <form class="form-horizontal form-label-left" action="{{url('addAdmin')}}" method="post">
            {{csrf_field()}}

            <input type="hidden" name="id"  value="0" />
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Name" required="required" type="text">
              </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email"  id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email">
          </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="username"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="username" placeholder="Username" required="required" type="text">
      </div>
  </div>

  <div class="item form-group">
    <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="password" placeholder="Enter Password"  type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
  </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button id="send" type="submit" class="btn btn-success">Add</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection