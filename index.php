<?php
$pagename = "Home";
include('header.php');

?>
<style>
      .bg-c{
        background-color: rgb(236, 76, 13);
        height: 100%;
        margin: 10px ;
        border: 2px solid white;
        border-radius: 25px;
        padding: 10px 15px 0px 15px;
      }
	  .home_banner_area {
      z-index: 1;
      background: url(../img/home-banner.jpg) no-repeat scroll center center;
      background-size: cover;
    }
    </style>
    <main class="bg-secondary  pt-1 text-white pb-2">
     <div class="container">
      <div class="bg-c">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <h1>Our Web Sites</h1>
          </div>
          <div class="col">
          <div class="col"></div>
          <h1>Our Website</h1>
          </div>
        </div>
      </div>
     </div>
      <div class="container bg-warning pt-5">
        <h1 class="text-center pb-5">Amazing Features</h1>
      </div>
    </main>