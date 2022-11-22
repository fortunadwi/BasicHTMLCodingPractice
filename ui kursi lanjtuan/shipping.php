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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title>Lux Space</title>
</head>

<body>
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
    <a class="nav-link text-dark" href="luxspace.php">Details /</a>
    <a class="nav-link text-dark" href="#"><b>Shipping /</b></b></a>
    </div>

<div class="alert">
    <center>
    <div class="alert alert-dismissible fade show d-none" id="getnama" role="alert">

    <h1 id="alerttext"></h1>
    <p id="judul"></p>

    <a href="luxspace.php"><button type="button" class="btn btn-outline-danger">Tutup</button></a> </center>
</div>
</div>

<div class="bungkus" style="background-color:white;">

<div class="p-4 mt-5 mb-5 border border-danger rounded" id="shipform" style="width: fit-content; margin: auto;">
        <form>
            <h1 class="text-center mb-4">Shipping Form</h1>
            <div class="form-row d-flex" style="">

              <div class="col-md-6 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter Your First name" value="Muhamad" required>
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Phone number</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Enter Phone number" required>
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Last name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter Your Last name" value="Fortuna" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">City</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Enter City" required>
                </div>
              </div>
              
              <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Email Address</label>
                      <input type="email" class="form-control" id="validationDefault01" placeholder="Enter Email" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Postal Code</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder="Enter Postal Code" value="" required>
                    </div>
                    </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                      <label for="">Address</label>
                      <textarea id="alamat" style="overflow:auto;" rows="3" cols="40" value="Bandung" required> </textarea>
                    </div>
                </div>

                <div class="d-flex" style="justify-content:center" >
                <button type="submit" id="submitdata" class="cart p-2">Submit</button>
                </div>
                    
                </form>
                
            </div>
        </div>



  <div class="end" style="background-color:#f4f4f4;">
    <center>
    <img src="assets/logo.png" alt="" style="margin-top:5%"> </center>

    <div class="footer" >
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
      <input type="text" placeholder=" Your Email Address">
      <button style="background-color:pink; height:29px;"><img src="assets/tele-icon.png" alt=""></button>
    </div>
</div>

<div class="copyright">

<center><h5 class="p-3" style="margin-top:5%"><hr />
Copyright 2022 • All Rights Reserved LuxSpace Fortuna Dwi</h5></center>
</div>

</html>