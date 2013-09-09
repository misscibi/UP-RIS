<?php /*contains functions used by administrators*/
    require_once 'dbconnection.php'; 
     require_once 'functions.php'; 
    dbconnection::getConnection();  /*creates a database connection*/

    class admin_class {
        private static $instance = null;
        public static function getInstance(){
            if(self::$instance == null){
                self::$instance = new admin_class();
            }
        return self::$instance;
    }
    
    public static function post($header,$content){
       include_once('htmlpurifier/library/HTMLPurifier.auto.php');
       $config = HTMLPurifier_Config::createDefault();
       $config->set('HTML.Allowed', 'span');
       $config->set('HTML.Doctype', 'HTML 4.01 Transitional');

$filter = new HTMLPurifier($config);
$content = $filter->purify($content);     
$header = $filter->purify($header); 
$content=filter_var($content,FILTER_SANITIZE_MAGIC_QUOTES);
$header=filter_var($header,FILTER_SANITIZE_MAGIC_QUOTES);
$content=nl2br($content);
    mysql_query("INSERT INTO posts VALUES(0,'$header','$content',now())") or die("Error in posting:".mysql_error());
      
    }
    
     public static function display_posts(){
         
         $result=mysql_query("SELECT * FROM posts ORDER BY postid DESC LIMIT 10") or die(mysql_error());
         
          
while ($row = mysql_fetch_assoc($result)) {
    echo "<h2>".$row['header']."</h2>";
    echo "<p>".$row['content']."</p><hr>";
    
    
}
     }
     
       public static function isadmin(){ /*returns true if the the admin session is set, else retuns false*/
        if(isset($_SESSION['adminid'])){
            return true;
        }
        else{
            return false;
        }  
     
            
            
    }
public static function view_accounts($table){
        
$query2= mysql_query("SELECT * FROM $table  WHERE active=0") or  die(mysql_error()); 
if(mysql_num_rows($query2)){      
 echo '<table id="tabbedtable">';    
 echo "<tr>
<th>Name</th><th>Email</th><th>Field</th><th>Institute</th><th>Approve</th></tr>";
 
while ($row = mysql_fetch_assoc($query2)) {
$email=$row['email'];
echo "<tr><td>".$row['firstname']." ".$row['lastname']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".self::display_field($row['field'])."</td>";
echo "<td>".$row['ins']."</td>";
echo "<td>"."<a href=\"approve.php?e=$email&t=$table\">Approve</a>"."</td></tr>";

}
echo '</table>';
}}
 
public static function display_field($field){ 
     
     switch ($field){
     case 'cmsc': return "Computer Science"; break;
     case 'qphy': return "Quantum Physics"; break;
     case 'agr': return "Agriculture"; break;
     case 'arch': return "Architecture"; break;
     case 'bio': return "Biology"; break;
     case 'cme': return "Computer Engineering"; break;
     case 'phi': return "Philosophy"; break;
     case 'fs': return "Food Science"; break;
     case 'envs': return "Enviornmental Science"; break;
     case 'mcb': return "Microbiology"; break;
     case 'ch': return "Chemistry"; break;
              
     } 
    }

    
    }
?>