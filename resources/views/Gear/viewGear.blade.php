@extends('include.header')
@section('title','Gear')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Gears</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="directs-links">
                        <a href="{{url('addGear')}}" class="btn btn-primary pull-right">Add New Gear</a>
                        </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                
                  <div class="x_title">
                    <h2>All Gears</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered">
                  <thead>
                  <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Seller</th>
                  <th>Description</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($query as $g)
                  <tr>
                  
                  <td>{{$g->gearname}}</td>
                  <td>{{$g->price}}</td>
                  <td>{{$g->catname}}</td>
                  <td>{{$g->sellername}}</td>
                  <td><?php echo $g->description ?></td>
                  <td><a href="{{url('updateGear',$g->gid)}}" ><i class="fa fa-edit"></i></a></td>
                  <td><a href="{{url('deleteGear',$g->gid)}}" ><i class="fa fa-trash"></i></a></td>

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


