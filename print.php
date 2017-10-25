<?php
require_once( 'cometAPI.inc.php' );
$mm = new MediaItemManager();
?>
<!doctype html>
<html lang="en">
<head>
	<title>Latest Core</title>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>


	<meta name="author" content="UCAR/COMET">
	<meta name="dcterms.rightsHolder" content="UCAR/COMET">
	<meta name="robots" content="all">
	<meta name="Description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="jquery/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/meted-base.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/module-custom.css">
	<link rel="stylesheet" type="text/css" media="print" href="css/module-print.css">
	
	
	<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-plugins.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="modernizr/modernizr.min.js"></script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="jquery/meted-player/mediaelementplayer.min.css">
	<script type="text/javascript" src="jquery/meted-player/mediaelement-and-player.min.js"></script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/fancybox/fancybox.min.css">
	<script type="text/javascript" src="jquery/apps/fancybox/fancybox.min.js"></script>
	<script type="text/javascript" src="jquery/apps/elevatezoom/elevatezoom.min.js"></script>
	<script type="text/javascript" src="jquery/apps/drag/drag.js"></script>
	<script type="text/javascript" src="jquery/apps/draw/draw.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="jquery/apps/image-sweep/image-sweep.css">
	<script type="text/javascript" src="jquery/apps/image-sweep/image-sweep.js"></script>
	<script type="text/javascript" src="jquery/defaults.js"></script>
	<script type="text/javascript">
		var printVersion = true;
	</script>

	<!--[if lte IE 9]><script type="text/javascript" src="jquery/apps/draw/excanvas.js"></script><script type="text/javascript" src="ie-support/respond.js"></script><link rel="stylesheet" type="text/css" media="screen" href="ie-support/ie-support.css" /><![endif]-->
</head>

