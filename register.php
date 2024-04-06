<?php
include "connection.php";

if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];

  $data = "SELECT * from student_profile";
  $que = mysqli_query($conn,$data);
  if(mysqli_num_rows($que)>0){
    while($row = mysqli_fetch_assoc($que)){
      if($email = $row['email']){
        echo "<script>alert('already registered by this email');</script>";
      }
      else{
        $insert = "insert into `student_profile` (`first_name`,`last_name`,`dob`,`gender`,`mobile`,`email`,`password`) values('$fname','$lname','$dob','$gender','$mobile','$email','$password')";
  $sql = mysqli_query($conn,$insert);
 
  if($sql){
     echo "
    <script>alert('register successfully');
    window.location.href = 'student-section.php'; </script>  ";
    
  }
  else{
    echo "
    <script>alert('something error'); </script> ";

  }
      }
    }
  }

else{
  $insert = "insert into `student_profile` (`first_name`,`last_name`,`dob`,`gender`,`mobile`,`email`,`password`) values('$fname','$lname','$dob','$gender','$mobile','$email','$password')";
  $sql = mysqli_query($conn,$insert);
 
  if($sql){
     echo "
    <script>alert('register successfully');
    window.location.href = 'student-section.php'; </script> ";
  }
  else{
    echo "
    <script>alert('something error'); </script> ";

  }
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
    <a href="register.php">Apply Now</a>
  </div>
  </div>
</nav>
<div class="burger d-lg-none">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

<div class="container mb-5 p-2">

<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3>Registration form</h3>
              </div>
            </div>
          </div>
          <form action="" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-md-6">
                <label for="email" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="fname" placeholder="first name" required>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lname" placeholder="last name" required>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Date of birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="dob" placeholder="" required>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Gender <span class="text-danger">*</span></label>
                <select name="gender" id="gender" class="form-control">
                    <option>Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
                </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
              </div>
              <div class="col-12">
              <label for="email" class="form-label">Mobile<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="mobile" placeholder="Mobile" required>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                  <label class="form-check-label text-secondary" for="remember_me">
                    Keep me logged in
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <input class="btn btn-lg btn-primary" type="submit" name="register" value='Register'/>
                </div>
              </div>
            </div>
          </form>
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
</body>
</html>