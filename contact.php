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

<header id="hero-home">
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
    </header>
    
<?php
	}
?>

<header id="hero-contact">
      <div class="container hero-inner">
        <div class="centered">
          <h1 class="heading-lg-underline">
            Contact us
          </h1>
        </div>
      </div>
    </header>
    

    <main>
      <section id="contact">
        <div class="container">
          <div class="contact-grid py-2">

            <div class="contact-info">
              <h1 class="py-1">Reach us!</h1>
              <div class="info">
                <h2>
                  <i data-feather="map" class="middle"></i>
                </h2>
                <p>
                  Address
                  <strong class="orange">UK</strong>
                </p>
              </div>
              <div class="info">
                <h2>
                  <i data-feather="phone" class="middle"></i>
                </h2>
                <p>Phone <strong class="orange">+44 7404167489</strong></p>
              </div>
              <div class="info">
                <h2>
                  <i data-feather="mail" class="middle"></i>
                </h2>
                <p>
                  E-Mail <strong class="orange">2149712@swansea.ac.uk</strong>
                </p>
              </div>
            </div>
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
</html>