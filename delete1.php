<?php
include 'connection.php'
?>
<?php
   $var=$_GET['id'];
   echo $var;
   $sql = "delete from for_user where username='$var'";
   if($mysqli->query($sql) === true){
       echo "Records inserted successfully.";
       header('Location: http://localhost/lg2/recreate.php');
   } else{
       echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
   }
   
?>