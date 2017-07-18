@extends('index')
@section('content')
  <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-magic"></i> User Details
                        <i class="icon-road"></i><a href="/{{$temname->template_name}}"> Preview Template</a></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form wzd-default" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-accept"></i> Your Info</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">First Name</label>
                                    <div class="mws-form-item">
                                        <input type="text" name="first_name" value="{{isset($tdata)?($tdata->first_name):''}}" class="required large">
                                    </div>
                                </div>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Middle Name <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="middle_name" value="{{isset($tdata)?($tdata->middle_name):''}}" class="required large">
                                    </div>
                                </div>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Last Name <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="last_name" value="{{isset($tdata)?($tdata->last_name):''}}" class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                	<label class="mws-form-label">Your Image</label>
                                	<div class="mws-form-item">
                                    	<input type="file" name="image" value="{{isset($tdata)?($tdata->image):''}}" class="required">
                                        <label for="picture" class="error" generated="true" style="display:none"> </label>
                                    @if(isset($tdata))
                                    <img src="/aa/{{$tdata->image}}" width="150px" height="150px">
                                    @endif
                                    </div>
                                </div>
  
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Short Info<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" value="{{isset($tdata)?($tdata->short_info):''}}" name="short_info"class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                    				<label class="mws-form-label">Description</label>
                    				<div class="mws-form-item">
                    					<textarea rows="" cols="" name="long_info" class="large">{{isset($tdata)?($tdata->long_info):''}}</textarea>
                    				</div>
                    			</div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-delivery"></i>Skills</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Your Skills 1)<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" value="{{isset($tdata)?($tdata->skills_list1):''}}" name="skill_list1"class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">2)<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" value="{{isset($tdata)?($tdata->skills_list2):''}}" name="skill_list2"class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">3)<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" value="{{isset($tdata)?($tdata->skills_list3):''}}" name="skill_list3"class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">4)<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" value="{{isset($tdata)?($tdata->skills_list4):''}}" name="skill_list4"class="required large">
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-user"></i> Services</legend>
                              
                    			<div class="mws-form-row">
	                                <div class="mws-form-cols">
	                                    <div class="mws-form-col-2-8">
	                                        <label class="mws-form-label">1)  Service</label>
	                                        <div class="mws-form-item">
	                                            <input type="text" value="{{isset($tdata)?($tdata->service_name1):''}}" name="service_name1">
	                                        </div>
	                                    </div>
	                                    <div class="mws-form-col-6-8">
	                                        <label class="mws-form-label">Description</label>
                    				<div class="mws-form-item">
                    					<textarea rows="3" cols="" name="service_info1" class="large">{{isset($tdata)?($tdata->service_info1):''}}</textarea>
                    				</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="mws-form-row">
	                            <div class="mws-form-cols">
                                    <div class="mws-form-col-2-8">
                                        <label class="mws-form-label">2)  Service</label>
                                        <div class="mws-form-item">
                                            <input type="text" value="{{isset($tdata)?($tdata->service_name2):''}}" name="service_name2">
                                        </div>
                                    </div>
                                    <div class="mws-form-col-6-8">
                                        <label class="mws-form-label">Description</label>
                    				<div class="mws-form-item">
                    					<textarea rows="3" cols="" name="service_info2" class="large">{{isset($tdata)?($tdata->service_info2):''}}</textarea>
                    				</div>
                                    </div>
                                </div>
                                </div>
                                <div class="mws-form-row">
                                <div class="mws-form-cols">
                                    <div class="mws-form-col-2-8">
                                        <label class="mws-form-label">3)  Service</label>
                                        <div class="mws-form-item">
                                            <input type="text" value="{{isset($tdata)?($tdata->service_name3):''}}" name="service_name3">
                                        </div>
                                    </div>
                                    <div class="mws-form-col-6-8">
                                        <label class="mws-form-label">Description</label>
                    				<div class="mws-form-item">
                    					<textarea rows="3" cols="" name="service_info3" class="large">{{isset($tdata)?($tdata->service_info3):''}}</textarea>
                    				</div>
                                    </div>
                                </div>
                                </div>

                            </fieldset>
                            <fieldset class="wizard-step mws-form-inline">
                            <legend class="wizard-label"><i class="icon-cog"></i> Contact Info</legend>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Contact no<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->phone_no):''}}" name="phone_no" class="required large">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Email<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->email):''}}" name="email"class="required large">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Address<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->address):''}}" name="address"class="required large">
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="wizard-step mws-form-inline">
                            <legend class="wizard-label"><i class="icol-direction"></i> Hyper Links</legend>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Facebook Link<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->facebook_link):''}}" name="facebook_link" class="required large">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Twitter Link<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->twitter_link):''}}" name="twitter_link"class="required large">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Google Link<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" value="{{isset($tdata)?($tdata->google_link):''}}" name="google_link"class="required large">
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="wizard-step mws-form-inline">
                            <legend class="wizard-label"><i class="icol-picture"></i> Portfolio Images</legend>
                            <div class="mws-form-row">
                                <label class="mws-form-label">Portfolio Images 1)</label>
                                <div class="mws-form-item">
                                    <input type="file" name="portfolio_images1" value="{{isset($tdata)?($tdata->portfolio_images1):''}}" class="required">
                                    <label for="picture" class="error" generated="true" style="display:none"> </label>
                                @if(isset($tdata))
                                <img src="/aa/{{$tdata->portfolio_images1}}" width="150px" height="150px">
                                @endif
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label"> 2)</label>
                                <div class="mws-form-item">
                                    <input type="file" name="portfolio_images2" value="{{isset($tdata)?($tdata->portfolio_images2):''}}" class="required">
                                    <label for="picture" class="error" generated="true" style="display:none"> </label>
                                @if(isset($tdata))
                                <img src="/aa/{{$tdata->portfolio_images2}}" width="150px" height="150px">
                                @endif
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label"> 3)</label>
                                <div class="mws-form-item">
                                    <input type="file" name="portfolio_images3" value="{{isset($tdata)?($tdata->portfolio_images3):''}}" class="required">
                                    <label for="picture" class="error" generated="true" style="display:none"> </label>
                                @if(isset($tdata))
                                <img src="/aa/{{$tdata->portfolio_images3}}" width="150px" height="150px">
                                @endif
                                </div>
                            </div>

                            </fieldset>
                        </form>
                    </div>
                </div>

               

                

                <!-- Panels End -->
            </div>
    
</div>
<!-- JavaScript Plugins -->
    <script src="/assets/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/assets/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/assets/js/libs/jquery.placeholder.min.js"></script>
    <script src="/assets/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/assets/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/assets/jui/jquery-ui.custom.min.js"></script>
    <script src="/assets/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/assets/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/assets/plugins/validate/jquery.validate-min.js"></script>

    <!-- Wizard Plugin -->
    <script src="/assets/custom-plugins/wizard/wizard.min.js"></script>
    <script src="/assets/custom-plugins/wizard/jquery.form.min.js"></script>

    <!-- Core Script -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/assets/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/assets/js/demo/demo.wizard.js"></script>

@endsection