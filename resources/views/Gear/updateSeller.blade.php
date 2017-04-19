@extends('include.header')
@section('title','Gear')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Update Seller</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

      <div class="x_content">
        <form action="{{url('saveupdateseller')}}" id="save_gear" method="post">
            <input type="hidden" name="id" value='<?php echo $query[0]->id; ?>'>
            {{csrf_field()}}
            <div class="add-holder">
                
                        

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name *</label>
                            
                            <input type="text" class="form-control contactus-form-control" placeholder="Name *" name="name" value='<?php echo $query[0]->name; ?>' required>
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-edit-form" value="Save" id="save_profile" name="save_tour" required>
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