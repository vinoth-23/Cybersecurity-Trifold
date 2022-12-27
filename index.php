<?php $links= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
    <html>
  
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"”" content="Cyber Security/IT Networking - We make     your network a better and safer place!">
    <link rel="manifest" href="manifest.json" crossorigin="use-credentials" />
    <meta name="theme-color" content="#4472ca" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Trifold - Cyber Security</title>
	<style type='text/css'>
	
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  width: 100%;
  position: relative;
  margin: auto;
  float:left;
  clear:both;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

.mySlides img
{
 height:450px;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  background:red;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: yellow;
  color:#000;
}

/* Caption text */
.text1 {
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
.carousel-caption
{
	position:relative;
	bottom:30px;
	padding:20px;
	text-align:center;
	background:red;
	color:#fff;
}
	</style>
 
  </head>

<body>
	<?php
$fn1=basename($_SERVER['SCRIPT_FILENAME']);
$fn2=explode(".","$fn1");
$f=$fn2[0];
?>

<?php include "menu.php"; ?>
<?php

	
	if(($f=='index')||($f=='')){
	?>

<!--<header id="hero-home">
      <div class="container hero-home-inner">
        <div class="py-2">
          <h1 class="heading-lg">
            We make your network a better and safer place!
          </h1>
          <p class="lead py-2">
            Safe place is a better place to work!
          </p>
          <button class="btn-dark">
            <a href="contact.php">Let's work together!</a>
          </button>
        </div>
      </div>
    </header>-->
	
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <a href='videos.php' target="_blank"><img src="s1.png" style="width:100%"></a>
	 <div class="carousel-caption">
          <h3>Videos</h3>
        </div>
  </div>

  <div class="mySlides fade">
    <a href='newsletters.php' target="_blank"><img src="s2.png" style="width:100%"></a>
		 <div class="carousel-caption">
          <h3>Newsletters</h3>
        </div>
  </div>  
  
    <div class="mySlides fade">
    <a href='awareness.php' target="_blank"><img src="s3.png" style="width:100%"></a>
	<div class="carousel-caption">
          <h3>Awareness</h3>
        </div>
  </div>  
  
    
    <div class="mySlides fade">
    <a href='basics.php' target="_blank"><img src="s4.png" style="width:100%"></a>
		<div class="carousel-caption">
          <h3>Basics</h3>
        </div>
  </div>  
  
    <div class="mySlides fade">
    <a href='news.php' target="_blank"><img src="s5.png" style="width:100%"></a>
		<div class="carousel-caption">
          <h3>News</h3>
        </div>	
  </div>    

  


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div>
 
    
<?php
	}
?>


    <main>
      <section id="landing-main">
        <div class="container">
          <div class="centered py-1">
            <h1 class="heading-m">Trifold - Cyber Security</h1>
          </div>
          <div class="who-are-we col-2">
            <div class="text">
              <p>
                The Cybersecurity Education is one that is rapidly expanding in this era. There are several opportunities for cybercriminals to acquire passcodes or any other data of individuals, because so many people use the internet day in and day out. The target is set to teach how to defend themselves against cyber-attacks, and Cybersecurity awareness training is crucial. This project concerns security risks and preventative measures for the professionals like businesses, IT firms, families, schools, government entities as well as individuals. The goal of the project is to develop a website that informs users of all vulnerabilities, threat management, and the names and uses of Cybersecurity based technologies. This Trifold website categorizes the people as kids (School Students), Adults (College Students) and finally Professionals (Office-goers).  Based on these categories people can approach the website to get cyber awareness. This is one of the novelties of the proposed work: individuals will be more cognizant of the hazards that are present and will comprehend and learn how to counter them. A big step towards a more sophisticated cybersecurity teaching technique may be made employing this innovative approach to leadership, entrepreneurship, and cybersecurity education. In a nutshell, personal and intellectual cyber threats can be the starting point for protection. 


              </p>
            </div>
            <img src="img/hello.svg" alt="Hello" />
          </div>
          <div class="centered py-1">
            <h1 class="heading-m">What we do?</h1>
          </div>
          <p class="centered">
           Federal Trade Commission’s media including videos.
          </p>
          <div class="boxes-4 py-2">
            <a href='videos.php' target="_blank">
			<div class="box">
              <h1>
                <i data-feather="file-text"></i>
              </h1>
              <h2>Informative News</h2>
              <p>
                Attractive and Informative News and Tips for technical and non-technical users.
              </p>
            </div>
			</a>
			<a href='newsletters.php' target="_blank">
            <div class="box">
              <h1><i data-feather="mail"></i></h1>
              <h2>Newsletters</h2>
              <p>
                CyberSecEdu Newsletters for subscribers
              </p>
            </div>
			</a>
			<a href='awareness.php' target="_blank">
            <div class="box">
              <h1>
                <i data-feather="shield"></i>
              </h1>
              <h2>User Awareness Program</h2>
              <p>
                Updations for Cybersecurity awareness sessions/programs
              </p>
            </div>
			</a>
			<a href='quiz.php' target="_blank">
            <div class="box">
              <h1>
                <i data-feather="edit"></i>
              </h1>
              <h2>Interactive Quizzes</h2>
              <p>
                Interactive Quizzes for visitors after completion of the learning process.
              </p>
            </div>
			</a>
			
			<!--<div class="box">
              <h1>
                <i data-feather="mic"></i>
              </h1>
              <h2>User awareness surveys</h2>
              <p>
               User awareness surveys in the Indian regional language
              </p>
            </div>-->
			
          </div>
          
        </div>
      </section>
    </main>

  <footer>
      <div class="container footer-inner">
        <p class="centered py-1">
          &copy; Copyright Cyber Security All Rights Reserved
        </p>
      </div>
    </footer>
  </body>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>
  <script src="js/main.js"></script>
  
   
  <script type='text/javascript'>
	let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
	</script>
	
</html>