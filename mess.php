<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HOSTEL - mess</title>
</head>
<style>
/* body{
        background: url("hostel-image/anchor-lee-kO1G3neRA2o-unsplash.jpg");
        background-size: cover;
        background-position: top;
        /* background-blend-mode: darken; */
}

*/ .nav-tabs {
    text-align: center;
    border-bottom: 0;
    display: flex;
    justify-content: center;
}

.nav-tabs>li {

    background-color: yellow;
    float: none;
    padding: 10;
    margin-right: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-tabs li a {
    text-decoration: none;
    color: black;
    font-size: 34px;
    padding: 0 20px 0;
}

.schedule {
    height: 500px;
    width: 100%;
}


.box {
    width: 100%;
    /* box-shadow: 0 0 4px 0 black; */
    display: none;
    justify-content: space-around;
    padding: 15px;
    transition: all 2s ease-in-out;
}

.active {
    display: flex;
}

button {
    width: 136px;
    font-weight: 600;
    font-size: large;
    padding: 10px 0;
    color: grey;
    border: none;
    background-color: blanchedalmond;
}

.btn-s {
    background-color: black;
    color: white;
}

.slider {
    width: 100%;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease;
}

.slides img {
    height: 400px;
    width: 100%;
    margin: 0 20px;
}

.slides img:hover {
    filter: grayscale(2);
}

.thmv-slider-service-box {
    background-color: rgba(33, 30, 52, 0.7);
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    padding: 30px;
    z-index: 10;
    margin: -50px 50px 0px;
    transition: all 0.3s;
}

.square {
    height: 250px;
    width: 250px;
    /* background-color: beige; */
    display: flex;
    justify-content: center;
    flex-direction: column;
    box-shadow: 0 0 2px 0 black;
}

.mg img {
    transition: all 1s ease-in-out;
    filter: brightness(0.5);
}

.mg img:hover {
    transform: scale(1.1);
    filter: brightness(1);
}
</style>

<body>
    <!-- navbar -->
    <nav class="navbar d-md-flex justify-content-between align-items-center bg-dark" id="top">
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
        <div class="container">
            <div>
                <h2 class="text-center text-warning py-4 border-bottom"> <b>Hostel Mess</b></h2>
                <p class="text-center text-white mx-auto">Hostel mess is not just a place to eat; it's a hub of
                    delicious
                    aromas, lively conversations, and memorable moments. With a diverse menu featuring local favorites
                    and
                    international cuisines, prepared by our talented chefs using fresh, quality ingredients, every meal
                    is a
                    culinary adventure. Whether you're enjoying a hearty breakfast to fuel your day of exploration, a
                    satisfying
                    lunch between classes or excursions, or a cozy dinner sharing stories with fellow travelers, our
                    hostel mess
                    is the perfect gathering spot. Come join us and indulge in a feast for the senses!</p>
            </div>
        </div>
    </nav>
    <div class="burger d-lg-none">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="container bg-white mb-5">

        <!-- Automative mess schedule -->
        <div class="container mb-5 px-md-4 ">
            <!-- <h3 class="text-secondary text-center border-bottom p-2">Weekly meal schedule</h3> -->
            <div class="d-flex justify-content-center">
                <h4 class="p-2 text-primary"><?php echo date('l'); ?></h4>
            </div>
            <div class="container d-flex justify-content-center mt-4">
                <button id="btn1" class="btn-s" onclick="showDiv(1)">Breakfast</button>
                <button id="btn2" onclick="showDiv(2)">Lunch</button>
                <button id="btn3" onclick="showDiv(3)">Snacks</button>
                <button id="btn4" onclick="showDiv(4)">Dinner</button>
            </div>

            <div class="w-100 mb-5 mx-auto ">
                <div id="div1" class="box flex-md-row flex-column active">
                    <div class="mt-3">
                        <img src="hostel-image/breakfast-m.webp" width="330" height="330" alt=""
                            style="border-radius: 50%;">
                        <div class="d-flex justify-content-center mt-3">
                            <a href="full-meal.php"><p class="btn btn-dark">View full Weekly schedule</p></a>
                        </div>
                    </div>
                    <div>
                     <!-- php for breakfast -->
                     <?php
                     include "connection.php";
                     $day = date('l');
                     $sql = "SELECT * FROM `breakfast` where day = '$day'";
                     $query = mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($query)){
                     ?>

                        <h4 class="text-danger border-bottom">Welcome on breakfast</h4>
                        <p class="text-black">Time : 8.00AM to 9.00AM</p>
                        <p class="text-white">
                        <ul class="ap-services bg-light">
                            <li>- <?php echo $row['bone']; ?></li>
                            <li>-  <?php echo $row['btwo']; ?></li>
                            <li>-  <?php echo $row['bthree']; ?></li>
                        </ul>
                        <p class="text-center text-dark">Or</p>
                        <ul class="ap-services bg-light">
                            <li>-  <?php echo $row['oone']; ?></li>
                            <li>-  <?php echo $row['otwo']; ?></li>
                            <li>-  <?php echo $row['othree']; ?></li>
                        </ul>
                        <h5 class="text-black"><b>NOTE : </b>It's your choice from tea and milk,because you can take
                            only
                            one meal.</h5>
                        </p>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div id="div2" class="box flex-md-row flex-column">
                    <div class="mt-3">
                        <img src="hostel-image\imag.jpg" width="330" height="330" style="border-radius: 50%;" alt="">
                        <div class="d-flex justify-content-center mt-3">
                            <a href="full-meal.php"><p class="btn btn-dark">View full Weekly schedule</p></a>
                        </div>
                    </div>
                    <div class="w-50">
                    <?php
                     include "connection.php";
                     $day = date('l');
                     $sql = "SELECT * FROM `lunch` where day = '$day'";
                     $query = mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($query)){
                     ?>
                        <h4 class="p-2 text-warning border-bottom"><b>Welcome on Lunch</b></h4>
                        <p class="text-black">Time : 1.00PM to 2.30PM</p>
                        <p class="text-white">
                        <ul class="ap-services bg-light">
                            <li>- <?php echo $row['lone']; ?></li>
                            <li>- <?php echo $row['ltwo']; ?></li>
                            <li>- <?php echo $row['lthree']; ?></li>
                            <li>- <?php echo $row['lfour']; ?></li>
                            <li>- <?php echo $row['lfive']; ?></li>
                           
                            <li></li>
                        </ul>
                        <h5 class="text-black"><b>NOTE : </b>It's your choice from tea and milk,because you can take
                            only
                            one meal.</h5>
                        </p>

                    </div>
                    <?php
                     }
                    ?>
                </div>

                <div id="div3" class="box flex-md-row flex-column">
                    <div>
                        <img src="hostel-image\french-fries.avif" width="330" height="330" style="border-radius: 50%;"
                            alt="">
                        <div class="d-flex justify-content-center mt-3">
                            <a href="full-meal.php"><p class="btn btn-dark">View full Weekly schedule</p></a>
                        </div>
                    </div>
                    <div class="w-50">

                 <!--This is PHP code for showing meal of week full from table  -->
                 <!-- All data of breakfast,lunch,snacks and dinner -->

                    <?php
                     include "connection.php";
                     $day = date('l');
                     $sql = "SELECT * FROM `snacks` where day = '$day'";
                     $query = mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($query)){
                     ?>
                        <h4 class="p-2 text-warning border-bottom"><b>Welcome on Snacks</b></h4>
                        <p class="text-black">Time : 4.00PM to 5.00PM</p>
                        <p class="text-white">
                        <ul class="ap-services bg-light">
                            <li>- <?php echo $row['sone']; ?></li>
                            <li>- <?php echo $row['stwo']; ?></li>
                            <li>- <?php echo $row['sthree']; ?></li>
                        </ul>
                        <h5 class="text-black"><b>NOTE : </b>It's your choice from tea and milk,because you can take
                            only
                            one meal.</h5>
                        </p>

                    </div>
                    <?php
                     }
                    ?>
                </div>
                <div id="div4" class="box flex-md-row flex-column">

                    <div>
                        <img src="hostel-image\full plate rice.avif" width="330" height="330" style="border-radius: 50%;" alt="">
                        <div class="d-flex justify-content-center mt-3">
                            <a href="full-meal.php"><p class="btn btn-dark">View full Weekly schedule</p></a>
                        </div>
                    </div>
                    <div class="w-50">
                    <?php
                     include "connection.php";
                     $day = date('l');
                     $sql = "SELECT * FROM `dinner` where day = '$day'";
                     $query = mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($query)){
                     ?>
                        <h4 class="p-2 text-warning border-bottom"><b>Welcome on Dinner</b></h4>
                        <p class="text-black">Time : 8.00PM to 9.30PM</p>
                        <p class="text-white">
                        <ul class="ap-services bg-light">
                            <li>- <?php echo $row['done']; ?></li>
                            <li>- <?php echo $row['dtwo']; ?></li>
                            <li>- <?php echo $row['dthree']; ?></li>
                            <li>- <?php echo $row['dfour']; ?></li>
                            <li>- <?php echo $row['dfive']; ?></li>
                        </ul>
                        <h5 class="text-black"><b>NOTE : </b>It's your choice from tea and milk,because you can take
                            only
                            one meal.</h5>
                        </p>

                    </div>
                    <?php
                     }
                    ?>
                </div>
            </div>
        </div>

        <div class="slider container">
            <div class="slides">
                <img src="hostel-image/french-fries.avif" alt="Image 1">
                <img src="hostel-image/newffoo.avif" alt="Image 2">
                <img src="hostel-image/full plate rice.avif" alt="Image 3">
                <img src="hostel-image/chowmein.avif" alt="Image 4">
                <img src="hostel-image/noodles.avif" alt="Image 1">
                <img src="hostel-image/naan.avif" alt="Image 2">
                <img src="hostel-image/sandwich.avif" alt="Image 3">
                <img src="hostel-image/kdkd.avif" alt="Image 4">
                <!-- Add more images as needed -->
            </div>
            <div class="d-md-flex d-none justify-content-center mb-5">
                <div class="thmv-bg-glass text-center thmv-slider-service-box">
                    <h5 class="text-warning">FOODS SERVES ON MEALS</h5>
                    <p class="text-white"> Nutritious and delicious meals to our residents</p>
                </div>
            </div>
        </div>


        <div class="ab my-5 p-4">
            <h3 class="text-secondary p-2 text-center">
                "Your day with delicious meals, our hostel Mess service ensures you never go hungry!"
            </h3>
            <p class="text-muted">Living in a hostel comes with its own unique experiences, and one of the most integral
                aspects is the hostel mess. Stepping into the mess hall each day is akin to entering a bustling
                marketplace of flavors and aromas. From the clinking of cutlery to the chatter of fellow residents, it's
                a hub of activity where friendships are forged over shared meals. The mess experience is not just about
                satisfying hunger but also about camaraderie and community. Whether it's the excitement of discovering a
                new favorite dish or the occasional culinary misadventure, each mealtime is a story waiting to unfold.
                Amidst the chaos of deadlines and assignments, the mess becomes a sanctuary where residents come
                together to refuel, recharge, and create lasting memories.</p>
            <div class="container-fluid  p-4 ab d-md-flex justify-content-around">
                <div class="square bg-info text-white">
                    <h2 class="text-center">5000 + </h2>
                    <p class="text-center">The total number of students residing in the hostel throughout the year.</p>
                </div>
                <div class="square bg-danger text-white">
                    <h2 class="text-center">3 Meal/day <br>(1 optional meal) </h2>
                    <p class="text-center">Whether all students are on a mandatory meal plan or if it's optional.</p>
                </div>
                <div class="square bg-black text-white">
                    <h2 class="text-center">15000 + </h2>
                    <p class="text-center">NO. of meal per day serve</p>
                </div>
            </div>

            <div class="container d-flex">
                <div class="">
                    <h1><b>Facilities</b></h1>
                    <h5 class="text-muted">
                        "Fueling minds, one plate at a time: Welcome to the hostel mess!"</h5>
                    <ul class="ap-services my-4">
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Nutritious and delicious meals to our
                            residents.</li>
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Complimentary Daily Breakfast,Lunch,dinner
                        </li>
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Daily tea/coffee with snacks</li>
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Kitchen staff follows strict hygiene
                            protocols to maintain the highest food safety standards.</li>
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Book your tiffin box by order</li>
                        <li><i class="fa fa-x text-danger p-2 fa-check"></i> Canteen present inside mess</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center text-secondary p-2 border-bottom">
                Our Galllery
            </h1>
            <!-- Gallery -->
            <div class="row p-3 mg">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="hostel-image/breakfast-m.webp" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" />

                    <img src="hostel-image/doublebed.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="hostel-image/night.webp" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds" />

                    <img src="hostel-image/mmpsmess1Old.png" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" />
                    <img src="hostel-image/hostel-slider1.webp" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea" />

                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="hostel-image/parking.webp" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water" />

                    <img src="hostel-image/logo.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park" />
                </div>



            </div>
            <!-- Gallery -->

        </div>
    </div>


    <!-- footer -->
    <div class="container-fluid bg-black text-white">
        <footer class="p-2">
            <div class="d-flex justify-content-center mb-4">
                <ul class="list-unstyled d-flex w-50 justify-content-around my-3">
                    <li class="ms-3"><a class="link-body-emphasis" href="#""><i class=" fa fa-2x fa-facebook
                            text-white"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                class="fa fa-2x fa-instagram text-white"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                class="fa fa-2x fa-youtube text-white"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                class="fa fa-2x fa-envelope text-white"></i></a></li>
                </ul>
            </div>
            <a href="#top"><button class="btn btn-sm btn-danger mb-4">back to top</button></a>
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="border-bottom pb-2">Navbar links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-warning">Home</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-warning">About</a></li>
                        <li class="nav-item mb-2"><a href="Fees structure.php" class="nav-link p-0 text-warning">Fees
                                structure</a></li>
                        <li class="nav-item mb-2"><a href="gallery.php" class="nav-link p-0 text-warning">gallery</a>
                        </li>
                        <li class="nav-item mb-2"><a href="mess.php" class="nav-link p-0 text-warning">mess</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="border-bottom pb-2">Important form</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Hostel accommodation</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Student Declaration</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Mess rebate </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Visitor registration
                                form</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-warning">Medical
                                Reimbursement</a></li>
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
                            <label for="Email">Email</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                fdprocessedid="aohms7">
                            <label for="Email">Enter your feedback</label>
                            <textarea name="text" id="" cols="30" rows="4" class="form-control"></textarea>
                            <button class="btn btn-danger w-25" type="button" fdprocessedid="6y69j">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="border-top">
                <p class="text-center p-2">Design with love by Jasvir singh | ©2024 |~|OSTEL, Inc.
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All rights reserved.</p>
            </div>
        </footer>
    </div>


    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"> </script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="style.js"></script>


</body>

</html>