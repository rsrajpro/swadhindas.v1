<?php
session_start();

if(empty($_SESSION["loggedin"])){
  $_SESSION["loggedin"] = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagename; ?> - Swadhin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <?php if($pagename == "Home"){ ?>
    
    <?php } ?>
    
    
    
    
    
    <style>
        .border-none{
            border:none;
        }
    </style>
</head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>SWADHIN</b> <span class="badge bg-danger">New</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link <?php if($pagename == 'Home'){ echo 'active'; } ?>" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($pagename == 'About'){ echo 'active'; } ?>" href="#">About</a>
                </li>
            </ul>
          </div>
          <?php if($_SESSION["loggedin"] !== "loggedin"){?>
          <div class=" collapse navbar-collapse navbar-nav mb-2 mb-lg-0" id="navbarSupportedContent">
                <li class="nav-item">
                  <a class="nav-link" href="./sign in.php"><button class="btn <?php if($pagename == 'signin'){ echo 'btn-primary';} else {echo 'btn-outline-primary';} ?> ">Sign In</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./sign up.php"><button class="btn <?php if($pagename == 'signup'){ echo 'btn-dark ';} else {echo 'btn-outline-dark';} ?>">Sign Up</button></a>
                </li>
          </div>
          <?php }?>
          
          <?php if(!empty($_SESSION["fullname"])){?>
              <div class="dropdown">
                <button class="btn shadow-none dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="badge badge-succus bg-success"><?php echo $_SESSION["fullname"]; ?></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark me-5" aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item" href="./dashboard.php">Dashboard</a></li>
                  <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="./account.php">Account</a></li>
                  <li><a class="dropdown-item" href="./xubisoft.html">xubisoft</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                </ul>
              </div>
        <?php } ?>
        </div>
      </nav>
    </header>