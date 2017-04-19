@extends('include.header')
@section('title','Gear')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Tour</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">
            <form action="{{url('addtour')}}" id="save_operator" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Title *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Title *" name="title">
                  </div>

                  <div class="form-group">
                    <label>Cost/Person *</label>
                    <input type="number" class="form-control contactus-form-control" placeholder="Cost/Person *" name="cost_per_person">
                  </div>
                  <div class="form-group">
                    <label>Source *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Source *" name="source" id="source_cities">
                  </div>
                  <div class="form-group" id="demo">
                    <label>Date To Go *</label>
                    <input type="Date" value="" class="form-control contactus-form-control" placeholder="Date To Go *" name="date_to_go" id="date_to_go" style="overflow: hidden;">
                  </div>

                  <div class="form-group">
                    <label>Services Included *</label>
                    <select class="form-control contactus-form-control chosen-select" id="services_included" data-placeholder="Services Included *" name="services[]" multiple="true" tabindex="4">
                      @foreach($services as $s)                    
                      <option value="{{$s->name}}">{{$s->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control contactus-form-control" name="image[]" multiple="true">
                  </div>

                  <div class="form-group">
                    <label>Day 1</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day1" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 3</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day3" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 5</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day5" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 7</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day7" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 9</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day9" id="description"></textarea>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Operator</label>
                    <select class="form-control contactus-form-control chosen-select" name="operators" data-placeholder="" name="operator">
                    <option selected value="">Select Operator..</option>
                      @foreach($operators as $o)
                      <option value="{{$o->name}}">{{$o->name}}</option>
                      @endforeach
                    </select>
                    
                  </div>

                  <div class="form-group">
                    <label>Select Tour Type</label>
                    <select class="form-control contactus-form-control" name="type">
                      <option selected value="">Select Tour Type..</option>
                      <option value="biker">Biker</option>
                      <option value="TO">TO</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Destination *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Destination *" name="destination" id="destination_cities">
                  </div>

                  <div class="form-group">
                    <label>Date To Return *</label>
                    <input type="Date" class="form-control contactus-form-control" placeholder="Date To Return *" name="date_to_return" id="date_to_return">
                  </div>

                  <div class="form-group">
                    <label>Select Tour Gears</label>
                    <select class="form-control contactus-form-control chosen-select" id="services_included" data-placeholder="Services Included *" name="gears[]" multiple="multiple" tabindex="4">
                      @foreach($gears as $g)
                      <option value="{{$g->name}}">{{$g->name}}</option>
                      @endforeach                    
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Capacity</label>
                    <input type="number" name="capacity" class="form-control contactus-form-control" placeholder="Capacity">
                  </div>

                  <div class="form-group">
                    <label>Day 2</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day2" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 4</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day4" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 6</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day6" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 8</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day8" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Day 10</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day10" id="description"></textarea>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description *</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="description" id="description"></textarea>
                  </div>
                </div>
              </div>
              
              <input type="text" name="origin" id="from">
              <input type="text" name="des" id="to">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type='submit' class="btn btn-primary btn-edit-form" value='Save'/>
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


