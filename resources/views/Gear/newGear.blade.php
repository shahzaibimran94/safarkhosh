@extends('include.header')
@section('title','Gear')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Gear</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

      <div class="x_content">
        <form action="{{url('addGear')}}" id="save_gear" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="add-holder">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control contactus-form-control" placeholder="Name *" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Select Gear Category</label>
                            <select class="form-control contactus-form-control" name="category_id" required>
                                <option selected value="">Select Gear Category..</option>
                            @foreach($gearcat as $gc)    
                                <option value="{{ $gc->id }}">{{ $gc->name }}</option>
                            @endforeach    
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price *</label>
                            <input type="number" class="form-control contactus-form-control" placeholder="Price *" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Select Seller</label>
                            <select class="form-control contactus-form-control" name="seller_id" required>
                                <option selected value="">Select Seller...</option>
                            @foreach($seller as $s)    
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach    
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description *</label>
                            <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="description" id="description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control contactus-form-control" name="image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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