<?php
$pagename = "Profile";
include('header.php');

if ($_SESSION["loggedin"] !== "loggedin"){
    header("location: sign in.php");
    exit();
}

?>
<style>
        .c-border{
            border-bottom: 3px dotted white;
            padding-bottom: 10px;
        }
        </style>
              <div class="container-fluid bg-primary text-white pt-4 pb-5 text-center">
                <h1 class="c-border d-inline text-uppercase fw-bold">Profile</h1>
              </div>
              <div class="container">
                  <div><img src="./img/cov.png" alt="" width="100%" class="img-fluid"></div>
                  <div class="row border-bottom pb-2">
                      <div class="col-md-6"><img src="./img/1.png" alt="" class="img-fluid" width="90px"></div>
                      <div class="col-md-6 align-self-center text-uppercase "><h2>USER PROFILE</h2></div>
                  </div>
                  <nav class="navbar shadow navbar-expand-md navbar-light bg-light mt-2 mb-3">
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Post</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Photo</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Web list</a>
                        </li>
                    </ul>
                    </div>
                </nav>

                <div class="row mb-5">
                    <div class="col-md-6 mt-2">
                        <label for="fullname">Full Name</label>
                        <input type="text" value="<?php echo $_SESSION["fullname"];?>" class="form-control" name="fullname">
                    </div>
                    <div class="col-md-6 mt-2"><label for="username">username</label>
                        <input type="text" value="<?php echo $_SESSION["username"];?>" class="form-control" name="username">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="fullname">Email</label>
                        <input type="text" value="<?php echo $_SESSION["email"];?>" class="form-control" name="email">
                    </div>
                    <div class="col-md-6 mt-2"><label for="username">ID</label>
                        <input type="text" value="<?php echo $_SESSION["id"];?>" class="form-control" name="id" disabled>
                    </div>
                    <div class="col-md-4 mt-2"></div>
                    <div class="col-md-4 mt-2"><center><Button class="btn btn-dark w-100 mt-3">Save</Button></center></div>
                    <div class="col-md-4 mt-2"></div>
                      
                      
                  </div>
              </div>