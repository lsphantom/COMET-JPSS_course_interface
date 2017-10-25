<?php require_once('navmenu.inc.php');
$server = $_SERVER['SERVER_NAME'];
$path = "/latest_core/";

$tab = "1";
$type = "flash";

$navmenu = new Navmenu($server, $path, $tab, $type);
$tabObjects = $navmenu->getTabObjects();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="author" content="UCAR/COMET">
	<meta name="dcterms.rightsHolder" content="UCAR/COMET">
	<meta name="robots" content="all">
	<meta name="Description" content="">
    <meta name="keywords" content="">
<title>Latest Core</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0">
<!-- STYLES =======================================-->
  <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/meted-base.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/module-custom.css">
  <link rel="stylesheet" type="text/css" media="print" href="css/module-print.css">
   
<!-- JS LIBRARIES =================================-->
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- PRESET DEFAULTS ==============================-->
  <script type="text/javascript" src="jquery/defaults.js"></script>

<!-- PRESET OVERRIDES =============================-->
  <script type="text/javascript">
	var printVersion = false; // Specify Print View.  [true] for PRINT, or [false] for DYNAMIC content.
	var preAssessment = 0; // Specify preassessment ID, or 0 for no preassessment.
	
	var beginTarget;
	var path = "http://www.meted.ucar.edu/loginForm.php?urlPath=logonOption.php&quizID=" + preAssessment + "&fromModule=true";
	$(function() {
	if (preAssessment <= 0) {
		beginTarget = "navmenu.php";
		$('.begin-lesson-button').attr('href', beginTarget);
	} else {
		beginTarget = "#beginModule";
		$('#pre-assessment-path').attr('href', path);
		$('.begin-lesson-button').attr('data-toggle', 'modal');
		$('.begin-lesson-button').attr('href', beginTarget);
	}
	});
  </script>

<!-- IE SUPPORT ==================================-->
  <!--[if lte IE 9]>
    <script type="text/javascript" src="ie-support/html5shiv.js"></script>
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
            <li class="active"><a href="">Home</a></li>
            <li><a href="navmenu.php">Lesson</a></li>
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


<div id="master-container" class="container splash-background">

<!--TITLES-->
<div class="lesson-titles">
<h1 id="lesson-title">Latest Core</h1>
<h2 id="lesson-subtitle">Template Documentation</h2>
</div>
				

<!--DESCRIPTION AND MIDROW ITEMS-->
<div id="lesson-midrow-items" class="row">
<div class="col-md-6">
<p id="lesson-description">This is a very short description of what the lesson contains. Let's keep it 300 characters or less. In this documentation you'll learn how the Latest Core template works.</p>
</div>
<div class="col-md-6">
<div class="center"><a href="navmenu.php" class="btn btn-primary begin-lesson-button">Begin Lesson &rarr;</a></div>
</div>
</div>



<!--PRODUCER AND IMAGE CREDITS-->
<div id="lesson-splash-credits" class="row">
<div id="lesson-producer" class="col-sm-6">Produced by The COMET&reg; Program</div>
<div id="lesson-image-credit" class="col-sm-6">Image credit: **</div>
</div>



<!--TABLE OF CONTENTS-->
<div id="lesson-splash-toc" class="row">
	
<div class="col-sm-12">
<h4 class="center"><a href="#toc-units" data-toggle="collapse">Table of Contents <span class="caret"></span></a></h4>
<div id="toc-units" class="panel-collapse collapse">
<?php 
$unitNumber = 0;

foreach($tabObjects as $tabObject)
{
$unitNumber++;
?>
<!-- UNIT PANEL -->
<div class="panel panel-default center-block unit-panel">
   	<div class="panel-body">
    	<a href="navmenu.php?tab=<?php echo $unitNumber ?>"><h4>UNIT <?php echo $unitNumber ?> - <?php echo $tabObject->title ?></h4></a>
		<p><?php echo $tabObject->description ?></p>
	</div>
</div>
<?php } ?>
</div>


</div>
</div>


<!--FOOTER-->
<div  id="lesson-footer" class="row splash-footer">
<div class="col-md-8">
<p id="lesson-copyright">&copy; 2017, <a href="http://www.ucar.edu/">The University Corporation for Atmospheric Research</a> - All Rights Reserved.</p>
</div>
<div class="col-md-4">
	<ul id="parent-links">
	<li><a href="http://www.meted.ucar.edu/legal.htm">Legal Notices</a></li>
	<li><a href="http://www.comet.ucar.edu/">COMET</a></li>
	<li><a href="http://www.meted.ucar.edu/">MetEd</a></li>
	</ul>
</div>

</div>


</div><!-- end master-container -->








<!-- SIDEBAR MODAL PROMPTS ========================-->
<!-- Preassessment Prompt -->
<div id="beginModule" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="preassessment-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="preassessment-message" class="modal-content">
      <div class="modal-footer">
      	<!-- Split button -->
        <div class="btn-group">
          <a class="btn btn-default" href="table_of_contents.htm">Begin Lesson</a>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="table_of_contents.htm">Regular Lesson &raquo;</a></li>
            <li><a href="print.php">Printable Lesson &raquo;</a></li>
          </ul>
        </div>
      <a id="pre-assessment-path" class="btn btn-success" href="#" target="_blank">Go to the pre-assessment &raquo;</a>
      </div>
    </div>
  </div>
</div>

<!-- Quiz and Survey Prompts -->
<div id="quiz-prompt"></div>

</body>
</html>