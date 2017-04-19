@extends('include.header')
@section('title','dashboard')
@section('content')

<div class="right_col" role="main">
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-building-o"></i> Total Branches</span>
              <div class="count">100</div>
              <span class="count_bottom"><a href="branch/view">View All Branches</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
              <div class="count">190</div>
              <span class="count_bottom"><a href="student/show">View All Students</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Staff</span>
              <div class="count"></div>
              <span class="count_bottom"><a href="staff/show">View All Staff</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Teachers</span>
              <div class="count"></div>
              <span class="count_bottom"><a href="teacher/show">View All Teachers</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-building-o"></i> Total Classes</span>
              <div class="count"></div>
              <span class="count_bottom"><a href="classes/index">View All Classes</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-building-o"></i> Total Sections</span>
              <div class="count">120</div>
              <span class="count_bottom"><a href="section/index">View All Sections</a></span>
            </div>
          </div>
        </div>
        
        </div>






                 
@endsection