<body>
	<!-- PAGE HEADER ==================================-->

	<div id="module-wrapper" class="container">
		<div class="row">
			<section id="module-topbanner">
				<a id="module-title" class="module-title-text chapter_title" href="index.htm">Template Components and Usage</a>
				<h3 id="module-credit" class="hidden-sm hidden-xs">Produced by The COMET® Program</h3>
				<p class="chapter_description">Learn about all the Latest Core components and their respective use.</p>
			</section>
		</div>
		<div class="row">

			<!-- SIDEBAR ======================================-->
			<div id="module-sidebar" class="col-md-3">

				<!-- Collapsible Sidebar Menu -->
				<div id="toc-panel" class="row affix-top">
					<!-- Table of Contents -->
					<div id="collapsible-toc">
						<div class="panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#collapsible-toc" href="#collapse-toc"> Navigation Menu <span id="nav-menu-icon" class="glyphicon glyphicon-th-list"></span></a> </h4>
							</div>

							<div id="collapse-toc" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="lc-docs-sidebar">
										<div class="module-nav">
											<ul class="nav">

												<li><a href="#">Table of Contents</a>
												</li>

											</ul>
										</div>

										<!--  Table of Contents -->
										<div id="tableofcontents" class="sidebar-toc">
											<ul class="nav lc-docs-sidenav">
												<li><a href="#page_1-0-0">Introduction</a>
													<ul class="nav" id="ul_1-0-0">
														<li><a href="#page_1-1-0">Template Backbone and Technical Details</a>
														</li>
													</ul>
												</li>
												<li><a href="#page_2-0-0" class="innerNode">User Interface (UI)</a>
													<ul class="nav" id="ul_2-0-0">
														<li><a href="#page_2-1-0">Style Guide</a>
														</li>
														<li><a href="#page_2-2-0">Module Type</a>
														</li>
													</ul>
												</li>
												<li><a href="#page_3-0-0" class="innerNode">Media Types</a>
													<ul class="nav" id="ul_3-0-0">
														<li><a href="#page_3-1-0">Images</a>
														</li>
														<li><a href="#page_3-2-0">Video</a>
														</li>
														<li><a href="#page_3-3-0">Audio</a>
														</li>
													</ul>
												</li>
												<li><a href="#page_4-0-0" class="innerNode">Learning Interactions (Content Questions)</a>
													<ul class="nav" id="ul_4-0-0">
														<li><a href="#page_4-1-0">Question Types</a>
														</li>
													</ul>
												</li>
												<li><a href="#page_5-0-0">Widgets and Other Tools</a>
												</li>
												<li><a href="#page_6-0-0" class="innerNode">Template Content / Pages</a>
													<ul class="nav" id="ul_6-0-0">
														<li><a href="#page_6-1-0">Lesson - print.php</a>
															<ul class="nav" id="ul_6-1-0">
																<li><a href="#page_6-1-1">Lesson Presentation (Delivery)</a>
																</li>
															</ul>
														</li>
														<li><a href="#page_6-2-0">Splash - index.php</a>
														</li>
														<li><a href="#page_6-3-0">Media Gallery - media_gallery.php</a>
														</li>
														<li><a href="#page_6-4-0">Table of Contents - table_of_contents.php</a>
														</li>
														<li><a href="#page_6-5-0">Download - download.php</a>
														</li>
														<li><a href="#page_6-6-0">Quiz / Survey / Pre-assessment (Modal Prompts)</a>
														</li>
														<li><a href="#page_6-7-0">Contributors</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>

										<hr>
										<div class="module-nav">
											<ul class="nav">
												<li><a href="index.htm">Home</a>
												</li>

												<li><a href="navmenu.php">Lesson</a>
												</li>

												<li class="active"><a href="#">Printable Lesson</a>
												</li>

												<li><a href="download.php">Download</a>
												</li>

												<li><a href="#userQuiz" data-toggle="modal">Quiz</a>
												</li>

												<li><a href="#userSurvey" data-toggle="modal">User Survey</a>
												</li>

												<li><a href="media_gallery.php">Media Gallery</a>
												</li>

											</ul>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

					<!-- Collapsible Sidebar Menu (end) -->
				</div>
			</div>
			<div id="module-content" class="col-md-9">
				<div class="row unit-header"></div>
				<div id="page_1-0-0" class="page">
					<h3>Introduction</h3>

					<p>Latest Core is the COMET basic lesson template used to design online lessons and courses.</p>

					<p>What can you find in this documentation:</p>
					<ul>
						<li>Guidelines to create a new lesson</li>
						<li>Guidelines to incorporate template interactions in a lesson</li>
						<li>Guidelines for best practices of template components</li>
						<li>Sample code snippets of interactions and components</li>
					</ul>
				</div>
				<div id="page_1-1-0" class="page">
					<h3 class="sub_head"><small>Introduction » </small>Template Backbone and Technical Details</h3>
					<p>The Latest Core template uses Twitter’s Bootstrap v3.3.7 as its base framework to allow for responsive design capabilities.  All of its components are written in HTML5, while using some of the latest open source web technologies and libraries.</p>

					<p>What’s in the backbone:</p>
					<ul>
						<li>jQuery and jQuery UI</li>
						<li>Bootstrap</li>
						<li>Modernizr</li>
						<li>Sass</li>
					</ul>
					
					<div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
						  <a data-toggle="collapse" href="#collapse110-1">Base source file structure<span class="glyphicon glyphicon-plus-sign pull-right"></span></a>
						  </h4>
						</div>
					  <div id="collapse110-1" class="panel-collapse collapse">
						  <div class="panel-body">
						  <p><strong>Stylesheets</strong></p>
					<ul>
						<li><strong>jQuery-UI </strong>- jquery-ui.min.css (v1.11.1)</li>
						<li><strong>Bootstrap </strong>- bootstrap.min.css (v3.3.7)</li>
						<li><strong>MetEd-UI </strong>- meted-base.css
							<ul>
								<li><strong>Module-Custom Styles </strong>- module-custom.css</li>
								<li><strong>Module-Print Styles </strong>- module-print.css</li>
							</ul>
						</li>
					</ul>
					<p><strong>JavaScript Libraries (Minimized)</strong>
					</p>
					<ul>
						<li><strong>jQuery </strong>- jquery.min.js (v1.11.1)</li>
						<li><strong>jQuery-UI </strong>- jquery-ui.min.js (v1.11.1)</li>
						<li><strong>jQuery-Plugins </strong>- jquery-plugins.min.js
							<ul>
								<li>Touch Punch v0.2.3</li>
								<li>Event Move v1.3.6</li>
							</ul>
						</li>
						<li><strong>Bootstrap </strong>- bootstrap.min.js (v3.2.0)</li>
						<li><strong>Modernizr </strong>- modernizr.min.js (v2.8.3)</li>
					</ul>
					<p><strong>Stand-Alone Components</strong>
					</p>
					<ul>
						<li><strong>MetEd Media Player</strong>
							<ul>
								<li>meted-player.min.css</li>
								<li>meted-player.min.js (mediaelementjs v2.15.1)</li>
							</ul>
						</li>
						<li><strong>Fancybox 2</strong>
							<ul>
								<li>fancybox.min.css (v2.1.5 licensed)</li>
								<li>fancybox.min.js (v2.1.5 licensed)</li>
							</ul>
						</li>
						<li><strong>ElevateZoom</strong>
							<ul>
								<li>elevatezoom.min.js (v3.0.8)</li>
							</ul>
						</li>
					</ul>
					<p><strong>MetEd Widget Extension Scripts</strong>
					</p>

					<ul>
						<li><strong>Drawing Widget (v.3)</strong>         
							<ul>
								<li>draw.js</li>
								<li>excanvas.js (Conditional for IE8 Only!)</li>
							</ul>
						</li>
						<li><strong>Drag and Drop Widget (v.2)</strong>        
							<ul>
								<li>drag.js</li>
							</ul>
						</li>
						<li><strong>Image Sweep (Comparison Slider)</strong>         
							<ul>
								<li>image-sweep.css</li>
								<li>image-sweep.js (ZURB - TwentyTwenty Widget)</li>
							</ul>
						</li>
					</ul>
					<p><strong>Latest Core Defaults</strong>
					</p>

					<ul>
						<li><strong>LC Defaults</strong>                          
							<ul>
								<li>defaults.js</li>
							</ul>
						</li>
						<li><strong>LC Overrides</strong>                           
							<ul>
								<li>Document &lt;head&gt; of <strong>print.php</strong> inline scripts
							  </li>
								<li>module-custom.js</li>
							</ul>
						</li>
					</ul>
						  </div>
					  </div>
					</div>

					
				</div>
				<div id="page_2-0-0" class="page">
					<h3>User Interface (UI)</h3>
				</div>
				<div id="page_2-1-0" class="page">
					<h3 class="sub_head"><small>User Interface (UI) » </small>Style Guide</h3>

