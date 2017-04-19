@extends('include.header')
@section('title','Gear')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Tour Operator</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">
            <form action="{{url('addoperator')}}" id="save_operator" method="post">
            {{csrf_field()}}
              <div class="add-holder">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name *</label>
                      <input type="text" class="form-control contactus-form-control" placeholder="Name *" name="name" required>
                    </div>
                    <div class="form-group">
                      <label>Email *</label>
                      <input type="email" class="form-control contactus-form-control" placeholder="Email *" name="email" required>
                    </div>
                    <div class="form-group">
                      <label>Facebool Page URL *</label>
                      <input type="text" class="form-control contactus-form-control" placeholder="Facebool Page URL *" name="fb_page_url" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contact Name *</label>
                      <input type="text" class="form-control contactus-form-control" placeholder="Contact Name *" name="contact_name" required>
                    </div>
                    <div class="form-group">
                      <label>Phone # *</label>
                      <input type="text" class="form-control contactus-form-control" placeholder="Phone # *" name="phone" required>
                    </div>
                    <div class="form-group">
                      <label>Address *</label>
                      <input type="text" class="form-control contactus-form-control" placeholder="Address *" name="address" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-edit-form" value="Save" name="save_operator">
                    </div>
                  </div>
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


