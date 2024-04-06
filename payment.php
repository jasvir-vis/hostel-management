<?php
session_start();
?>
<?php
include "connection.php";
if(isset($_POST['pay'])){
  $mail = $_SESSION['mail'];
  $total = $_POST['total'];
  $paid = $_POST['paiding'];
  $pending = $total-$paid;
  $date = date('m-d-Y');
  $mode = $_POST['mode'];
  $cardholder = $_POST['c-name'];
  $cardnumber = $_POST['c-number'];
  $update = $date;

  $payment = "insert into `payment` (`email`,`total_fees`,`paid_fees`,`pending`,`join-date`,`mode`,`cardholder`,`cardnumber`) 
  values('$mail','$total','$paid','$pending','$date','$mode','$cardholder','$cardnumber')";
  $my = mysqli_query($conn,$payment);

if($my){
  echo "<script>alert('Payment successffull');
  window.location.href = 'payment-reciept.php';
  </script>";

}
else{
  echo "<script>alert('Technical error');</script>";
  echo $my;

}

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
    <input type="submit" name="logout" value="Logout" class="btn btn-dark px-3 text-white">
  </div>
  </div>
</nav>
<div class="burger d-lg-none">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3>Payment Form</h3>
              </div>
            </div>
          </div>
           <?php
           include "connection.php";
           $data = "SELECT * FROM `fees_structure` where room ='{$_SESSION['type']}' and room_type='{$_SESSION['condition']}'";
           $query = mysqli_query($conn,$data);
           while($row = mysqli_fetch_assoc($query)){
           ?>
          <form action="" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                <label for="email" class="form-label">Fees in month</label>
                <input type="text" class="form-control" name="fname" placeholder="" value="<?php echo $row['per_month'];?>" readonly>
                </div>
               <?php
               $new = "SELECT * from `book_hostel` where email = '{$_SESSION['mail']}'";
               $q = mysqli_query($conn,$new);
               while($jas = mysqli_fetch_assoc($q)){
               ?>

                
                <div class="col-12">
                <label for="email" class="form-label">Total fees<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="total" placeholder="" value="<?php echo ($row['per_month'] * $jas['duration'])+ 1000; ?>">

                <input type="hidden" name='new' value="<?php echo $jas['email']; ?>" >
                </div>
                <?php
                }
                ?>

                <div class="col-12">
                <label for="email" class="form-label">Current payment (above 5000)</label>
                <input type="number" class="form-control" name="paiding" min="5000" placeholder="" required>
                </div>
                
                <div class="col-12">
                <label for="email" class="form-label">Payment By</label>
                <select name="mode" id="mode" onchange="jasvir()" class="form-control">
                    <option>Select here</option>
                    <option>Cash</option>
                    <option>cheque</option>
                    <option>Credit/Debit/Visa/Rupay-card</option>
                    <option>UPI-Gpay/Paytm/Phone-pay</option>
                </select>
                </div>

                <div class="col-12 online" style="display: none;">
                 <span class="text-danger p-3"><b>Scan QR code</b></span><img src="hostel-image/qrcode.png" alt="" height="200" width="200">
                </div>

                <div class="col-12 t-card border rounded p-3 bg-info" style="display: none;">
                <div class="row">
                <div class="col-12">
                <label for="email" class="form-label">Card holder name</label>
                <input type="text" class="form-control" name="c-name" placeholder="">
                </div>
                <div class="col-12">
                <label for="email" class="form-label">Card number</label>
                <input type="number" class="form-control" name="c-number" placeholder="">
                </div>
                <div class="col-md-6 col-12">
                <label for="email" class="form-label">Expire date</label>
                <input type="date" class="form-control" name="expire" placeholder="">
                </div>
                <div class="col-md-6 col-12">
                <label for="email" class="form-label">Cvv</label>
                <input type="number" min="100" max="999" class="form-control" name="cvv" placeholder="">
                </div>
                </div>
                </div>
                
              <div class="col-12">
                <div class="d-grid">
                  <input class="btn btn-lg btn-primary" type="submit" name="pay" value='Make Payment'/>
                </div>
              </div>
            </div>
          </form>
          <?php
           }
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
    let mode = document.getElementById("mode");
   function jasvir(){
    if(mode.value == "Credit/Debit/Visa/Rupay-card"){
      document.querySelector(".t-card").style.display = "block";
      document.querySelector(".online").style.display = "none";

    }
    else if(mode.value == "UPI-Gpay/Paytm/Phone-pay"){
      document.querySelector(".online").style.display = "block";
      document.querySelector(".t-card").style.display = "none";
    }
    else{
      document.querySelector(".t-card").style.display = "none";
      document.querySelector(".online").style.display = "none";
    }
  }
  jasvir();
    </script>
</body>
</html>

