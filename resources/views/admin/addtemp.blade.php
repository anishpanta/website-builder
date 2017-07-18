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
        <h1>Templates <i>Add/Edit</i></h1>
    </div>
</div>
<div class="col-md-12">
	<div class="widget-body custom-form">
		<form class="sec" role="form" method="POST" enctype="multipart/form-data" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		  <div class="form-group">
			<label for="exampleInputEmail1">Template Name</label>
			<input type="text" class="form-control" name="template_name" id="exampleInputEmail1" placeholder="" />
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" id="exampleInputFile" value="" name="template_image" />
			<p class="help-block">Select template image.</p>
		  </div>
		  
		  <button type="submit" class="btn green pull-right">Add</button>
		</form>
	</div>
</div>
</div>
</div>
@endsection