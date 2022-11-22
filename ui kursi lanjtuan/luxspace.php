<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="luxcss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="advanced.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <title>Lux Space</title>
</head>

<body >
<nav style="background-color:white;" class=" p-3 navbar navbar-white bg-white justify-content-between">
<div class="ml-5">
  <img src="assets/logo.png" alt="">
</div>

<div class="d-flex mr-5">
    <a class="nav-link text-dark" href="#">Showcase</a>
    <a class="nav-link text-dark" href="#">Catalog</a>
    <a class="nav-link text-dark" href="#">Delivery</a>
    <a class="nav-link text-dark" href="#">Rewards</a>
    <img style="width:30px;height:30px;" src="assets/cart-icon2.png" alt="">
  </div>
</nav>

<div class="d-flex p-4" style="background-color:#f4f4f4;">
    <a class="nav-link text-dark" href="#">Home /</a> 
    <a class="nav-link text-dark" href="#">Office Room /</a>
    <a class="nav-link text-dark" href="#">Details /</a>
    <a class="nav-link text-dark" href="shipping.php">Shipping /</a>
</div> 

<div class="alert">
    <div class="alert alert-warning alert-dismissible fade show d-none" id="alert" role="alert">
    <p id="alerttext"></p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>

<div class="bungkus" style="background-color:white;"> 
    <div class="sideitem">
    <div><img class="border border-light;" src="assets/side-3.png" alt=""></div>
    <div><img src="assets/side-1.png" alt=""></div>
    <div><img src="assets/side-2.png" alt=""></div>
    <div><img src="assets/side-3.png" alt=""></div>
    <div><img src="assets/side-1.png" alt=""></div>
    </div>

<div class="miditem" >
    <div><img src="assets/chair.png" style="width:90%;" id="main" alt=""></div>
</div>

<div class="rightitem">
    <h1 id="tulisan">Chair Thatty</h1>
    <h3>IDR. 12.000.000</h3>
    <a href="shipping.php"><button class="cart p-2"><img style="width:30px;height:30px;" 
    src="assets/cart-icon2.png"> &nbsp;Add To Cart</button></a>
    <hr width="370px" />
    <b>About The Product :</b>
    <pre > 

Tailored to a level of perfection synonymous
with that of a Savile Row suit and with
understated quality in the detail, Jetty has been
influenced by timeless 1950s style.

Providing a subtle nod to the past, Jetty also 
provides a perfect solution for the way we
work today. A comprehensive product family,
Jetty features a variety of elegant chairs and
sofas.
    </pre>
</div>
</div>

<div style="background-color:#f4f4f4;">
<br><br>
<div class="choice-chair">
    <h4>Complete Your Room</h4>
    <h4>With What We Designed</h4>
</div>

<div class="aa" id="gambar">
<div class="card" style="width: 18rem; border-radius:30px; margin-top:3%">
  
  <img class="card-img-top" id="var1" style="width:90%; margin:15px; border-radius:30px; " src="assets/chair-4.png" alt="Card image cap">
  <div class="card-body">
      <center>
    <p class="card-text"><b>Cangkir Mauttie</b></p>
    <p>IDR. 89.300.000</p>
</center>
  </div>
  </div>

  <div class="card" style="width: 18rem; border-radius:30px; margin-top:3%">
  <img class="card-img-top" style="width:90%; margin:15px; border-radius:30px; " src="assets/chair-3.png" alt="Card image cap">
  <div class="card-body">
      <center>
    <p id="judulkursi" class="card-text"><b>Saman Kakka</b></p>
    <p>IDR. 14.500.000</p>
</center>
  </div>
  </div>

  <div class="card" style="width: 18rem; border-radius:30px; margin-top:3%">
  <img class="card-img-top" style="width:90%; margin:15px; border-radius:30px; " src="assets/chair-2.png" alt="Card image cap">
  <div class="card-body">
      <center>
    <p class="card-text"><b>Lino Dino</b></p>
    <p>IDR. 22.000.000</p>
</center>
  </div>
  </div>

  <div class="card" style="width: 18rem; border-radius:30px; margin-top:3%">
  <img class="card-img-top" style="width:90%; margin:15px; border-radius:30px; " src="assets/chair-1.png" alt="Card image cap">
  <div class="card-body">
      <center>
    <p class="card-text"><b>Syail Ammeno</b></p>
    <p>IDR. 12.000.000</p>
</center>
  </div>
</div>
</div>
</div>


  <div class="end" style="background-color:white">
    <center>
    <img src="assets/logo.png" alt="" style="margin-top:5%"> </center>

    <div class="footer">
    <div>
      <h5><b>Overview</b></h5>
      <p>Shipping</p>
      <p>Refund</p>
      <p>Promotion</p>
    </div>

    <div>
    <h5><b>Company</b></h5>
      <p>About</p>
      <p>Career</p>
      <p>Contact Us</p>
    </div>

    <div>
    <h5><b>Explore</b></h5>
      <p>Terms & Conds</p>
      <p>Privacy Policy</p>
      <p>For Developer</p>
    </div>

    <div>
    <h5><b>Special Letter</b></h5>
      <input type="text" id="inputnama" placeholder=" Your Email Address">
      <button type="submit" id="sendemail" style="background-color:pink; height:29px;"><img src="assets/tele-icon.png" alt=""></button>
      <!-- <button type="submit" id="sendemail">send</button> -->
    </div>
</div>

<div class="copyright">

<center><h5 class="p-3" style="margin-top:5%"><hr />
Copyright 2022 • All Rights Reserved LuxSpace Fortuna Dwi</h5></center>
</div>

</html>