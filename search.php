<?php
include 'connection.php'
?>
<?php 
$output = '';
if(isset($_POST['search'])) {
 $searchq = $_POST['search'];
 $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
 $output = '';
 $query = mysqli_query($mysqli, "SELECT * FROM company WHERE tags LIKE '%$searchq%'") or die("could not search!");
 $count = mysqli_num_rows($query);
 if($count == 0){
  $output = 'There was no search results!';
 } else if($count > 0){
  while ($row = mysqli_fetch_array($query)) {
   $name= $row['name'];
   $motto = $row['motto'];
   $contact = $row['contact'];
   $output .='<div><p>'.$name.'  &nbsp&nbsp  '.$motto.' &nbsp &nbsp  '.$contact.'<br></p></div>'; 
      echo $output;
    
  }
     
 }
}
?>