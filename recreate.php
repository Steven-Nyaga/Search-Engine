<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </head>
    <body>
        
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ADMINISTRATOR</a>
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
                   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopu="true"  aria-expanded="false">
                   Options
                   </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <form method="post" action="">
                   <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="company" class="company" type="submit">Companies</button>
                   <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="users" class="users" type="submit">Users</button>
                   </form>
               </div>
               </div>
             </li>
               <li class="nav-item active">
               <a class="nav-link" href="index.html">Logout <span class="sr-only"></span></a>
             </li>
           </ul>
           <form method="post" action="" class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="text" name="searchField1" placeholder="Search">
             <button class="btn btn-secondary my-2 my-sm-0" name="search1" type="submit">Search</button>
           </form>
         </div>
        </nav>
        <!--display of the table has been done here-->
        <div>
        <?php include'htmlH.php' ?>
        <table class="table table-hover">
        <thead>
        <?php include'title.php' ?>
        </thead>
            <tbody>
               <?php include'redisplay.php' ?>
               
            </tbody>
        </table>
        </div>
        <?php include 'companyDis.php' ?>

        <!--script tags-->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>