<?php
include 'connection.php'
?>
<?php
    if(isset($_POST["submit"])){
        echo "success";
        $cname = $_POST['cname'];
        $cmotto = $_POST['cmotto'];
        $contact = $_POST['contact'];
        $category = $_POST['category'];
        $tag = $_POST['tag'];
        $web = $_POST['web'];
        $id=$_POST['cID'];
        
        $sql = "INSERT INTO company  VALUES ($id,'$cname','$cmotto','$contact','$category','$tag','$web' )";
        if($mysqli->query($sql) === true){
           echo "Records inserted successfully.";
        } else{
           echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
        }
        
    }
?>