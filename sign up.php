<?php
$pagename = "signup";
include('header.php');

if ($_SESSION["loggedin"] == "loggedin"){
    header("location: dashboard.php");
    exit();
}
$database = new mysqli("localhost","root","","swadhindas.v1");

if(isset($_POST['signup'])){
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $phone = $_REQUEST['phone'];
    $password = md5($_REQUEST['password']);
    $repassword = md5($_REQUEST['repassword']);

    if($password !== $repassword){
        $ee = "Password Did Not Match";
    }
    else{
        $qu = "INSERT INTO `user`(`fullname`, `email`, `phone`, `username`, `password`) VALUES ('$fullname','$email','$phone','$username','$password')";
        $ex = $database->query($qu);
        if($ex == True){
            $ee = "Data Submit";
          }
          else{
            $ee = "Something Went wrong";
          }
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
</style>

<center class="border-top-1px">   
<div class="container bg-light pt-5">

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

    <div class="mw-50 mt-4">
     <form action="" method="post">
        <h1 class="mb-3 text text-uppercase border-bottom">Sign UP</h1>
        <input type="text" name="fullname" placeholder="Type Your Full Name*" class="form-control shadow-none border-none p-3" required><br>
        <input type="email" name="email" placeholder="Type Your Email*" class="form-control shadow-none border-none p-3" required><br>
        <input type="text" name="username" placeholder="Type Your Username*" class="form-control shadow-none border-none p-3" required><br>
        <input type="text" name="phone" placeholder="Type Your phone number" class="form-control shadow-none border-none p-3"><br>
        <input type="password" name="password" placeholder="Type Your Password*" class="form-control shadow-none border-none p-3" required><br>
        <input type="password" name="repassword" placeholder="Type Your Re-Password*" class="form-control shadow-none border-none p-3" required><br>
        <button name="signup" class="btn btn-success form-control none-shadow shadow-none p-3" id="liveToastBtn">SignUP</button><br><br>
        <p>Have an account? <a href="#">Create an account</a></p>
    </form>
    </div>
</div>
</center>



<!--<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <!--<img src="..." class="rounded me-2" alt="...">-->
      <!--<strong class="me-auto">Swadhin Das</strong>
      <small>Message</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<script src="https://getbootstrap.com/docs/5.0/assets/js/docs.min.js"></script>-->
