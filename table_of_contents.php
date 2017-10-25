<?php require_once('navmenu.inc.php');
$server = $_SERVER['SERVER_NAME'];
$path = "/latest_core/LC3/";

$tab = "1";
$type = "flash";

$navmenu = new Navmenu($server, $path, $tab, $type);
$tabObjects = $navmenu->getTabObjects();
?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>LATEST CORE 2.1 - Multi Print</title>
<meta name="author" content="A Stevermer">
<meta name="copyright" content="COMET">
<meta name="robots" content="all">
<meta name="keywords" content="">
<meta name="Description" content="">
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

  <!-- EXTENSION SCRIPTS ============================-->
  <script type="text/javascript" src="jquery/apps/drag/drag.js"></script>
  <script type="text/javascript" src="jquery/apps/draw/draw.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/image-sweep/image-sweep.css">
  <script type="text/javascript" src="jquery/apps/image-sweep/image-sweep.js"></script>

  <!-- PRESET DEFAULTS ==============================-->
  <script type="text/javascript" src="jquery/defaults.js"></script>

  <!-- PRESET OVERRIDES =============================-->
  <script type="text/javascript">
	var printVersion = true; // Specify Print View.  [true] for PRINT, or [false] for DYNAMIC content.
  </script>

  <!-- IE SUPPORT ===================================-->
  <!--[if lte IE 9]>
    <script type="text/javascript" src="jquery/apps/draw/excanvas.js"></script>
    <script type="text/javascript" src="ie-support/respond.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="ie-support/ie-support.css" />
  <![endif]-->
  </head>

<body id="toc-page">

<!-- MAIN WRAPPER =================================-->
<div id="module-wrapper" class="container"> 
    
    <!-- PAGE HEADER ==================================-->
    <div class="row">
    <section id="module-topbanner"> <a id="module-title" class="module-title-text" href="index.htm"></a>
        <h3 id="module-credit" class="hidden-sm hidden-xs">Produced by The COMET&reg; Program</h3>
      </section>
    </div>
    <div class="row"> 
    
    <!-- SIDEBAR ======================================-->
    <div id="module-sidebar" class="col-md-3"> 
        
        <!-- Collapsible Sidebar Menu -->
        <div id="toc-panel" class="row col-xs-12"> 
        <!-- Table of Contents -->
        <div id="collapsible-toc">
            <div class="panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#collapsible-toc" href="#collapse-toc"> Navigation Menu <span id="nav-menu-icon" class="glyphicon glyphicon-th-list"></span></a> </h4>
              </div>
            <div id="collapse-toc" class="panel-collapse collapse in">
                <div class="panel-body">
                <div class="lc-docs-sidebar">
                    <div class="module-nav"></div>
                    <!--  Table of Contents -->
                    <div id="tableofcontents" class="sidebar-toc"></div>
                    <div class="module-nav">
                    <ul class="nav">
                        <li><a href="index.htm">Home</a></li>
                        <li class="active"><a href="table_of_contents.php">Table of Contents</a></li>
                        <li><a href="print.php">Printable Lesson</a></li>
                        <li><a href="download.php">Download</a></li>
                        <li><a href="#userQuiz" data-toggle="modal">Quiz</a></li>
                        <li><a href="#userSurvey" data-toggle="modal">User Survey</a></li>
                        <li><a href="media_gallery.php">Media Gallery</a></li>
                      </ul>
                  </div>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </div>
        <!-- Collapsible Sidebar Menu (end) --> 
        
      </div>
    
<!-- PAGE CONTENT =================================-->    
<div id="module-content" class="col-md-9">


<!-- UNIT SELECTOR =================================-->
<div class="row unit-header" style="margin-bottom:20px;">
    <div class="col-xs-8"></div>
</div>
<!-- UNIT SELECTOR END =============================-->

<?php 
$unitNumber = 0;

foreach($tabObjects as $tabObject)
{
$unitNumber++;
?>
<!-- UNIT PANEL -->
<div class="col-xs-12 panel panel-default unit-panel">
	<div class="col-xs-10">
    	<h2>UNIT <?php echo $unitNumber ?></h2>
        <h3><?php echo $tabObject->title ?></h3>
		<p><?php echo $tabObject->description ?></p>
    </div>
	<div class="col-xs-2">
    <p class="unit-button"><a href="navmenu.php?tab=<?php echo $unitNumber ?>" class="btn btn-primary btn-block" role="button">Begin</a></p>
    </div>
</div>
<?php } ?>

</div>
<!-- PAGE CONTENT END ===========================-->
    
  </div>
    
    <!-- FOOTER ======================================-->
    <div id="module-footer" class="row">
    <div class="col-md-10 col-sm-12">
        <p class="footer-text">&copy; Copyright 2012-2016, <a href="http://www.ucar.edu/">The University Corporation for Atmospheric Research</a>.<br>
        All Rights Reserved. <a href="http://www.meted.ucar.edu/legal.htm">Legal Notices</a>.</p>
      </div>
    <div class="col-md-2 hidden-sm hidden-xs">
        <ul class="footer-links list-unstyled">
        <li><a href="https://www.meted.ucar.edu/"><span class="glyphicon glyphicon-link"></span> MetEd Home</a></li>
        <li><a href="http://comet.ucar.edu"><span class="glyphicon glyphicon-link"></span> COMET Home</a></li>
      </ul>
      </div>
  </div>
  </div>

<!-- BACK TO TOP BUTTON ==========================-->
<p class="back-top"><a href="#top"><span class="glyphicon glyphicon-upload"></span></a></p>

<!-- SIDEBAR MODAL PROMPTS ========================-->
<!-- Quiz and Survey Prompts -->
<div id="quiz-prompt" data-item-id="0000"></div>

</body>
</html>