<div class="style-guide panel panel-body">
	<div class="heading-font-sample col-xs-6">
	<div class="guide-sample-characters">Aa</div>
	<p class="text-uppercase">abcdefghijklmnopqrstuvwxyz</p>
	<p>abcdefghijklmnopqrstuvwxyz</p>
	<p>1234567890!@#$%^&amp;*()_+</p>
	</div>
	<div class="guide-sample-paragraph col-xs-6">
	<a href="#" class="btn btn-primary">Button</a>
	<a href="#" class="btn btn-default">Button</a>
	<a href="#" class="btn btn-primary" disabled>Button</a>
	<a href="#" class="btn btn-default" disabled>Button</a><br><br>
	<a href="#" class="btn btn-success btn-block">Success Button</a>
	<a href="#" class="btn btn-warning btn-block">Warning Button</a>
	<a href="#" class="btn btn-danger btn-block">Danger Button</a>
	</div>
	<div class="col-xs-6">
		<div class="tabs-container small">
    <ul id="tab-set-01" class="nav nav-tabs" role="tablist">
      <li class="active">
        <a href="#tab1-0" role="tab" data-toggle="tab" class="tab-switch">Tab 1</a>
      </li>
      <li>
        <a href="#tab2-0" role="tab" data-toggle="tab" class="tab-switch">Tab 2</a>
      </li>
      <li>
        <a href="#tab3-0" role="tab" data-toggle="tab" class="tab-switch">Tab 3</a>
      </li>
      <li>
        <a href="#tab4-0" role="tab" data-toggle="tab" class="tab-switch">Tab 4</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="tab1-0">
        <h3>Tab 1 Content</h3>
        Content here...
        </div>
      <!-- end tab pane -->
      
      <div class="tab-pane fade" id="tab2-0">
        <h3>Tab 2 Content</h3>
        Content here...
        </div>
      <!-- end tab pane -->
      
      <div class="tab-pane fade" id="tab3-0">
        <h3>Tab 3 Content</h3>
        Content here...
        </div>
      <!-- end tab pane -->
      
      <div class="tab-pane fade" id="tab4-0">
        <h3>Tab 4 Content</h3>
        Content here...
        </div>
      <!-- end tab pane -->
      
      </div>
    <!-- end tab content -->
  </div>
	</div>
	<div class="col-xs-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h4 class="panel-title">Panel Default</h4>
		  </div>
		  <div class="panel-body">
			Content<br>here...                
		  </div>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="panel panel-primary">
		  <div class="panel-heading">
			<h4 class="panel-title">Panel Primary</h4>
		  </div>
		  <div class="panel-body">
			Content here...                
		  </div>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="panel panel-success">
		  <div class="panel-heading">
			<h4 class="panel-title">Panel Success</h4>
		  </div>
		  <div class="panel-body">
			Content here...                
		  </div>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="panel panel-warning">
		  <div class="panel-heading">
			<h4 class="panel-title">Panel Warning</h4>
		  </div>
		  <div class="panel-body">
			Content here...                
		  </div>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="panel panel-danger">
		  <div class="panel-heading">
			<h4 class="panel-title">Panel Danger</h4>
		  </div>
		  <div class="panel-body">
			Content here...                
		  </div>
		</div>
	</div>
</div>


					<p>The Latest Core template uses SASS to customize the look and feel.</p>
					<p>All base colors, fonts, and new UI components in the template should be added or modified through the <strong>module-custom.scss</strong> file.  You may use your compiler of choice to output to the final <strong>module-custom.css</strong>.  If you prefer to work directly onto the CSS, simply delete the <strong>module-custom.scss</strong> file and open the <strong>module-custom.css</strong> file in your editor of choice.</p>

					<h4>Colors</h4>
					<p>In <strong>module-custom.scss</strong> there are 4 basic color variables defined, to help minimize the number of accent and base colors used throughout the lesson. However, more color variables can be added using SCSS syntax.</p>
					<p>Current Palette:</p>
					<p>$module-color1, $module-color2, $module-color3, $module-color4</p>
				  <div class="col-xs-12">
						<div id="module-color-1" class="drawtool-swatch" title="$module-color1"></div>
                		<div id="module-color-2" class="drawtool-swatch" title="$module-color2"></div>
                		<div id="module-color-3" class="drawtool-swatch" title="$module-color3"></div>
                		<div id="module-color-4" class="drawtool-swatch" title="$module-color4"></div>
					</div>
				  <h4>Fonts</h4>
					<p>By default, Latest Core includes a couple of web fonts.  Regular system fonts, and additional web fonts can be defined in <strong>module-custom.scss</strong>, as long as there are no copyright implications.  If a license has been purchased for a particular web font, remember to include the licensing data as a comment at the end of <strong>module-custom.css</strong>.</p>

					<p>Base fonts:</p>
					<ul>
						<li>Source Sans Pro</li>
						<li>FuturaPro Normal</li>
					  <li>Helvetica Neue (System Based Sans-Serif)</li>
						<li>Georgia (System Based Serif)</li>
					</ul>
					<h4>Splash page cover image and product thumbnail</h4>
					<p>The splash page cover image and the banner are the only UI images and can be found in the <strong>assets</strong> folder.</p>
					<img src="assets/module-cover.jpg" class="img-responsive center-block">
					<p><strong>Splash Page Cover Image - module-cover.jpg</strong>
					</p>
					<p>This is the splash image displayed at the template index.</p>
					<p>This image should be 1280x720 and should match the module banner image.  However, because this template adapts to screen size, the image can be just about any size, but in order to fill the necessary space the image should have a width greater than 1100px.</p>
					
					<div class="deprecated">
					<p><strong>Module Banner - module-banner.jpg</strong></p>
					<p>The module banner has been removed from Latest Core.</p>
					</div>
					
					<p><strong>Product Thumbnail - <em>modulename</em>-banner.jpg</strong></p>
					<p>The product thumbnail must be 200x150.</p>
			  </div>
				<div id="page_2-2-0" class="page">
					<h3 class="sub_head"><small>User Interface (UI) » </small>Module Type</h3>
					<h4>Single Unit Lesson or Multiple Unit Lesson</h4>
					</p>
					<p>Latest Core can be used for single or multiple unit lessons.</p>
					<p>Single-unit lessons is the most common and default module type.  For this type of lesson, only one <strong>print.php</strong> file is used, and there is no additional table of contents.</p>

					<p>Multi-unit lessons have multiple <strong>print.php</strong> files. In these module types, each print.php file will correspond to each unit in the lesson and they must be named with sequential enumeration.</p>
					<p>Here’s an example of how to name print.php files in your multi-unit lesson:</p>
					<ol start="1">
						<li> print.php → Unit 1</li>
						<li> print_2.php → Unit 2</li>
						<li> print_3.php → Unit 3</li>
						<li>… and so on</li>
					</ol>

					<h4>Unit vs. Chapter Naming Convention</h4>
					<p>By default, Latest Core uses “Unit” for the multi-unit module type, but these can be changed to “Chapter” if needed.  To change these, you’ll need to edit the <strong>navmenu.inc.php</strong> file and change the necessary strings to be “Chapter” instead of “Unit”.</p>
				</div>
				<div id="page_3-0-0" class="page">
					<h3>Media Types</h3>
				</div>
				<div id="page_3-1-0" class="page">
					<h3 class="sub_head"><small>Media Types » </small>Images</h3>
					<?php echo $mm->getPrintMediaItemWrapper(49411, "sample image + caption"); ?>
					<h4>PHP Code</h4>
