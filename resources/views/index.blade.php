<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/assets/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/assets/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/assets/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/assets/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/assets/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/assets/css/themer.css" media="screen">

<title>zWebbed</title>

</head>

<body>

    <!-- Themer (Remove if not needed) -->  
    <div id="mws-themer">
        <div id="mws-themer-content">
            <div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
        </div>
        <div id="mws-themer-css-dialog">
            <form class="mws-form">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/start/images/logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/assets/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello!
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="/changepassword">Change Password</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active"><a href="/"><i class="icon-home"></i> Dashboard</a></li>
                    <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                    <li><a href="/alltemplates"><i class="icon-table"></i> All Templates</a></li>
                    <li><a href="/templates"><i class="icon-pictures"></i> Used Templates</a></li>
                    
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        @yield('content')
        <div id="mws-footer">
            Copyright Your Website 2012. All Rights Reserved.
        </div>
        <!-- Main Container End -->
        
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
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="/assets/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/assets/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/assets/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/assets/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/assets/plugins/validate/jquery.validate-min.js"></script>
    <script src="/assets/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/assets/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/assets/js/demo/demo.dashboard.js"></script>

</body>
</html>