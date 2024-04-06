<?php
session_start();

include "connection.php";
$jas = "SELECT * from `payment` where email='{$_SESSION['mail']}'";
$vir = mysqli_query($conn,$jas);
$num = mysqli_num_rows($vir);
if($num > 0){
}
else{
  echo "<script> window.location.href = 'payment.php'; </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title></title> 
</head>
<style>
  body{
    font-family: serif;
  }

  .r{
    font-size: larger;
  }
</style>
<body>
    <!-- navbar -->
<nav class="navbar d-md-flex justify-content-between align-items-center image" id="top">
  <div class="logo d-md-flex align-item-center my-md-0 my-3 mx-md-0 mx-auto">
    <img src="hostel-image/logo.jpg" alt="">
    <h5><b>|~|OSTEL</b></h5>
  </div>
  <div class="hi w-75 d-lg-flex justify-content-around" id="jas">
  <div class="link">
  <ul class="nav-links mt-lg-0 mt-md-3 list-unstyled d-md-flex">
    <li class="mx-lg-3 mx-1"><a href="index.php">Home</a></li>
    <li class="mx-lg-3 mx-1"><a href="mess.php">Mess Schedule</a></li>
    <li class="mx-lg-3 mx-1"><a href="Fees structure.php">Fees Structure</a></li>
    <li class="mx-lg-3 mx-1"><a href="student-section.php">Student section</a></li>
    <li class="mx-lg-3 mx-1"><a href="gallery.php">Gallery</a></li>
    <li class="mx-lg-3 mx-1"><a href="about.php">About</a></li>
  </ul>
  </div>
  <div class="cta-btn my-md-0 my-3 mx-md-0 mx-auto">
    <a href="register.php">Apply Now</a>
  </div>
  </div>
</nav>
<div class="burger d-lg-none">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

<div class="container mb-5 p-2 print" id="print-content">
 <?php
 include "connection.php";
 $make = rand(10000,99999);
 $data = "SELECT * FROM `payment` where email = '{$_SESSION['mail']}'";
 $qq = mysqli_query($conn,$data);

 while($row = mysqli_fetch_assoc($qq)){
 ?>
 <div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center pb-4 text-info"><img src="hostel-image/logo.jpg" height="80" width="80" alt=""> |~|OSTEL</h1>
              <div class="mb-5">
                <h3>Payment Reciept</h3>
                <h5 class="text-secondary">Date : <?php echo $row['update']; ?></h5>
                <hr>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-12">
                <span class="r text-black"><b>Receipt number :</b></span> <span class="r text-secondary"><?php echo $make; ?></span>
                <br><br>
                <span class="r text-black"><b>Name :</b></span> <span class="r text-secondary"><?php echo $row['cardholder'] ?></span>
                <br><br>
                <span class="r text-black"><b>Email :</b></span> <span class="r text-secondary"><?php echo $row['email']; ?></span>
                <br><br>
                <span class="r text-black"><b>Total Fees :</b></span> <span class="r text-secondary"><?php echo $row['total_fees']; ?> /-</span>
                <br><br>
                <span class="r text-black"><b>Paid Fees :</b></span> <span class="r text-secondary"><?php echo $row['paid_fees']; ?> /-</span>
                <br><br>
                <span class="r text-black"><b>Status :</b></span> <span class="r text-danger">Successfull.</span>
                <br><br>
                <span class="text-secondary">Thanks for choosing hostel.</span>
                <div class="py-4">
    <button class="btn btn-dark text-white" onclick="printDiv('print-content')">PRINT<i class="fa fa-x fa-print"></i></button>
    <div class="d-flex justify-content-center">
             <a href="new-payment.php"> <button class="btn btn-danger">Make new payment</button></a>
            </div>

  </div>
                <br><br>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

 <?php
 }
 ?>
</div>


<!-- footer -->

<div class="container-fluid bg-black text-white">
  <footer class="p-2">
    <div class="d-flex justify-content-center mb-4">
    <ul class="list-unstyled d-flex w-50 justify-content-around my-3">
      <li class="ms-3"><a class="link-body-emphasis" href="#""><i class="fa fa-2x fa-facebook text-white"></i></a></li>
      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa fa-2x fa-instagram text-white"></i></a></li>
      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa fa-2x fa-youtube text-white"></i></a></li>
      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa fa-2x fa-envelope text-white"></i></a></li>
    </ul>
    </div>
    <a href="#top"><button class="btn btn-sm btn-danger mb-4">back to top</button></a>
    <div class="row">    
      <div class="col-6 col-md-2 mb-3">
        <h5 class="border-bottom pb-2">Navbar links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-warning">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-warning">About</a></li>
          <li class="nav-item mb-2"><a href="Fees structure.php" class="nav-link p-0 text-warning">Fees structure</a></li>
          <li class="nav-item mb-2"><a href="gallery.php" class="nav-link p-0 text-warning">gallery</a></li>
          <li class="nav-item mb-2"><a href="mess.php" class="nav-link p-0 text-warning">mess</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="border-bottom pb-2">Important form</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Hostel accommodation</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Student Declaration</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Mess rebate </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Visitor registration form</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Medical Reimbursement</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="border-bottom pb-2">Address</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><span class="nav-link p-0 text-warning">
            Mukerian , PO-Mukerian <br> Distt - Hoshiarpur <br>
          State - Punjab(144211) 
        <br>
      <br> Email : HOstel12423@gmail.com
    <br>Phone : +91 135453154</span></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Share your feedback here</h5>
          <div class="d-flex flex-column w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address" fdprocessedid="aohms7">
            <label for="newsletter2" class="visually-hidden">Enter your feedback</label>
            <textarea name="text" id="" cols="30" rows="4" class="form-control" placeholder="Enter your feedback"></textarea>
            <button class="btn btn-danger w-25" type="button" fdprocessedid="6y69j">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="border-top">
      <p class="text-center p-2">Design with love by Jasvir singh | ©2024 |~|OSTEL, Inc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All rights reserved.</p>
    </div>
  </footer>
</div>

<script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"> </script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="style.js"></script>
    <script>
       function printDiv() {
        var printContents = document.getElementById('print-content').innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
    </script>
</body>
</html>