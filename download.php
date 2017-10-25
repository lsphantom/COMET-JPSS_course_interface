<?php
	//enter the Lesson tile and set the quizID in the vars below
	//agreeLink needs to have the proper path depth set
	//agreeLink structure set to dynamic for php Lesson display, static for regular Lessons
	//for regular Lessons, remove the following .php pages from the root: navmenu.inc.php, navmenu.php, pageTemplate.php, simple_html_dom.php
	$moduleTitle1 = "Latest Core";
	$agreeLink = "../../distribute/getZip.php?moduleID=1163&type=download&structure=dynamic"; 
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="author" content="">
	<meta name="copyright" content="UCAR/COMET">
	<meta name="robots" content="all">
	<meta name="keywords" content="">
	<meta name="Description" content="">
<title>Latest Core</title>
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

<!-- PRESET DEFAULTS ==============================-->
  <script type="text/javascript" src="jquery/defaults.js"></script>

<!-- PRESET OVERRIDES =============================-->
  <script type="text/javascript">
	var printVersion = false; // Specify Print View.  [true] for PRINT, or [false] for DYNAMIC content.
	
	// cleans the download version markup
	$(document).ready(function(){
	
	  // acquire real content then remove junk
	  var $content_area = $('#maincontent');
	  var $agreement = $('#dl_agree');
	  $agreement.hide(); // hide while fussing
	  var $agree_content = $agreement.find('#form1 table tr td:first').html();
	  var $yes_accept = $agreement.find('input:first');
	  var $no_accept = $agreement.find('input:last');
	  var $notice = $agreement.find('td:last p:last');
	  
	  // create new license div
	  $content_area.append('<div id="license_agree"></div>');
	  var $new_license = $('#license_agree');
	  $new_license.append($agree_content);
	  $new_license.before('<h3 style="text-align:center">License Agreement</h3>');
	  $new_license.after('<div id="agree_btns"><span></span><span></span></div>');
	  var $agree_btns = $('#agree_btns');
	  $agree_btns.children('span:first').append($yes_accept);
	  $agree_btns.children('span:last').append($no_accept);
	  $agree_btns.children('span:first input').addClass('agree').attr('value','I accept');
	  $agree_btns.children('span:last input').attr('value','I do not accept');
	  // add LC2+ styling
	  $('#agree_btns input:first').addClass('btn btn-success');
	  $('#agree_btns input:last').addClass('btn btn-default').css('margin-left', '6px');
	  $agree_btns.after($notice);
	  $agree_btns.after('<h4>Notice!</h4>');
	  $content_area.find('p:last').removeAttr('style');
	  $agreement.remove();
	  
	});
</script>

<!-- IE SUPPORT ===================================-->
  <!--[if lte IE 9]>
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
            <li><a href="navmenu.php">Lesson</a></li>
            <li class="active"><a href="download.php">Download</a></li>
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
<div id="lesson-content" class="col-sm-12">
	<h2>Download</h2>
	<hr>

	<div id="maincontent">
	  <div id="dl_agree">
		<?php include('../download_agreement.txt'); ?>
	  </div>
	</div>

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

<!-- SIDEBAR MODAL PROMPTS ========================-->
<!-- Preassessment prompts -->
<div id="pre-begin-prompt" data-item-id="0000"></div>

<!-- Quiz prompt -->
<div id="quiz-prompt" data-item-id="0000"></div>

<!-- Survey prompt -->
<div id="survey-prompt" data-item-id="0000"></div>

</body>
</html>