@extends('index')
@section('content')
<div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
            <div class="container">
            
                <!-- Statistics Button Container -->
                <div class="mws-stat-container clearfix">
                    
                    <!-- Statistic Item -->
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Total Users</span>
                            <span class="mws-stat-value">{{$people}}</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Total Templates</span>
                            <span class="mws-stat-value">{{$total}}</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Used Templates</span>
                            <span class="mws-stat-value">{{$used}}</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Bugs Fixed</span>
                            <span class="mws-stat-value up">22%</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-car"></span>

                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title"> New users this Week</span>
                            <span class="mws-stat-value">0</span>
                        </span>
                    </a>
                </div>
                
                <!-- Panels Start -->
                
                <div class="mws-panel grid_5">
                    <div class="mws-panel-header">
                        <span><i class="icon-graph"></i> Graph Review</span>
                    </div>
                    <div class="mws-panel-body">
                        <div id="mws-dashboard-chart" style="height: 222px;"></div>
                    </div>
                </div>
                
                <div class="mws-panel grid_3">
                    <div class="mws-panel-header">
                        <span><i class="icon-book"></i> Summary</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <ul class="mws-summary clearfix">
                            <li>
                                <span class="key"><i class="icon-support"></i> Total Users</span>
                                <span class="val">
                                    <span class="text-nowrap">{{$people}}</span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-certificate"></i> Total templates</span>
                                <span class="val">
                                    <span class="text-nowrap">{{$total}} <i class="up icon-arrow-up"></i></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-shopping-cart"></i> Used templates</span>
                                <span class="val">
                                    <span class="text-nowrap">{{$used}}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>          
            
        </div>
@endsection