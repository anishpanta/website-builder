@extends('admin.template')
@section('content')
<script src="/js/jquery-1.10.2.js"></script><!-- Jquery -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="/js/script.js"></script><!-- Script -->
<script src="/js/enscroll-0.5.2.min.js"></script> <!-- Custom Scroll bar -->
<script src="/js/moment.js"></script> <!-- Date Range Picker -->
<script src="/js/daterangepicker.js"></script><!-- Date Range Picker -->

<script src="/js/streaming-mustache.js" type="text/javascript"></script><!-- Streaming Table -->
<script src="/js/stream_table.js" type="text/javascript"></script><!-- Streaming Table -->
<script src="/js/movie_data.js" type="text/javascript"></script><!-- Streaming Table -->
<script src="/js/stream.js" type="text/javascript"></script><!-- Streaming Table -->
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="/font-awesome-4.0.3/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->

<link rel="stylesheet" type="text/css" media="all" href="/css/daterangepicker-bs3.css" /><!-- Date Range Picker -->
<link rel="stylesheet" href="/css/style.css" type="text/css" /><!-- Style -->	
<link rel="stylesheet" href="/css/responsive.css" type="text/css" /><!-- Responsive -->
<div class="wrapper">
<div class="container">
<div class="col-md-6">
    <div class="heading-sec">
        <h1>Templates <i>Add/Edit/Delete</i></h1>
    </div></br></br>
    @if(Session::has('success'))
          <div class="alert alert-success">
                  {!! Session::get('success') !!}
          </div>
        @endif
      @if(Session::has('error'))
          <div class="alert alert-error">
                  {!! Session::get('error') !!}
          </div>
        @endif
</div>
<div class="col-md-8">
<div class="col-md-2 btn-sec">
	<div class="icon-btn"><a title="" href="/admin/addtemp"><div><i class="fa fa-plus"></i>Add Template</div></a></div>
</div>
	<table id="country-list" class="sortable-table">
	  <thead>
		<tr class="country-table-head">
		  <th>Templates</th>
		  <th>Action</th>
		</tr>
	  </thead>
	  <tbody>
	  @foreach($template as $temp)
		<tr>
		<td><a href="#">{{$temp->template_name}}</a></td>
		<td><a class="btns  green  m-m-sml-btn flat-btn" style="margin-left: 200px" href="/admin/edittemp/{{$temp->id}}">Edit</a><a class="btns  pink  m-m-sml-btn flat-btn" style="margin-left: 60px" href="/admin/delete/{{$temp->id}}">Delete</a></td>
		</tr>
	  @endforeach
	  </tbody>
	</table>			
</div>
</div>
</div>
@endsection