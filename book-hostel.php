<?php
session_start();
?>

<?php
include "connection.php";
$select = "SELECT * FROM `book_hostel` where email = '{$_SESSION['mail']}'";
$qqq = mysqli_query($conn,$select);
$number = mysqli_num_rows($qqq);
if($number === 1){
 echo "<script>window.location.href = 'room-reciept.php'; </script>";
}
else{
  echo "<script> window.location.href='book-hostel.php';</script>";
}

if(isset($_POST['submit'])){
  $id = $_POST['reg-id'];
  $type = $_POST['type'];
  $condition = $_POST['condition'];
  $duration = $_POST['duration'];
  $admission = $_POST['admission'];
  $house = $_POST['house'];
  $vill = $_POST['village'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $gname = $_POST['g-name'];
  $gr = $_POST['g-relation'];
  $gmob = $_POST['g-phone'];
  $email = $_POST['email'];
 
  $data = "SELECT * from book_hostel";
  $que = mysqli_query($conn,$data);
  if(mysqli_num_rows($que)>0){
    while($row = mysqli_fetch_assoc($que)){
      if($email = $row['email']){
        echo "<script>alert('Room already booked by this email'); 
        window.location.href = 'payment.php'; </script>";
      }
      else{
        $insert = "insert into `book_hostel`
   (`register_id`,`room_type`,`condition`,`duration`,`addmission`,`house`,`village`,`city`,`state`,`zip`,`guardian`,`grelation`,`gmobile`,`email`) values('$id','$type','$condition','$duration','$admission','$house','$vill','$city','$state','$zip','$gname','$gr','$gmob','$email')
   ";
   $queryy = mysqli_query($conn,$insert);

   if($queryy){
    echo "<script>alert('Thanks for book your room'); 
    window.location.href = 'payment.php'; </script>";
    $_SESSION['type'] = $type;
    $_SESSION['condition'] = $condition;
    $_SESSION['duration'] = $duration;
   }
   else{
    echo "<script>alert('something error'); </script>";

   }

      }
    }
  }

else{
  $insert = "insert into `book_hostel`
  (`register_id`,`room_type`,`condition`,`duration`,`addmission`,`house`,`village`,`city`,`state`,`zip`,`guardian`,`grelation`,`gmobile`,`email`) values('$id','$type','$condition','$duration','$admission','$house','$vill','$city','$state','$zip','$gname','$gr','$gmob','$email')
  ";
  $queryy = mysqli_query($conn,$insert);

  if($queryy){
   echo "<script>alert('Thanks for book your room'); 
   window.location.href = 'payment.php';
   </script>";
   $_SESSION['type'] = $type;
   $_SESSION['condition'] = $condition;

  }
  else{
   echo "<script>alert('something error'); </script>";

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
    <input type="submit" name="logout" value="Logout" class="btn btn-dark px-3 text-white">
</div>
  </div>
</nav>
<div class="burger d-lg-none">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

<div class="container-fluid mb-5 p-2">
<div class="d-flex flex-md-row flex-column justify-content-center gap-3 align-items-center">
<div class="container mb-5 p-2">

<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3 class="text-center">Booking room</h3>
              </div>
            </div>
          </div>
          <?php
          include "connection.php";
          $sql = "SELECT * from `student_profile` where email = '{$_SESSION['mail']}'";
          $quer = mysqli_query($conn,$sql);
          $num = mysqli_num_rows($quer);
          if($num > 0){
            while($row = mysqli_fetch_assoc($quer)){
          ?>
          <h4 class="text-warning pb-2 border-bottom">Personal information</h4>

          <form action="" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-md-6">
                <label for="email" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="first name" value="<?php echo $row['first_name']; ?>" readonly>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="last name" value="<?php echo $row['last_name']; ?>"  readonly>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Date of birth</label>
                <input type="date" class="form-control" name="dob" placeholder="" value="<?php echo $row['dob']; ?>"  readonly>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option><?php echo $row['gender']; ?></option>
                </select>
                </div>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>"  placeholder="name@example.com" readonly>
              </div>
              <div class="col-12">
              <label for="email" class="form-label">Mobile<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']; ?>"  readonly>
              </div>
              </div>
            </div>
          <?php
            }
        }
          ?>

          <h4 class="text-warning py-2 border-bottom">Book room</h4>
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                <label for="email" class="form-label">Registration No.<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-warning" name="reg-id" placeholder="first name" value="<?php echo rand(10000,99999); ?>"  readonly>
                </div>
                <div class="col-12">
                <label for="email" class="form-label">Room type<span class="text-danger">*</span></label>
                <select name="type" id="type" class="form-control">
                    <option>select type of room</option>
                    <option>Single</option>
                    <option>double</option>
                    <option>four</option>
                </select>
                </div>
                <div class="col-12">
                <label for="email" class="form-label">Condition<span class="text-danger">*</span></label>
                <select name="condition" id="condition" class="form-control">
                    <option>select here</option>
                    <option>Ac</option>
                    <option>Non Ac</option>
                </select>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Duration in month<span class="text-danger">*</span></label>
                <select name="duration" id="duration" class="form-control">
                    <option>select here</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Admission fees (non-refundable)<span class="text-danger">*</span></label>
                 <input type="text" name="admission" value="1000" class="form-control" readonly>
                </div>

                <h4 class="text-warning py-2 border-bottom">Address</h4>
                <div class="col-12">
                <label for="email" class="form-label">House no.(optional)<span class="text-danger"></span></label>
                 <input type="text" name="house" class="form-control">
                </div>
                <div class="col-12">
                <label for="email" class="form-label">Village <span class="text-danger">*</span></label>
                 <input type="text" name="village" class="form-control" required>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">City<span class="text-danger">*</span></label>
                 <input type="text" name="city" class="form-control" required>
                </div>
                

                <div class="col-12">
                <label for="email" class="form-label">State <span class="text-danger">*</span></label>
                <select name="state" id="state" class="form-control">
                  <option>select state</option>
                    <?php
                    include "connection.php";
                    $state = "SELECT * FROM `states`";
                    $q = mysqli_query($conn,$state);
                    while($fetch = mysqli_fetch_assoc($q)){
                      echo "<option>".$fetch['State']."</option>"; 
                    }
                    ?>
                </select>
                </div>

                
                <div class="col-12">
                <label for="email" class="form-label">Zip code<span class="text-danger">*</span></label>
                 <input type="number" name="zip" class="form-control" required>
                </div>

                <h4 class="text-warning py-2 border-bottom">Guardian information</h4>
                <div class="col-12">
                <label for="email" class="form-label">Guardian name<span class="text-danger">*</span></label>
                 <input type="text" name="g-name" class="form-control" required>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Relation<span class="text-danger">*</span></label>
                 <input type="text" name="g-relation" class="form-control" required>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Mobile no.<span class="text-danger">*</span></label>
                 <input type="text" name="g-phone" class="form-control" required>
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
                  <input class="btn btn-lg btn-primary" type="submit" name="submit" value='submit'/>
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

