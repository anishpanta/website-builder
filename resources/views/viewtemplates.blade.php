@extends('index')
@section('content')
 <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container"> 
                
                <div class="mws-panel grid_4">
                	<div class="mws-accordion">
                	@foreach($tempt_name as $tem)
                        <h3><a href="#">{{$tem->template_name}}</a></h3>
                        <div>
                            <p>
                            @if(isset($tem))
                            <img src="/aa/{{$tem->template_image}}" width="150px" height="150px">
                            @endif
                            </p>
                            <a href="/{{$tem->template_name}}" class="mws-ui-button">Preview</a>
                            <a href="/edittemplate/{{$tem->id}}" class="mws-ui-button">Use This Template</a>
                        </div>

                    @endforeach
                    </div>
                </div>
            </div>
            <!-- Inner Container End -->
            
        </div>
		    <script src="/assets/js/libs/jquery-1.8.3.min.js"></script>
		    <script src="/assets/js/libs/jquery.mousewheel.min.js"></script>
		    <script src="/assets/js/libs/jquery.placeholder.min.js"></script>
		    <script src="/assets/custom-plugins/fileinput.js"></script>

		    <!-- jQuery-UI Dependent Scripts -->
		    <script src="/assets/jui/js/jquery-ui-1.9.2.min.js"></script>
		    <script src="/assets/jui/jquery-ui.custom.min.js"></script>
		    <script src="/assets/jui/js/jquery.ui.touch-punch.js"></script>
		    <script src="/assets/jui/js/timepicker/jquery-ui-timepicker.min.js"></script>

		    <!-- Plugin Scripts -->
		    <script src="/assets/plugins/imgareaselect/jquery.imgareaselect.min.js"></script>
		    <script src="/assets/plugins/jgrowl/jquery.jgrowl-min.js"></script>
		    <script src="/assets/plugins/validate/jquery.validate-min.js"></script>
		    <script src="/assets/plugins/colorpicker/colorpicker-min.js"></script>

		    <!-- Core Script -->
		    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
		    <script src="/assets/js/core/mws.js"></script>

		    <!-- Themer Script (Remove if not needed) -->
		    <script src="/assets/js/core/themer.js"></script>

		    <!-- Demo Scripts (remove if not needed) -->
		    <script src="/assets/js/demo/demo.widget.js"></script>

@endsection