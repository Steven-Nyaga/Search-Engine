<?php
include 'connection.php'
?>
<?php
    session_start();

    if(isset($_POST["company"])){
    $sql = "select * from company";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $_SESSION['id'] = $userrow['cID'];
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$_SESSION['id'];
    $cat=$userrow['cartegory'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$cat</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      <td><a href='delete.php?id=$id'><input class='btn btn-primary' type='submit' value='Delete' class='delete' name='delete'></a></td>  
    </tr>";
       
    }
    }
    }

    if(isset($_POST["users"])){
    $sql = "select * from for_user";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['username'];
    $motto=$userrow['passsword'];
    $contact=$userrow['gender'];
    $site=$userrow['email'];
        
        
        echo "<tr>
      <th scope='row'></th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$site</td>
      <td><a href='delete1.php?id=$Cname'><input class='btn btn-primary' type='submit' value='Delete' class='delete' name='delete'></a></td>  
    </tr>";
       
    }
    }
    }


    if(isset($_POST["search1"])){
    $text=$_POST['searchField1'];
    $sql = "select * from company where name LIKE '%$text%'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
     $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
        
        
        echo "<tr>
      <th scope='row'></th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$site</td>
      <td><a href='delete1.php?id=$Cname'><input class='btn btn-primary' type='submit' value='Delete' class='delete' name='delete'></a></td>  
    </tr>";
    
    }
    }
    }

?>