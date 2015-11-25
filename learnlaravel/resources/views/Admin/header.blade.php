<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Admin Dashboard Template</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<!-- <link href="../resources/views/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
	<link href="{{ asset('/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/style-metro.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/style.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{ asset('/admin/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="{{ asset('/admin/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('/admin/css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/admin/css/jqvmap.css') }}" rel="stylesheet" type="text/css" media="screen"/>

	<link href="{{ asset('/admin/css/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="{{ asset('/admin/image/favicon.ico') }}" />
	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ asset('/admin/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ asset('/admin/js/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>      

	<script src="{{ asset('/admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="../resources/views/Admin/js/excanvas.min.js"></script>

	<script src="../resources/views/Admin/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="{{ asset('/admin/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.blockui.min.js') }}" type="text/javascript"></script>  

	<script src="{{ asset('/admin/js/jquery.cookie.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.uniform.min.js') }}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="{{ asset('/admin/js/jquery.vmap.js') }}" type="text/javascript"></script>   

	<script src="{{ asset('/admin/js/jquery.vmap.russia.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.vmap.world.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.vmap.europe.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.vmap.germany.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.vmap.usa.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>  

	<script src="{{ asset('/admin/js/jquery.flot.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.flot.resize.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.pulsate.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/date.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/daterangepicker.js') }}" type="text/javascript"></script>     

	<script src="{{ asset('/admin/js/jquery.gritter.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/fullcalendar.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.easy-pie-chart.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/jquery.sparkline.min.js') }}" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="{{ asset('/admin/js/app.js') }}" type="text/javascript"></script>

	<script src="{{ asset('/admin/js/index.js') }}" type="text/javascript"></script>

	<!-- END PAGE LEVEL SCRIPTS -->

	<script>

		jQuery(document).ready(function() {

			App.init(); // initlayout and core plugins

			Index.init();

			Index.initJQVMAP(); // init index page's custom scripts

			Index.initCalendar(); // init index page's custom scripts

			Index.initCharts(); // init index page's custom scripts

			Index.initChat();

			Index.initMiniCharts();

			Index.initDashboardDaterange();

			Index.initIntro();

		});

	</script>

	<!-- END JAVASCRIPTS -->

	<script type="text/javascript">  
	var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  
	(function() {    
		var ga = document.createElement('script'); 
		ga.type = 'text/javascript'; ga.async = true;    
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s)
	})();</script>
</head>

<!-- END HEAD -->