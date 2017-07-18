<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin :: zWebbed</title>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />


<!-- Styles -->
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="css/nv.d3.css" type="text/css" /><!-- VISITOR CHART -->
<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker-bs3.css" /><!-- Date Range Picker -->
<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->    
<link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->  


 
<!-- Script -->
<script src="js/jquery-1.10.2.js"></script><!-- Jquery -->
<script type="text/javascript" src="js/d3.v2.js"></script><!-- VISITOR CHART -->
<script type="text/javascript" src="js/nv.d3.js"></script><!-- VISITOR CHART -->
<script type="text/javascript" src="js/live-updating-chart.js"></script><!-- VISITOR CHART -->
<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/script.js"></script><!-- Script -->
<script src="js/jquery.easypiechart.min.js"></script> <!-- Easy Pie Chart -->
<script src="js/easy-pie-chart.js"></script> <!-- Easy Pie Chart -->
<script src="js/skycons.js"></script> <!-- Skycons -->
<script src="js/enscroll-0.5.2.min.js"></script> <!-- Custom Scroll bar -->
<script src="js/moment.js"></script> <!-- Date Range Picker -->
<script src="js/daterangepicker.js"></script><!-- Date Range Picker -->
<script src="js/ticker.js"></script><!-- Ticker -->
<script src="js/html5lightbox.js"></script><!-- Ticker -->

</head>
<body>
        
    <header>
        <div class="logo">
            <img src="/start/images/logo.png" style="height: 43px" alt="" />
        </div>
        
        <div class="right-bar-sec">
            <a href="#" title="" class="right-bar-btn"><i class="fa fa-bars rotator animation"></i></a>
            <a href="#" title="" class="right-bar-btn-mobile"><i class="fa fa-bars rotator animation"></i></a>
            <div id="scrollbox4" class="right-bar">
                    
                <div class="my-account">
                    
                    
                    <div class="account2">
                        
                    <a href="/logout" title=""><i class="fa fa-user"></i>Logout</a>  
                    </div>
                </div><!-- Add Account -->
                
                
            </div><!-- Right Bar -->
        </div><!-- Right Bar Sec -->
    </header><!-- Header -->

    <div class="menu">
        <ul>
            
            <li><a href="/admin" title=""><i class="fa fa-desktop"></i>Home</a></li>     
            <li><a href="/admin/edit" title=""><i class="fa fa-paperclip"></i>Templates</a></li>
        </ul>
    </div><!-- Right Menu -->

    @yield('content')
    <!-- Wrapper -->
    
<!-- RAIn ANIMATED ICON-->
<script>
  var icons = new Skycons();
  icons.set("rain", Skycons.RAIN);
  icons.play();
</script>


</body>
