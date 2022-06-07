<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="../js/menu.js" defer></script>
  <link rel="stylesheet" href="style.css" />
  <title>My Tutor</title>
  <style>

    
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.bg-img {
  /* The image used */
  background-image: url("../images/6.png");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}


/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: rgb(193, 132, 199);
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

/* Footer */
    .footer {
      position: static;
      left: 0;
      bottom: 0;
      height: 100px;
      width: 100%;
      color: white;
      text-align: center;
    }

    .footer a {
      text-decoration: none;
    }

    * {
      box-sizing: border-box;
    }
</style>
</head>
<body>
  <header class="bg-img">
  <div class="navbar w3-flat-wisteria">
    <a href="courses.php">Courses</a>
    <a href="tutors.php">Tutors</a>
    <a href="#">Subscription</a>
    <a href="#">Profile</a>
    <a href="logout.php" onclick="popup()" class="right"><i class="fa fa-sign-out" style="font-size:24px; color:rgb(255, 255, 255)"></i></a>
  </div></header>
  
  <script>
    function popup() {
      alert("You have successfully logged out!");
    }
    </script>


<div class="row">
  <div class="side">
    <h2>Meaningful Learning
      Starts Here</h2>
    
    <div class="fakeimg" src ="../images/7.png" style="height:200px;">
     </div>

    
    <h3>What We Offer
      </h3>
    <p>Get The Best Home Tutor for Your Child Today</p>
    <div class="fakeimg" style="height:60px;">One-to-One</div><br>
    <div class="fakeimg" style="height:60px;">Grouping</div><br>
    <div class="fakeimg" style="height:60px;">Customize</div>
  </div>
  <div class="main">
    <h2>Featured In</h2>
    <h5>The Malaysian Reserve</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>17th December 2020</p>
    <p>Each month hundreds of parents and students are searching on MyTutor for a tutor like you.</p>
    <br>
    <h5>Selamat Pagi Malaysia
      </h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    
    <p>10th July 2021</p>
    <p>Whether you're a full time tutor or brand new to tutoring, we can help you grow and become
      professional tutors.</p>
  </div>
</div>

<footer class="footer w3-center w3-flat-wisteria">
  <br>
  <a href="https://www.facebook.com/sagi.shana" class="fa fa-facebook fa-2x "></a>
  <a href="https://twitter.com/sangeethaaa_" class="fa fa-twitter fa-2x"></a>
  <a href="https://www.youtube.com/channel/UCL7pocnpWxmee7t5kHXUNaQ" class="fa fa-youtube fa-2x"></a>
  <a href="https://www.instagram.com/sangeethaa__/?hl=en" class="fa fa-instagram fa-2x"></a>  <br> &#169; MY TUTOR. 2022
</footer>

</body>
</html>

