<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>$templateTitle</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0">
<!-- STYLES =======================================-->
  
  <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/meted-base.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/module-custom.css">
  <link rel="stylesheet" type="text/css" media="print" href="css/module-print.css">
   
<!-- JS LIBRARIES =================================-->
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-plugins.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="modernizr/modernizr.min.js"></script>

<!-- MEDIA PLAYER =================================-->
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/meted-player/mediaelementplayer.min.css">
	<script type="text/javascript" src="jquery/meted-player/mediaelement-and-player.min.js"></script>

<!-- THIRD-PARTY HANDLERS =========================-->
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/fancybox/fancybox.min.css">
  <script type="text/javascript" src="jquery/apps/fancybox/fancybox.min.js"></script>
  
  <script type="text/javascript" src="jquery/apps/elevatezoom/elevatezoom.min.js"></script>

<!-- EXTENSION SCRIPTS ============================-->
  <script type="text/javascript" src="jquery/apps/drag/drag.js"></script>
  
  <script type="text/javascript" src="jquery/apps/draw/draw.js"></script>
  
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/image-sweep/image-sweep.css">
  <script type="text/javascript" src="jquery/apps/image-sweep/image-sweep.js"></script>
<!-- AM CHARTS AND EXTENSIONS =====================-->
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/amcharts/plugins/export/export.css">
  <script src="jquery/apps/amcharts/amcharts.js" type="text/javascript"></script>
  <script src="jquery/apps/amcharts/serial.js" type="text/javascript"></script>
  <script src="jquery/apps/amcharts/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
  <script src="jquery/apps/amcharts/plugins/export/export.min.js" type="text/javascript"></script>
  
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/amcharts/ext/nouislider.css">
  <script type="text/javascript" src="jquery/apps/amcharts/ext/nouislider.js"></script>
  <script type="text/javascript" src="jquery/apps/amcharts/ext/wNumb.js"></script>
  
  
  <link rel="stylesheet" type="text/css" media="screen" href="css/highlight/paraiso.dark.css">
  <script type="text/javascript" src="css/highlight/highlight.pack.js"></script>

<!-- PRESET DEFAULTS ==============================-->
  <script type="text/javascript" src="jquery/defaults.js"></script>

<!-- PRESET OVERRIDES =============================-->
  <script type="text/javascript">
	var printVersion = false; // Specify Print View.  [true] for PRINT, or [false] for DYNAMIC content.
  </script>

<!-- IE SUPPORT ===================================-->
  <!--[if lte IE 9]>
    <script type="text/javascript" src="jquery/apps/draw/excanvas.js"></script>
    <script type="text/javascript" src="ie-support/respond.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="ie-support/ie-support.css" />
  <![endif]-->
  
</head>
<body>

<!--NAVBAR-->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    	</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="navmenu.php">Lesson</a></li>
            <li><a href="download.php">Download</a></li>
            <li><a href="media_gallery.php">Gallery</a></li>
            <li><a href="#userQuiz" data-toggle="modal">Quiz</a></li>
            <li><a href="#userSurvey" data-toggle="modal">Survey</a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-horizontal"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="references.htm">References</a></li>
         		<li><a href="contributors.htm">Contributors</a></li>
			  </ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>


<div id="master-container" class="container">


<div class="row">
<div id="lesson-sidebar" class="col-sm-3">
	<h2 id="lesson-sidebar-title">$templateTitle</h2>
	
	<!--  Table of Contents -->
	<div id="menu" class="sidebar-toc">
		<div class="btn-group">
		<a href="#" data-toggle="dropdown">
			<h4 id="lesson-sidebar-unit-title">$titleTag <span class="caret"></span></h4>
		</a>
     	$tabMenu
		</div>
		<hr>
		$templateMenu
	</div>
</div>






<div id="lesson-content" class="col-sm-9" style="background-color: #fff; border-left: 1px solid #555;">
	$templateContent
</div>

</div>



<!--FOOTER-->
<div  id="lesson-footer" class="row">
<div class="col-md-8">
<p id="lesson-copyright">&copy; 2017, <a href="http://www.ucar.edu/">The University Corporation for Atmospheric Research</a> - All Rights Reserved.</p>
</div>
<div class="col-md-4">
	<ul id="parent-links">
	<li><a href="http://www.meted.ucar.edu/legal.htm">Legal Notices</a></li>
	<li><a href="http://comet.ucar.edu">COMET</a></li>
	<li><a href="http://www.meted.ucar.edu/">MetEd</a></li>
	</ul>
</div>
</div>


</div><!-- end master container -->




<!-- BACK TO TOP BUTTON ==========================-->
<p class="back-top"><a href="#top"><span class="glyphicon glyphicon-upload"></span></a></p>


<!-- Quiz and Survey Prompts -->
<div id="quiz-prompt"></div>

</body>
</html>
