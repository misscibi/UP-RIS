<!DOCTYPE html>
<?php
require_once 'functions.php';
require_once 'login_class.php';
require_once 'admin_class.php';
top("home");
/*
$to = "jamie.anacleto@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);*/
?> <!-- loads the site banner and navigation bar -->

<div id="bodyPan">
       <div id="bodyRightPan">
     <?php
 
        if(isset($_SESSION['risid']) or isset($_SESSION['adminid'])or isset($_SESSION['reviewerid'])or isset($_SESSION['adviserid'])){ /*if user is logged in, displays welome (name) */
    ?>
        <div><h2 id="welcome"><span>Welcome! <br/></span></h2> <?php echo "<h2>".$_SESSION['name']."</h2>";?>
	<p id="index">View your <a href= <?php if(isset($_SESSION['risid'])){ echo "\"profile.php\"  ><span>Researcher Profile!</span> ";} 
                        else if (isset($_SESSION['adminid'])){ echo "\"adminindex.php\"><span>Admin Page!</span>  "; } 
                        else if (isset($_SESSION['reviewerid'])){ echo "\"reviewerprofile.php\"><span>Reviewer Profile!</span>  "; } 
                        else if (isset($_SESSION['adviserid'])){ echo "\"adviserprofile.php\"><span>Adviser Profile!</span>  "; } 
                        ?> </a></p>   
        </div>	   
 <?php 
 
		}else{ ?> <!--else if user is not logged in, displays the login now box-->
			<ul class= "nav nav-pills nav-stacked">
			<a class="btn" href = "login.php">Login</a>
			<a class="btn" href = "register.php">Create new account</a></ul>
        <?php } 
 ?> 
  </div></div>
    <div id="bodyy">
        <h2> Announcements</h2>
        <?php  admin_class::display_posts();?>
     
	
  </div>
 

<?php
 echo $bottom; ?> <!--loads the footer pan-->