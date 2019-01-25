<?php
if(isset($_POST["company"])){
echo " <tr>
          <th scope='col'></th>
          <th scope='col'>Company</th>
          <th scope='col'>Motto</th>
          <th scope='col'>category</th>
          <th scope='col'>Contact info</th>
          <th scope='col'></th>
          <th scope='col'></th>
        </tr>";
}
if(isset($_POST["users"])){
    echo " <tr>
          <th scope='col'></th>
          <th scope='col'>Name</th>
          <th scope='col'>Password</th>
          <th scope='col'>email</th>
          <th scope='col'></th>
        </tr>";
}
?>