<pre>
<code>&lt;?php echo $mm-&gt;getPrintMediaItemWrapper(00000); ?&gt;</code>
COMET API Options: (msdb id, caption, class)
</pre>

						<table class="table table-bordered small">
							<thead><th>Name</th>
								<th>Type</th>
								<th>Default</th>
								<th>Description</th>
							</thead>
							<tbody>
							<tr>
								<td>msdb id</td>
								<td>number</td>
								<td>00000</td>
								<td>This is the given MetEd MSDB File ID found in the Active Projects records.</td>
							</tr>
							<tr>
								<td>caption</td>
								<td>string</td>
								<td><em>empty</em></td>
								<td>Set a caption for this image.</td>
							</tr>
							<tr>
								<td>class</td>
								<td>string</td>
								<td><em>empty</em></td>
								<td>Set a HTML class for the image. (This removes the DIV.center wrapper)</td>
							</tr>
							</tbody>
							</table>
					

					<h4>MSDB Errors</h4>
					<?php echo $mm->getPrintMediaItemWrapper(49412); ?>
					<br>
					<?php echo $mm->getPrintMediaItemWrapper(49413); ?>
				</div>
				<div id="page_3-2-0" class="page">
					<h3 class="sub_head"><small>Media Types » </small>Video</h3>
					<h4>Optimal Video Sizes</h4>
					<p>Use the following sizes to create 16:9 videos that are optimal for this template:</p>
					<ul>
						<li>1280 x 720</li>
						<li><strong>800 x 450</strong></li>
					</ul>
					
					<h4>Default Video</h4>
					<!--?php echo $mm->getPrintMP4Wrapper(49414, false, false); ?-->
					<div class="videowrap-16x9">
					  <script type="text/javascript">
					  // <![CDATA[
					  if (printVersion) {
					  // Use still image for Print Module
						 document.write('<a href="media/video/vid-sample.mp4"><img class="img-responsive center-block" src="media/video/vid-sample.jpg" alt="still"/><p class="text-center">Download Video</p></a>');}
					  else {
					  // Use HTML5 player with Adobe Flash fallback
						 document.write('<video class="html5video" width="640" height="360" style="max-width:100%;" poster="media/video/vid-sample.jpg" preload="none" controls playsinline webkit-playsinline><source src="media/video/vid-sample.mp4" type="video/mp4"></video>');}
					  // ]]>
					  </script>
					</div>


					
					<h4>PHP Code</h4>
<pre>
<code>&lt;?php echo $mm-&gt;getPrintMP4Wrapper(00000, false, false); ?&gt;</code>
COMET API Options: (msdb id, autoplay, loop)
</pre>

						<table class="table table-bordered small">
							<thead><th>Name</th>
								<th>Type</th>
								<th>Default</th>
								<th>Description</th>
							</thead>
							<tbody>
							<tr>
								<td>msdb id</td>
								<td>number</td>
								<td>00000</td>
								<td>This is the given MetEd MSDB File ID found in the Active Projects records.</td>
							</tr>
							<tr>
								<td>autoplay</td>
								<td>boolean</td>
								<td>false</td>
								<td>Specify if the video file should begin playing automatically.</td>
							</tr>
							<tr>
								<td>loop</td>
								<td>boolean</td>
								<td>false</td>
								<td>Specify if the video file should loop infinitely.</td>
							</tr>
							</tbody>
							</table>
				<h4>HTML Code</h4>
<pre><code>&lt;div class=&quot;videowrap-16x9&quot;&gt;<br>  &lt;script type=&quot;text/javascript&quot;&gt;<br>	if (printVersion) {<br>	// Use still image for Print Module<br>	document.write('&lt;a href=&quot;media/video/vid-sample.mp4&quot;&gt;&lt;img class=&quot;img-responsive center-block&quot; src=&quot;media/video/vid-sample.jpg&quot; alt=&quot;still&quot;/&gt;&lt;p class=&quot;text-center&quot;&gt;Download Video&lt;/p&gt;&lt;/a&gt;');}<br>	else {<br>	// Use HTML5 player with Adobe Flash fallback<br>	document.write('&lt;video class=&quot;html5video&quot; width=&quot;640&quot; height=&quot;360&quot; style=&quot;max-width:100%;&quot; poster=&quot;media/video/vid-sample.jpg&quot; preload=&quot;none&quot; controls playsinline webkit-playsinline&gt;&lt;source src=&quot;media/video/vid-sample.mp4&quot; type=&quot;video/mp4&quot;&gt;&lt;/video&gt;');}
  &lt;/script&gt;<br>&lt;/div&gt;</code>
</pre>			
				
				
				</div>
				<div id="page_3-3-0" class="page">
					<h3 class="sub_head"><small>Media Types » </small>Audio</h3>
					<!--?php echo $mm->getPrintMediaItemWrapper(49415); ?-->
				<audio class="html5audio" controls>
				  <source src="media/audio/aud-sample.mp3" type="audio/mp3" />
				</audio>
				<h4>HTML Code</h4>
<pre><code>&lt;audio class=&quot;html5audio&quot; controls&gt;
	&lt;source src=&quot;media/audio/aud-sample.mp3&quot; type=&quot;audio/mp3&quot; /&gt;
&lt;/audio&gt;</code></pre>
				</div>

				<div id="page_4-0-0" class="page">
					<h3>Learning Interactions (Content Questions)</h3>
				</div>
				<div id="page_4-1-0" class="page">
					<h3 class="sub_head"><small>Learning Interactions (Content Questions) » </small>Question Types</h3>
					<ul>
						<li><strong>Basic</strong>
							<ul>
								<li>MCQ - Radio
								</li>
								<li>MSQ - Checkbox
								</li>
								<li>TAQ - Textarea
								</li>
								<li>DDQ - Dropdown
								</li>
							</ul>
						</li>
						<li><strong>Advanced</strong>
							<ul>
								<li>Reordering List Exercise
								</li>
								<li>Drag-and-Drop Exercise
								</li>
								<li>Drawing Exercise
								</li>
								<li>Flipcard Exercise
								</li>
							</ul>
						</li>
						<li><strong>Question Groups</strong>
							<ul>
								<li>Nested Questions
								</li>
								<li>Carousel Questions
								</li>
							</ul>
						</li>
					</ul>

					<h4>Examples</h4>
					<h5>Basic</h5>
					<div class="tabs-container">
						<ul class="nav nav-tabs" role="tablist" id="tab-set-01">
							<li class="active"><a href="#tab1-0" role="tab" data-toggle="tab" class="tab-switch">MCQ</a>
							</li>
							<li><a href="#tab2-0" role="tab" data-toggle="tab" class="tab-switch">MSQ</a>
							</li>
							<li><a href="#tab3-0" role="tab" data-toggle="tab" class="tab-switch">TAQ</a>
							</li>
							<li><a href="#tab4-0" role="tab" data-toggle="tab" class="tab-switch">DDQ</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1-0">
								<h3>MCQ</h3>

								<p>          Multiple Choice Question - Radio</p>
							  <div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap radio">
											<h4>Question</h4>
											<p>INSERT QUESTION TEXT HERE</p>

											<form action="#">
												<fieldset>
													<div class="response-group-item"><input id="q01a" name="q01" value="a" type="radio"><label for="q01a"> <strong>a) </strong>Option 1 Incorrect</label>
													</div>
													<div class="response-group-item correct"><input id="q01b" name="q01" value="b" type="radio"><label for="q01b"> <strong>b) </strong>Option 2 Correct</label>
													</div>
													<div class="response-group-item"><input id="q01c" name="q01" value="c" type="radio"><label for="q01c"> <strong>c) </strong>Option 3 Incorrect</label>
													</div>
													<div class="response-group-item"><input id="q01d" name="q01" value="d" type="radio"><label for="q01d"> <strong>d) </strong>Option 4 Incorrect</label>
													</div>
													<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
												</fieldset>
											</form>
											<div class="answer">
												<p class="response">The correct answer is b.</p>

												<p class="explanation">     INSERT YOUR FEEDBACK HERE.</p>

											</div>
											<div class="message">Please make a selection.</div>
										</div>
									</div>
								</div>
								



