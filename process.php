<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lab 1 Assignment</title>

  <!-- Font Awesome Icons -->
  <link href="https://braianpita.github.io/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="https://braianpita.github.io/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="https://braianpita.github.io/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Main Project</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">

                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/braian-pita-contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/braian-pita-direction.html">Directions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/braian-pita-youtube.html">Youtube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/braian-pita-photo-gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://braianpita.github.io/sitemap.html">Sitemap</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LABS</a>


                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab1.html">Lab 1</a>
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab2.html">Lab 2</a>
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab3.html">Lab 3</a>
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab4.html">Lab 4</a>
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab5.html">Lab 5</a>
                                <a class="dropdown-item" href="https://braianpita.github.io/LABS/lab6.html">Lab 6</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Submitted!</h2>
                    <hr class="divider my-4">



					<?php

					
					$message = "";

					foreach($_POST as $key => $value)
					{
					
						if($value == "")
						{
						$message .= nl2br("<b>$key</b> : Not Specified\n");
						}
						else {
						$message .= nl2br("<b>$key</b> : $value\n");
						}


					}
					
					
					$from = $_POST['email'];
					$to = "braianx100@gmail.com";
					$subject = "Website Contact Request";

					$headers  = "From: $from\r\n"; 
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				




					echo $message;

					if(mail($to,$subject,$message,$headers))
					{

						echo "<h2><br/>Message sent successfully.</h2>";
					}
					else {
						echo "<h2><br/>Error Sending Message. Try again.</h2>";
					}
					
					
					
					
					?>

                   
				   <a href="http://braianpita.github.io/braian-pita-contact.html" class="btn btn-primary mb-2">Go Back</a>

                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://braianpita.github.io/vendor/jquery/jquery.min.js"></script>
    <script src="https://braianpita.github.io/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://braianpita.github.io/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://braianpita.github.io/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="https://braianpita.github.io/js/creative.min.js"></script>

</body>

</html>
