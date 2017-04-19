@extends('include.header')
@section('title','Gear')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tours</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="directs-links">
      <a href="{{url('tourForm')}}" class="btn btn-primary pull-right">Add New Tours</a>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">


          <h2></h2>            
          
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Tour Operator</th>
                  <th>Description</th>
                  <th>Date To GO</th>
                  <th>Date To Return</th>
                  <th>Cost/Person</th>
                  <th>Source</th>
                  <th>Publish</th>
                  <th>Edit</th>
                  <th>Block</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
              @foreach($query as $q)
                <tr>
                <td>{{$q->title}}</td>
                <td>{{$q->operator}}</td>
                <td><?php echo $q->description ?></td>
                <td>{{$q->date_to_go}}</td>
                <td>{{$q->date_to_return}}</td>
                <td>{{$q->cost_per_person}}</td>
                <td>{{$q->source}}</td>
                <td><a href="">Publish</a></td>
                <td><a href="{{url('editTour',$q->id)}}">Edit</a></td>
                <td><a href="{{url('blockTour',$q->id)}}">Block</a></td>
                <td><a href="{{url('delTour',$q->id)}}">Delete</a></td>
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