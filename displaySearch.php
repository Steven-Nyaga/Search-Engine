<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
     <!-- Here is the navigation bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="navbarColor02">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="page.html">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           
           <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopu="true" aria-expanded="false">
               Categories
               </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
               <a class="dropdown-item" href="#">Something else here</a>
           </div>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Contact info</a>
         </li>
       </ul>
       <form method="post" action=""class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="text" placeholder="Search">
         <button class="btn btn-secondary my-2 my-sm-0" name='search' type="submit">Search</button>
       </form>
     </div>
   </nav>
    <!--The display will be done here-->
        
    <?php include 'search.php' ?>
        
    </body>
</html>