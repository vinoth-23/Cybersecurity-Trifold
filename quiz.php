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

	
    <header id="hero-about">
      <div class="container hero-inner">
        <div class="centered">
          <h1 class="heading-lg-underline">
           Quiz
          </h1>
        </div>
      </div>
    </header>

	<main>
      <section id="about">
<iframe  src='https://docs.google.com/forms/d/e/1FAIpQLSd8z9u2Huem6QMm-vGsIXDRrq3z4NNef2ofOPF2giyqsdtcsA/viewform' width='100%' height='900px' frameborder='0' ></iframe>

      </section>
    </main>
    <footer>
      <div class="container footer-inner">
        <p class="centered py-1">
          &copy; Copyright JSecurity 2022 All Rights Reserved
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