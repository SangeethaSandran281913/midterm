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

.checked {
      color: rgb(233, 131, 233);
    }

    /* Style buttons */
    .btn {
      background-color: rgb(155, 2, 194);
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: rgb(218, 89, 218);
    }

    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
    /* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
    
    /* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #378080;
  color: white;
}

.fa {font-size:20px;}

    </style>
      <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }

        
      </script>
</head>
<body>
  <!-- Navigation Bar -->
 <div class="w3-top">
    <div class="w3-bar w3-flat-wisteria w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
        onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"> </i></a>
      <a href="#"  onclick="window.location.reload(true)" class="w3-bar-item w3-button w3-padding-large w3-cursive"><i class="fa fa-cogs"></i><b> MY TUTOR</b> </a>
      <a href="php/login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-lock"></i> Login 
        </a>
      <a href="php/register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-group"></i> Register
         </a>

     
      
    </a>
    </div>
  </div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-flat-wisteria w3-hide w3-hide-large w3-hide-medium w3-top"
  style="margin-top: 46px">
  <a href="php/login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><i class="fa fa-lock"></i> Login</a>
  <a href="php/register.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><i class="fa fa-group"></i> Register</a>
</div>

<!-- Content -->
<div class="w3-content" style="max-width: 2000px; margin-top: 46px">

<!-- slideshow -->
<header class="slideshow-container w3-display-container w3-center">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/3.png" style="width:100%">

</div>
      </header>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>50+</h3>
      <p>Tutors</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>200+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>500+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>800+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>
<br>

<footer class="footer w3-center w3-flat-wisteria">
      <br>
      <a href="https://www.facebook.com/sagi.shana" class="fa fa-facebook fa-2x "></a>
      <a href="https://twitter.com/sangeethaaa_" class="fa fa-twitter fa-2x"></a>
      <a href="https://www.youtube.com/channel/UCL7pocnpWxmee7t5kHXUNaQ" class="fa fa-youtube fa-2x"></a>
      <a href="https://www.instagram.com/sangeethaa__/?hl=en" class="fa fa-instagram fa-2x"></a>
      <p class="w3-center">&#169; MY TUTOR. 2022</p>
    </footer>

    
    </div> 
</body>
<script src="script/script.js"></script>
</html> 
