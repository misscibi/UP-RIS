<?php
require_once 'dbconnection.php';
require_once 'admin_class.php';

function head($page,$extension){
    $host = $_SERVER['HTTP_HOST'];
    $folder = rtrim(dirname($_SERVER['PHP_SELF']),'/\\'); 
    header ("Location:http://$host$folder/$page.php$extension");
}

function redirect_to_welcome(){
    head(index,""); 
    exit();
}

function logdata($data,$arg){
 date_default_timezone_set('Asia/Manila');
$my_file = "log ".date('m-d-Y',time()).'.txt';

if($arg!=null){
 $uid=$arg;   
 dbconnection::getConnection();

$query=mysql_query("SELECT firstname,lastname FROM `userinfo` WHERE userid=$uid")  or  die(mysql_error());    
$row = mysql_fetch_assoc($query);

$handle = fopen('./logs/'.$my_file, 'a') or die('Cannot open file:  '.$my_file);
fwrite($handle, 'User '.$row['firstname']." ".$row['lastname'].$data.' at '.date('g:i A'). "\r\n");
}else{
    
$handle = fopen('./logs/'.$my_file, 'a') or die('Cannot open file:  '.$my_file);
fwrite($handle, "New user".$data.' at '.date('g:i A'). "\r\n");
    
    
}


}


/*the top pane, site banner, and navigation bar*/
function top($where){ echo " <head> 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
    <title>UP Research Information System</title>
    <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />
	<link href=\"bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
	<script src=\"bootstrap/js/bootstrap.min.js\" ></script>
	<script src=\"bootstrap/js/bootstrap.js\" ></script>
	
    <link rel=\"stylesheet\" href=\"jquery.ui.tabs.css\" /> 
    <link rel=\"stylesheet\" href=\"demo.css\" /> 
    <link rel=\"shortcut icon\" href=\"images/ris.ico\"  type=\"image/x-icon\" />
    <div id=\"headerimg\"><a href=\"index.php\"><img id=\"hdimg\" src=\"images/yab.png\" position=\"absolute\"></a></div>
    </head>
    <body>
	
    <div id=\"topPan\">
			
    <div id=\"topContactPan\">
    </div>
        <div id=\"topMenuPan\">
            <ul>   
		<div class = \"btn-group\" >
		<button class=\"btn\"><a href=\"index.php\">Home</a></button>
		<button class=\"btn\"><a href=\"support.php\">Downloads</a></button>
		<button class=\"btn\"><a href=\"grants.php\">Grants</a></button>
		<button class=\"btn\"><a href=\"adviserprofile.php\">Adviser</a></button>
		<button class=\"btn\"><a href=\"reviewerprofile.php\">Reviewer</a></button>            
        <button class=\"btn\"><a href= \"profile.php\"> Researcher</a></button>
		<button class=\"btn\" ><a href= \"register.php\"> Signup</a></button>
            </ul>
         </div>
        </div> "    ;}

/*the bottom pane or footer*/
$bottom= '<div id="footermainPan">
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
</body>
</html>'; 
?>