<?php
include 'connection.php'
?>
<?php
    if(isset($_POST["all"])){
    $sql = "select * from company";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }

if(isset($_POST["agri"])){
    $sql = "select * from company where cartegory='agri'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }
if(isset($_POST["man"])){
    $sql = "select * from company where cartegory='man'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }
if(isset($_POST["bio"])){
    $sql = "select * from company where cartegory='Bio Technology'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }

if(isset($_POST["trans"])){
    $sql = "select * from company where cartegory='trans'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }

if(isset($_POST["cat"])){
    $sql = "select * from company where cartegory='cat'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }





if(isset($_POST["it"])){
    $sql = "select * from company where cartegory='IT'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
    </tr>";
    
    }
    }
    }



if(isset($_POST["search"])){
    $text=$_POST['searchField'];
    $sql = "select * from company where tags LIKE '%$text%'";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)>0){
    while($userrow = mysqli_fetch_array($result)) {
    $Cname=$userrow['name'];
    $motto=$userrow['motto'];
    $contact=$userrow['contact'];
    $site=$userrow['website'];
    $id=$userrow['cID'];
        
        
        echo "<tr>
      <th scope='row'>$id</th>
      <td>$Cname</td>
      <td>$motto</td>
      <td>$contact</td>
      <td><a class='btn btn-primary' href='$site' role='button'>Website</a></td>
      
      
    </tr>";
    
    }
    }
    }



?>