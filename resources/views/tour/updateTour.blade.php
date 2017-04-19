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
    <?php
    //seperate multiple values of column service and gear in tours table
    $s=$query[0]->service;
    $ns=explode(",",$s);
    $g=$query[0]->gear;
    $ng=explode(",",$g);
    $img=$query[0]->image;
    $nimg=explode(",",$img)
    ?>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="{{url('updateTour')}}" id="save_operator" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value='<?php echo $query[0]->id; ?>'>
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Title *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Title *" name="title" value="<?php echo $query[0]->title; ?>" required >
                  </div>

                  <div class="form-group">
                    <label>Cost/Person *</label>
                    <input type="number" class="form-control contactus-form-control" placeholder="Cost/Person *" name="cost_per_person" value="<?php echo $query[0]->cost_per_person; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Source *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Source *" name="source" id="source_cities" value="<?php echo $query[0]->source; ?>" required>
                  </div>
                  <div class="form-group" id="demo">
                    <label>Date To Go *</label>
                    <input type="Date" class="form-control contactus-form-control" placeholder="Date To Go *" name="date_to_go" id="date_to_go" style="overflow: hidden;" value="<?php echo $query[0]->date_to_go; ?>" required>
                  </div>

                  <div class="form-group">
                    <label>Services Included *</label>
                    <select class="form-control contactus-form-control chosen-select" id="services_included" data-placeholder="Services Included *" name="services[]" multiple="true" tabindex="4" required>
                      @foreach($services as $s)                    
                      <option value="{{$s->name}}" <?php
                      for($i=0;$i<count($ns);$i++){  
               if($s->name==$ns[$i]) {print "selected";}}?> >{{$s->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <?php for($i=0;$i<count($nimg);$i++){?>
                    <img src='{{url("images",$nimg[$i])}}'>
                  <?php } ?>
                  <div class="form-group">

                    <label>Upload Image</label>
                    <input type="file" class="form-control contactus-form-control" name="image[]" multiple="true">
                  </div>

                  <div class="form-group">
                    <label>Day 1</label>
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="day1" id="description" required></textarea>
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
                    <select class="form-control contactus-form-control chosen-select" name="operators" data-placeholder="" name="operator" required>
                      @foreach($operators as $o)
                      <option value="{{$o->name}}" <?php $id=$query[0]->operator; 
               if($o->name==$id) print "selected";?> >{{$o->name}}</option>
                      @endforeach
                    </select>
                    
                  </div>

                  <div class="form-group">
                    <label>Select Tour Type</label>
                    <select class="form-control contactus-form-control" name="type" required>
                      <option value="biker" <?php $id=$query[0]->type; $value="biker";
               if($value==$id) print "selected";?> >Biker</option>
                      <option value="TO" <?php $id=$query[0]->type; $value="TO";
               if($value==$id) print "selected";?> >TO</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Destination *</label>
                    <input type="text" class="form-control contactus-form-control" placeholder="Destination *" name="destination" id="destination_cities" value="<?php echo $query[0]->destination; ?>" required>
                  </div>

                  <div class="form-group">
                    <label>Date To Return *</label>
                    <input type="Date" class="form-control contactus-form-control" placeholder="Date To Return *" name="date_to_return" id="date_to_return" value="<?php echo $query[0]->date_to_return; ?>" required>
                  </div>

                  <div class="form-group">
                    <label>Select Tour Gears</label>
                    <select class="form-control contactus-form-control chosen-select" id="services_included" data-placeholder="Services Included *" name="gears[]" multiple="multiple" tabindex="4" required>
                      @foreach($gears as $g)
                      <option value="{{$g->name}}" <?php
                      for($i=0;$i<count($ng);$i++){  
               if($g->name==$ng[$i]) {print "selected";}}?> >{{$g->name}}</option>
                      @endforeach                    
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Capacity</label>
                    <input type="number" name="capacity" class="form-control contactus-form-control" placeholder="Capacity" value="<?php echo $query[0]->quantity; ?>" required>
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
                    <textarea rows="10" class="form-control contactus-form-control" placeholder="Description *" name="description" id="description" required >{{$query[0]->description}}</textarea>
                  </div>
                </div>
              </div>
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