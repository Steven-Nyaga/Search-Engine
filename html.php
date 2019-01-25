<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2>Select from Categories</h2>
    <!-- Here is the navigation bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="navbarColor02">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="page.html">Home <span class="sr-only"></span></a>
         </li>
         <li class="nav-item">
           
           <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopu="true" aria-expanded="false">
               Categories
               </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <form method="post" action="">
               <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="all" class="all" type="submit">All</button>
               <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="agri" class="agri" type="submit">Agriculture</button>
               <button style="margin:0; padding:0; width:200px;"  class="btn btn-secondary my-2 my-sm-0" name="it" class="it" type="submit">Information Technology</button>
               <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="man" class="man" type="submit">Manufacturing</button>
               <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="bio" class="bio" type="submit">Bio Technology</button>
               <button  style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="trans" class="trans" type="submit">>Transport</button>
               <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="cat" class="cat" type="submit">Cartering</button>
               </form>
           </div>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contact.html">Contact info</a>
         </li>
           <li class="nav-item">
           <a class="nav-link" href="index.html">Logout</a>
         </li>
       </ul>
       <form method="post" action="" class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="text" name="searchField" placeholder="Search">
         <button class="btn btn-secondary my-2 my-sm-0" name="search" type="submit">Search</button>
       </form>
     </div>
   </nav>
        
        
    <!-- Here is the table -->
    <div>
    <?php include'htmlH.php' ?>
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Company</th>
      <th scope="col">Motto</th>
      <th scope="col">Contact info</th>
      <th scope="col"></th>
    </tr>
    </thead>
        <tbody>
            <?php include'display.php' ?>
        </tbody>
        </table>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
    </body>
</html>