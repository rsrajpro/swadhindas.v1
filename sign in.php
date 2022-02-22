<?php

$pagename = "signin";
include('header.php');

if($_SESSION["loggedin"] == "loggedin"){
    header("location: Dashboard.php");
    exit();
}
$database = new mysqli("localhost","root","","swadhindas.v1");
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
if(isset($_POST['login'])){
    $mail = $_POST['email'];
    $pass = md5($_POST['password']);

    $query = "SELECT * FROM `user` WHERE '$mail' = `email` or '$mail' = `username` and `password` = '$pass'";

    $rq = $database->query($query);

    $raa = mysqli_num_rows($rq);

    if($raa > 0){
        while($row = $rq->fetch_assoc()) {
            $fn = $row['fullname'];
            $em = $row['email'];
            $un = $row['username'];
            $idd = $row['id'];
        }
        $ee = "You are Loggdin";
        $_SESSION["loggedin"] = "loggedin";
        $_SESSION["fullname"] = $fn;
        $_SESSION["email"] = $em;
        $_SESSION["username"] = $un;
        $_SESSION["id"] = $idd;
        header("location: dashboard.php");
        exit();

    }
else{
    $ee = "Email or password is not correct";
}
}

?>
<style>
    .mw-50{
        width: 50%;
    }
    .border-top-1px{
        border-top: 1px solid black;
    }
    .g-c-1{
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
    .round-5{
        border-radius: 10px;
    }
    .shadow-c:hover {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
</style>
<center class="border-top-1px">   
<div class="container bg-light vh-100 pt-5">

<?php if (!empty($ee)){ ?>
        
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
     <div class="text-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
    </div>
        <strong class="me-auto">Swadhin - Notice</strong>
        <small class="text-muted">few mins ago</small>
      </div>
      <div class="toast-body">
      <b><?php if(!empty($ee)){ echo $ee;} ?></b>
      </div>
    </div>
            <?php }?>

    <div class="mw-50 pt-5">
     <form action="" method="post">
        <h1 class="mb-3 border-bottom text-uppercase">Login</h1>
        <input type="text" name="email" placeholder="Type Your Email or Username" class="shadow-c form-control shadow-none border-none p-3"><br>
        <input type="password" name="password" placeholder="Type Your Password" class="shadow-c form-control shadow-none border-none p-3"><br>
        <button name="login" class="btn g-c-1 round-5 form-control none-shadow shadow-none p-3 fs-5">Login</button><br><br>
        <p>New to Picoworkers? <a href="#">Create an account</a></p>
    </form>
    </div>
</div>
</center>