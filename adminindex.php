<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-gb"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en-gb"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-gb"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-gb"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>University of the Philippines - Research Information System</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- You can also compile style.less to use regular css. Your apps will still work. -->
  <style type="text/css">.hidden{margin:20px;border:5px solid #a24c4c;background-color:red;padding:10px;width:400px;color:white;font-family:helvetica,sans-serif}</style>
  <link rel="stylesheet/less" type="text/css" href="kickstrap.less">
  <script src="Kickstrap/js/less-1.4.1.min.js"></script>
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="sf-wrapper"> <!-- Sticky Footer Wrapper -->
  <!-- Prompt IE 6/7 users to install Chrome Frame. Remove this if you support IE 7-.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<!--! END KICKSTRAP HEADER --> 










<!-- Topmost navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-inner">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">UP RIS</a>
		  </div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Annoucements</a></li>
				<li><a href="#">Accounts</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
					</form>
				</li>
				<li><a href="#aboutus"><i class="icon-info-sign"></i></a></li>
				<li><a href="#contactus"><i class="icon-phone-sign"></i></a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">My Page</a></li>
					<li><a href="#">My Profile</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
				</li>
			</ul>
			</div>
	</div>
</div>


<!--Container-->
<section class="container">
	<!-- Title -->
	<div class="row">
		<div class="col-md-12">
			<br>
			<img src="Kickstrap/img/yab.png"></img>
			<br>
		</div>
	</div>
	
	<!-- Secondary Navbar -->
	<div class="row">
		<div class="col-md-12">
			<div class="navbar navbar-simple navbar-static-top hidden-xs" role="navigation">
				<div class="navbar-inner">
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					  </div>

						<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Grants</a></li>
							<li><a href="#">Adviser</a></li>
							<li><a href="#">Reviewer</a></li>
							<li><a href="#">Researcher</a></li>
						</ul>
						
						</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Two columns -->
	<div class="row">
	
		<!--1st column-->
		<div class="col-md-8">
				  
		<div>
			<span style="text-align:center;"><h4> Approve newly made accounts</h4></span>
			<div id="tabs" style="text-align:center">
			  <ul class="nav nav-tabs">
				<li class="active"><a href="#tabs-1">Researchers</a></li>
				<li><a href="#tabs-2">Reviewers</a></li>
				<li><a href="#tabs-3">Advisers</a></li>  
			  </ul>
			  <div id="tabs-1"><?admin_class::view_accounts('userinfo');?></div>
			  <div id="tabs-2"><?admin_class::view_accounts('reviewerinfo');?></div> 
			  <div id="tabs-3"><?admin_class::view_accounts('adviserinfo');?></div>
			</div>  
      </div>			  
			

		</div>
		<!-- End of 1st column-->
		
		<!-- 2nd column-->
		<div class="col-md-4">
		
			<!-- Announcements form-->
			<div>
				<p>Post an announcement</p>
				<div style="margin-left:20px;">
				  <form method="post" action="adminindex.php">
					<input name="text" class="form-control" placeholder="header.." required="required"/> <p></p>
					  <div id="agreement2">
						<textarea class="form-control" rows="5" name="content" required="required" placeholder="write an announcement.."></textarea><br />
						<button type="submit" class="btn btn-default col-md-12" name="Submit" value="Post">Post</button>
					  </div>
				  </form>
				</div>      
				<script>$(function() {$( "#tabs" ).tabs();});</script>
				<br>
				<br>
			  </div>
		
			<!-- Search form/button-->
			<div>
				<form class="form-search">
				  <div class="input-group">
					  <input type="text" class="form-control" placeholder="Search">
					  <span class="input-group-btn">
						  <button type="submit" class="btn btn-default"><i class="icon-search icon-large"></i> </button>
					  </span>
				  </div>
				</form>
			</div>
		
			<br>
			
			<!-- recent news-->
			<div class="well">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#recent" data-toggle="tab">Recent</a></li>
				  <li><a href="#archives" data-toggle="tab">Archives</a></li>
				  <li><a href="#comments" data-toggle="tab">Comments</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane active" id="recent"><span class="glyphicon glyphicon-search"></span>H... Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. </div>
				  <div class="tab-pane" id="archives">P...</div>
				  <div class="tab-pane" id="comments">M...</div>
				</div>
			</div>
			
		</div>
		<!-- end of 2nd column-->
	</div>
</section>
<!--End of container-->

<!--footer-->
<div id="footermainPan">
    <div id="footerPan">
    <ul>
	<li><a href="index.php">Home</a>| </li>
	<li><a href="aboutus.php">About us</a>| </li>
	<li><a href="support.php">Downloads</a>| </li>
	<li><a href="#">Books</a>| </li>
	<li><a href="http://crs.upv.edu.ph">University</a>| </li>
	<li><a href="#">Blog</a>| </li>
	<li><a href="#">Ideas</a>| </li>
	<li><a href="contactus.php">Contact us</a> </li>
    </ul>
	<p class="copyright">University of the Philippines-Research Information System. All rights reserved.</p>
	<ul class="yabsfooter">
  	<li>designed by:</li>
	<li>The RIS Group - UP ITDC</li>
    </ul>
    <script>
function viewthesource(){
window.location="view-source:"+window.location
}
</script>
    <div id="footerPanhtml"><a href="javascript:viewthesource()">HTML</a></div>
    <div id="footerPancss"><a href="style.css">css</a></div>
</div>
</div>








  <!--! KICKSTRAP FOOTER -->
   <div class="hidden"><h1>No Stylesheet Loaded</h1><p><strong>Could not load Kickstrap.</strong>There are <a href="http://getkickstrap.com/docs/1.2/troubleshooting/#lessjs-errors">several common reasons for this error.</a></p></div>
  <div id="push"></div></div> <!-- sf-wrapper -->

  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script>window.jQuery || document.write('<script src="Kickstrap/js/jquery-1.10.2.min.js"><\/script>');</script>
  <!-- Kickstrap CDN thanks to our friends at netDNA.com -->
  <script id="appList" src="//netdna.getkickstrap.com/1.3/Kickstrap/js/kickstrap.min.js"></script>
  <script>window.consoleLog || document.write('<script id="appList" src="Kickstrap/js/kickstrap.min.js"><\/script>')</script>
  <script>
   ks.ready(function() {
      // JavaScript placed here will run only once Kickstrap has loaded successfully.
      $.growl({
         title: 'Kickstrap!',
         text: 'If you see this message, this means that Kickstrap has been loaded successfully.'
      });
   });
  </script>
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <!--script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script-->
</body>
</html>
