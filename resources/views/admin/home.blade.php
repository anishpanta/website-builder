@extends('admin.template')
@section('content')
<div class="wrapper">
        <div class="container">
            <div class="col-md-6">
                <div class="heading-sec">
                    <h1>Dashboard <i>Welcome to Flat Lab</i></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="fa fa-calendar-o icon-calendar icon-large"></i>
                  <span></span> <b class="caret"></b>
               </div>
            </div>
            
            
            
            <div class="col-md-3">
                <div class="stat-boxes widget-body">
                    <span class="fa fa-plus green"></span>
                    <h3 class="ticker--one">{{$peoples}}</h3>
                    <i>Users count</i>
                    
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="weather-box widget-body  yellow">
                    <div class="weather-day">
                        <span>21</span>
                        <p>TUESDAY</p>
                    </div>
                    
                    <div class="weather-icon">
                         <canvas id="rain" width="64" height="64"></canvas>
                         <p>KATHMANDU</p>
                    </div>
                </div>
            </div>  
            <div class="col-md-3">
                <div class="stat-boxes widget-body">
                    <span class="fa fa-book green"></span>
                    <h3 class="ticker--two">{{$templates}}</h3>
                    <i>Templates count</i>
                    
                </div>
            </div>
            
            
            
            
            
            <!-- Weather Widget -->
            
        </div><!-- Container -->
    </div>
@endsection