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
                    <a style="margin:0; padding:0; width:200px;" class="btn btn-secondary" href="http://localhost/lg2/recreate.php" role="button">Companies</a>
                   <button style="margin:0; padding:0; width:200px;" class="btn btn-secondary my-2 my-sm-0" name="users" class="users" type="submit">Users</button>
                   </form>
               </div>
               </div>
             </li>
           </ul>
           <form method="post" action="" class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="text" name="searchField" placeholder="Search">
             <button class="btn btn-secondary my-2 my-sm-0" name="search" type="submit">Search</button>
           </form>
         </div>
        </nav>
        <!--display of the addition form has been done here-->
        <form method="post" action="">
            <div class="alert alert-info" role="alert">
               Fill in all the spaces to continue!
            </div>
            <hr>
            <div class="form-group">
             <label for="exampleInputEmail1">Company ID</label>
             <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Company name"  name="cID" class="cID">
           </div>
            <hr>
           <div class="form-group">
             <label for="exampleInputEmail1">Company name</label>
             <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Company name"  name="cname" class="cname">
             <small id="emailHelp" class="form-text text-muted">Use the official company name.</small>
           </div>
            <hr>
           <div class="form-group">
              <label for="exampleInputPassword1">Company motto</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motto"  name="cmotto" class="cmotto">
           </div>
            <hr>
             <div class="form-group">
              <label for="exampleInputPassword1">Contact info</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact information"  name="contact" class="contact">
           </div>
            <hr>
             <div class="form-group">
              <label for="exampleInputPassword1">Category</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category"  name="category" class="category">
           </div>
            <hr>
             <div class="form-group">
              <label for="exampleInputPassword1">Tags</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tags"  name="tag" class="tag">
           </div>
            <hr>
             <div class="form-group">
              <label for="exampleInputPassword1">Website</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Website"  name="web" class="web">
           </div>
            <hr>
            <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
             Submit
           </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to add a new company to the database?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"  name="submit" class="submit">Okay</button>
                </div>
               </div>
             </div>
          </div>
        </form>
        
        <!--short display-->
        <?php include 'addHandle.php' ?>
        
        <!--script tags-->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>