<a href="#coll-01" data-toggle="collapse">HTML Code <span class="caret"></span></a>

<pre id="coll-01" class="collapse small"><code class="small">&lt;div class=&quot;panel panel-default interaction-question&quot;&gt;
&lt;div class=&quot;panel-body&quot;&gt;
  &lt;div class=&quot;question-wrap radio&quot;&gt;
  &lt;h4&gt;Question&lt;/h4&gt;
  &lt;p&gt;INSERT QUESTION TEXT HERE&lt;/p&gt;
&lt;form action=&quot;#&quot;&gt;
  &lt;fieldset&gt;
  &lt;div class=&quot;response-group-item&quot;&gt;&lt;input id=&quot;q01a&quot; name=&quot;q01&quot; value=&quot;a&quot; type=&quot;radio&quot;&gt;&lt;label for=&quot;q01a&quot;&gt; &lt;strong&gt;a) &lt;/strong&gt;Option 1 Incorrect&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;response-group-item correct&quot;&gt;&lt;input id=&quot;q01b&quot; name=&quot;q01&quot; value=&quot;b&quot; type=&quot;radio&quot;&gt;&lt;label for=&quot;q01b&quot;&gt; &lt;strong&gt;b) &lt;/strong&gt;Option 2 Correct&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;response-group-item&quot;&gt;&lt;input id=&quot;q01c&quot; name=&quot;q01&quot; value=&quot;c&quot; type=&quot;radio&quot;&gt;&lt;label for=&quot;q01c&quot;&gt; &lt;strong&gt;c) &lt;/strong&gt;Option 3 Incorrect&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;response-group-item&quot;&gt;&lt;input id=&quot;q01d&quot; name=&quot;q01&quot; value=&quot;d&quot; type=&quot;radio&quot;&gt;&lt;label for=&quot;q01d&quot;&gt; &lt;strong&gt;d) &lt;/strong&gt;Option 4 Incorrect&lt;/label&gt;
  &lt;/div&gt;
  &lt;input class=&quot;submit-button btn btn-primary&quot; name=&quot;submit-button&quot; value=&quot;Done&quot; type=&quot;button&quot;&gt;
  &lt;/fieldset&gt;
  &lt;/form&gt;
  &lt;div class=&quot;answer&quot;&gt;
  &lt;p class=&quot;response&quot;&gt;The correct answer is b.&lt;/p&gt;
 &lt;p class=&quot;explanation&quot;&gt;INSERT YOUR FEEDBACK HERE.&lt;/p&gt;
 &lt;/div&gt;
  &lt;div class=&quot;message&quot;&gt;Please make a selection.&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
							</div>

							<div class="tab-pane fade" id="tab2-0">
								<h3>MSQ</h3>

								<p>          Multiple Select Question - Checkbox</p>
								<div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap checkboxes">
											<h4>Question</h4>
											<p>     INSERT QUESTION TEXT HERE</p>

											<form action="#">
												<fieldset>
													<div class="response-group-item correct"><input id="q02a" name="q02" value="a" type="checkbox"><label for="q02a"> <strong>a) </strong>Option 1 Correct</label>
													</div>
													<div class="response-group-item correct"><input id="q02b" name="q02" value="b" type="checkbox"><label for="q02b"> <strong>b) </strong>Option 2 Correct</label>
													</div>
													<div class="response-group-item"><input id="q02c" name="q02" value="c" type="checkbox"><label for="q02c"> <strong>c) </strong>Option 3 Incorrect</label>
													</div>
													<div class="response-group-item"><input id="q02d" name="q02" value="d" type="checkbox"><label for="q02d"> <strong>d) </strong>Option 4 Incorrect</label>
													</div>
													<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
												</fieldset>
											</form>
											<div class="answer">
												<p class="response">The correct answers are a, b.</p>

												<p class="explanation">     INSERT YOUR FEEDBACK HERE.</p>

											</div>
											<div class="message">Please make a selection.</div>
										</div>
									</div>
								</div>


							</div>

							<div class="tab-pane fade" id="tab3-0">
								<h3>TAQ</h3>

								<p>          Text Area Question - Textarea</p>
								<div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap textentry">
											<h4>Question</h4>
											<p>     INSERT QUESTION TEXT HERE</p>

											<form action="#">
												<fieldset><textarea class="textbox" name="textareaq03" cols="60" rows="5" id="textareaq03"></textarea><br><input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
												</fieldset>
											</form>
											<div class="answer">
												<p class="explanation">     INSERT YOUR FEEDBACK HERE.</p>

											</div>
										</div>
									</div>
								</div>


							</div>

							<div class="tab-pane fade" id="tab4-0">
								<h3>DDQ</h3>

								<p>          Drop Down Question - Dropdown</p>
								<div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap inlinedropdowns">
											<h4>Question</h4>
											<p>INSERT QUESTION TEXT HERE</p>

											<form action="#">
												<fieldset>
													<div class="response-group-item"><strong> a) </strong> MAKE AN ORDERED OR UNORDERED LIST HERE LEAVING 5 UNDERSCORES
														<select name="q04a">
															<option>--</option>
															<option>answer option1</option>
															<option> answer option2 correct</option>
															<option> answer option3</option>
														</select> FOLLOWED BY A PARENTHETICAL LIST OF ANSWER OPTIONS HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</div>
													<div class="correct response-group-item dropdown_correct answer">answer option2 correct</div>
													<div class="message">Please make a selection.</div>
													<div class="response-group-item"><strong> b) </strong> MAKE AN ORDERED OR UNORDERED LIST HERE LEAVING 5 UNDERSCORES
														<select name="q04b">
															<option>--</option>
															<option>answer option1</option>
															<option> answer option2</option>
															<option> answer option3 correct</option>
														</select> FOLLOWED BY A PARENTHETICAL LIST OF ANSWER OPTIONS HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</div>
													<div class="correct response-group-item dropdown_correct answer">answer option3 correct</div>
													<div class="message">Please make a selection.</div>
													<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
												</fieldset>
											</form>
											<div class="answer">
												<p class="explanation">INSERT YOUR FEEDBACK HERE.</p>

											</div>
											<div class="message">Please make a selection.</div>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<h5>Advanced</h5>
					<div class="tabs-container">
						<ul class="nav nav-tabs" role="tablist" id="tab-set-02">
							<li class="active"><a href="#tab5-0" role="tab" data-toggle="tab" class="tab-switch">Reordering List Exercise</a>
							</li>
							<li><a href="#tab6-0" role="tab" data-toggle="tab" class="tab-switch">Drag-and-Drop Exercise</a>
							</li>
							<li><a href="#tab7-0" role="tab" data-toggle="tab" class="tab-switch">Drawing Exercise</a>
							</li>
							<li><a href="#tab8-0" role="tab" data-toggle="tab" class="tab-switch">Flipcard Exercise</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab5-0">
								<h3>Reordering List Exercise</h3>

								<div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap reordering">
											<h4>Question</h4>
											<p>INSERT QUESTION TEXT HERE</p>

											<form action="#">
												<fieldset>
													<div class="‘response-group-item’">
														<ol class="sortable sortIt ui-sortable" start="1">
															<li class="ui-state-default ui-sortable-handle"><span class="glyphicon glyphicon-th"></span> INSERT ORDERED LIST ITEMS HERE FOR REORDERING.<span class="glyphicon glyphicon-sort"></span>
															</li>
															<li class="ui-state-default ui-sortable-handle"><span class="glyphicon glyphicon-th"></span> INSERT ORDERED LIST ITEMS HERE FOR REORDERING.<span class="glyphicon glyphicon-sort"></span>
															</li>
														</ol>
													</div>
													<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
												</fieldset>
											</form>
											<div class="answer response-group-item dropdown_correct correct">
												<p class="explanation">INSERT YOUR FEEDBACK HERE.</p>

												<ol class="ordered-response-list" start="1">
													<li>INCLUDE THE ORDERED LIST IN THE CORRECT ORDER.</li>
													<li>INCLUDE THE ORDERED LIST IN THE CORRECT ORDER.</li>
												</ol>
											</div>
										</div>
									</div>
								</div>


							</div>

							<div class="tab-pane fade" id="tab6-0">
								<h3>Drag-and-Drop Exercise</h3>

								<div class="panel panel-default interaction-question">
									<div class="panel-body">
										<div class="question-wrap-drag">
											<h4>Question</h4>
											<p>INSERT QUESTION TEXT HERE</p>

											<p>INSERT IMAGE FOR REFERENCE ONLY</p>
											<div class="drag-container" title="media/graphics/image-name.jpg">
												<div class="image_holder"></div>
												<p class="drag_directions">IF DIRECTIONS ARE NEEDED ADD THEM HERE.</p>
												<div class="drag_controls_holder">
													<div class="drag_controls">
														<div class="draggable ui-widget-content ui-draggable drag_item ui-draggable-handle" style="position: relative;"><span class="glyphicon glyphicon-th"></span>          INSERT DRAG 1 CONTENT HERE</div>
														<div class="draggable ui-widget-content ui-draggable drag_item ui-draggable-handle" style="position: relative;"><span class="glyphicon glyphicon-th"></span>          INSERT DRAG 2 CONTENT HERE</div>
														<div class="draggable ui-widget-content ui-draggable drag_item ui-draggable-handle" style="position: relative;"><span class="glyphicon glyphicon-th"></span>          INSERT DRAG 3 CONTENT HERE</div>
														<div class="draggable ui-widget-content ui-draggable drag_item ui-draggable-handle" style="position: relative;"><span class="glyphicon glyphicon-th"></span>          INSERT DRAG 4 CONTENT HERE</div>
													</div>
													<input class="done_drag btn btn-primary" value="Done" type="button"> <input class="reset_drag btn btn-default" value="Reset" type="button">
												</div>
											</div>


											<div class="answer">
												<div class="group">
													<p>     INSERT YOUR FEEDBACK HERE.</p>

												</div>
											</div>
										</div>
									</div>
								</div>



							</div>

							<div class="tab-pane fade" id="tab7-0">
								<h3>Drawing Exercise</h3>

								<div class="panel panel-default question-wrap-draw">
									<div class="panel-body">
										<h4>Question</h4>
										<p>     INSERT QUESTION TEXT HERE</p>

										<p>     INSERT IMAGE FOR REFERENCE ONLY</p>
										<div class="drawing-container center-block" title="media/graphics/image-name.jpg">
											<div class="canvas-wrap row"><img class="background img-responsive center-block" src="media/graphics/image-name.jpg" alt="background image" style="position: relative;"><img class="feedback img-responsive center-block" src="media/graphics/image-name_feedback.jpg" alt="background image" style="position: relative; display: none;"><img class="background img-responsive center-block" src="media/graphics/image-name.jpg" alt="background image" style="position: relative;"><img class="feedback img-responsive center-block" src="media/graphics/image-name_feedback.jpg" alt="background image" style="position: relative; display: none;"><canvas class="drawing-canvas center-block" width="850" height="500" style="position: relative;"></canvas>
											</div>
											<div class="drawtool-controls row">
												<div class="col-xs-12">
													<p>     IF DIRECTION ARE NEEDED ADD THEM HERE.</p>
												</div>
												<div class="drawtool-buttons col-xs-4"><input class="done btn btn-primary" value="Done" type="button"> <input class="reset btn btn-default" value="Reset" type="button">
												</div>
												<div class="drawtool-toolset col-xs-8">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th>Tool:</th>
																<th>Tool Size:</th>
																<th>Color:</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="drawtool-brushes">
																	<div class="radio">
																		<form class="brush-select"><label><input class="draw-pen" name="draw-brush" checked="" value="Pen" type="radio"><span class="pen-icon"></span>Pen </label><label><input class="draw-eraser" name="draw-brush" value="Eraser" type="radio"><span class="eraser-icon"></span>Eraser</label>
																		</form>
																	</div>
																</td>
																<td class="drawtool-drawsize">
																	<select class="drawsize form-control">
																		<option value="4">4</option>
																		<option value="8">8</option>
																		<option value="10">10</option>
																	</select>
																</td>
																<td class="drawtool-palette">
																	<div class="drawtool-swatch" style="background-color:   red" title="" data-original-title="Red"></div>
																	<div class="drawtool-swatch" style="background-color:   green" title="" data-original-title="Green"></div>
																	<div class="drawtool-swatch" style="background-color:   #000" title="" data-original-title="Black"></div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>


										<div class="answer">
											<p class="explanation">     INSERT YOUR FEEDBACK HERE.</p>

										</div>
									</div>
								</div>


							</div>

							<div class="tab-pane fade" id="tab8-0">
								<h3>Flipcard Exercise</h3>

								<div class="panel programmer-note" style="padding: 10px; background-color: #ff4835">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#pnote-1" data-toggle="collapse">&lt;Programmer Note&gt;</a></h4>
									</div>
									<div id="pnote-1" class="panel-collapse collapse">
										<div class="panel-body">
											<p>     INSERT FLIPCARD EXERCISE HERE.</p>
										</div>
									</div>

								</div>


							</div>

						</div>
					</div>



					<h4>Question Groups</h4>
					<h5>Nested Questions</h5>
					<div class="panel panel-default interaction-question">
						<div class="panel-body">
							<div class="question-wrap radio">
								<h4>Question 1 of 2</h4>
								<p>INSERT QUESTION TEXT HERE</p>

								<form action="#">
									<fieldset>
										<div class="response-group-item correct"><input id="q08a" name="q08" value="a" type="radio"><label for="q08a"> <strong>a) </strong>MAKE LIST HERE HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</label>
										</div>
										<div class="response-group-item"><input id="q08b" name="q08" value="b" type="radio"><label for="q08b"> <strong>b) </strong>MAKE LIST HERE HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</label>
										</div>
										<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
									</fieldset>
								</form>
								<div class="answer">
									<p class="response">The correct answer is a.</p>

									<p class="explanation">     INSERT YOUR FEEDBACK HERE.</p>

								</div>
								<div class="message">Please make a selection.</div>
							</div>
						</div>
					</div>
					<div class="show-after" style="display: none;">
						<div class="panel panel-default interaction-question">
							<div class="panel-body">
								<div class="question-wrap radio">
									<h4>Question 2 of 2</h4>
									<p>INSERT QUESTION TEXT HERE</p>

									<form action="#">
										<fieldset>
											<div class="response-group-item correct"><input id="q09a" name="q09" value="a" type="radio"><label for="q09a"> <strong>a) </strong>MAKE LIST HERE HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</label>
											</div>
											<div class="response-group-item"><input id="q09b" name="q09" value="b" type="radio"><label for="q09b"> <strong>b) </strong>MAKE LIST HERE HIGHLIGHTING THE CORRECT ANSWER IN BOLD.</label>
											</div>
											<input class="submit-button btn btn-primary" name="submit-button" value="Done" type="button">
										</fieldset>
									</form>
									<div class="answer">
										<p class="response">The correct answer is a.</p>

										<p class="explanation">INSERT YOUR FEEDBACK HERE.</p>

									</div>
									<div class="message">Please make a selection.</div>
								</div>
							</div>
						</div>

					</div>



					<h5>Carousel Questions</h5>
					<div class="panel programmer-note" style="padding: 10px; background-color: #ff4835">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="#pnote-2" data-toggle="collapse">&lt;Programmer Note&gt;</a></h4>
						</div>
						<div id="pnote-2" class="panel-collapse collapse">
							<div class="panel-body">
								<p>    INSERT CAROUSEL HERE.</p>
							</div>
						</div>

					</div>

				</div>
				<div id="page_5-0-0" class="page">
					<h3>Widgets and Other Tools</h3>
					<h4>COMET Original Widgets</h4>
					<p>Base widgets</p>
					<ul>
						<li>Data Looper</li>
						<li>Radio Button Image Selector</li>
						<li>Local Storage Data Recall</li>
					</ul>
					<p>Custom MetEd widgets and interactions</p>
					<ul>
						<li>Practice Drills - (NAVY Wx Obs)</li>
						<li>CIMSS Looper</li>
						<li>amCharts - (Climate and Water Resource Management)</li>
						<li>Map location check exercise - (NAVY Med Europe U2-P1-1-1)</li>
						<li>Completion check - (AMDAR)</li>
						<li>Roulette - (BOM)</li>
						<li>Dynamic Comparison Slider - (BOM)</li>
						<li>Case Sims - (Convective Cessation)</li>
						<li>MCS Matrix - (MCS Matrix)</li>
						<li>CS Matrix - (CS Matrix)</li>
						<li>Branching Sim - (Fire Wx)</li>
						<li>Space Jumper Gravity Calculator - (Gravity Intro)</li>
						<li>Tower placement - (Instrumentation Intro)</li>
						<li>...</li>
					</ul>

					<h4>Third Party Interactions and Tools</h4>
					<ul>
						<li><strong>Bootstrap Interactions</strong>
							<ul>
								<li>Collapsible Panels
								</li>
								<li>Carousel
								</li>
								<li>Modal
								</li>
								<li>Tabs
								</li>
								<li>Tooltip and Popover
								</li>
								<li>More... (link to Bootstrap Documentation)</li>
							</ul>
						</li>
						<li><strong>Image Comparison</strong>
							<ul>
								<li>Radio/Tab Comparison
								</li>
								<li>Comparison Slider
								</li>
							</ul>
						</li>
						<li><strong>Image Magnification</strong>
							<ul>
								<li>Fancybox
								</li>
								<li>Elevate Zoom
								</li>
							</ul>
						</li>
						<li><strong>Tooltip Information</strong>
							<ul>
								<li>qTip2
								</li>
							</ul>
						</li>
						<li><strong>Range Selector</strong>
							<ul>
								<li>noUiSlider
								</li>
								<li>jQuery UI Slider</li>
							</ul>
						</li>
					</ul>



				</div>
				<div id="page_6-0-0" class="page">
					<h3>Template Content / Pages</h3>
				</div>
				<div id="page_6-1-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Lesson - print.php</h3>
					<p>This page should contain all the lesson-content data.  This page also represents Unit 1 , or the entire lesson if this is the only print.php page in the lesson.</p>
					<p>Required content:</p>
					<ul>
						<li>Meta tags</li>
						<li>Title</li>
						<li>Header script variable <strong>printVersion</strong>
						</li>
						<li>Table of contents menu <strong>#tableofcontents</strong>
						</li>
						<li>Pages for each table of contents link <strong>div.page</strong>
						</li>
						<li>Contributors page*</li>
					</ul>
					<div class="alert alert-warning" role="alert">
						<p>Note: It is critical that you DO NOT name other files in the lesson root directory with the string “print” in the filename, as this may cause the navmenu.php to read that file creating errors.  If this is a multi-unit lesson, only additional units/chapters may include “print” in the filename; all other files in this directory must be renamed without “print” in the filename.</p>

					</div>

				</div>
				<div id="page_6-1-1" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » Lesson - print.php » </small>Lesson Presentation (Delivery)</h3>
					<h4>Regular Interactive Lesson</h4>
					<h4>Narrated Lesson</h4>
					<h4>Printable Version</h4>
				</div>
				<div id="page_6-2-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Splash - index.php</h3>
					<p>This is simply your landing page for your lesson.</p>
					<p>Required content:</p>
					<ul>
						<li>Lesson Title*</li>
						<li>Pre-assessment ID (if present)*</li>
						<li>Cover image credit</li>
						<li>Meta tags for description and keywords*</li>
					</ul>
					<p>*Subject to change</p>
				</div>
				<div id="page_6-3-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Media Gallery - media_gallery.php</h3>
					<p>This page is a copy of what is available through the MetEd splash screen so it may be removed in the future.</p>
				</div>
				<div id="page_6-4-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Table of Contents - table_of_contents.php</h3>
					<p>This page is only present for multi-print lessons.</p>
					<p class="preprogram-note">* This page will be removed and merged into <strong>index.php</strong></p>
				</div>
				<div id="page_6-5-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Download - download.php</h3>
					<p>The lesson download</p>
				</div>
				<div id="page_6-6-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Quiz / Survey / Pre-assessment (Modal Prompts)</h3>
					<p>Quiz Modal Prompt</p>
					<p>Survey Modal Prompt</p>
					<p>Pre-assessment Modal Prompt</p>
				</div>
				<div id="page_6-7-0" class="page">
					<h3 class="sub_head"><small>Template Content / Pages » </small>Contributors</h3>
					<p>The contributors page should be included in the <strong>print.php</strong> unless it is a multi-print lesson.</p>
				</div>
				<!-- end of page -->
			</div>
		</div>


		<div id="module-footer" class="row">
			<div class="col-md-10 col-sm-12">
				<p class="footer-text">© Copyright 2017, <a href="http://www.ucar.edu">University Corporation for Atmospheric Research</a>.<br> All rights reserved. <a href="http://meted.ucar.edu/legal.htm">Legal notices</a>
				</p>

			</div>

			<div class="col-md-2 hidden-sm hidden-xs">
				<ul class="footer-links list-unstyled">
					<li><a href="https://www.meted.ucar.edu/"><span class="glyphicon glyphicon-link"></span> MetEd Home</a>
					</li>

					<li><a href="http://comet.ucar.edu"><span class="glyphicon glyphicon-link"></span> COMET Home</a>
					</li>

				</ul>
			</div>

		</div>

	</div>

<!-- BACK TO TOP BUTTON ==========================-->
<p class="back-top"><a href="#top"><span class="glyphicon glyphicon-upload"></span>Back to Top</a></p>
<!-- Quiz and Survey Prompts -->
<div id="quiz-prompt"></div>
<!-- PRINT STYLES SCRIPT ==========================-->
 <script type="text/javascript">
$(document).ready(function(){
// Remove all media stylesheets
$('link[media~="screen"]').prop('disabled', true);
// Convert print stylesheet to all-media
$('link[media~="print"]').attr('media', 'all');
});
captionFix();
</script>
</body>

</html>