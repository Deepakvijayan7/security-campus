<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Security campus</title>
       <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/easy-responsive-tabs.css">
      <link href="assets/css/main.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/w3.css">
   </head>
   <body>
 <header>

            <nav class="navbar_custom navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar_ul navbar-nav">
                  <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">who we are</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">ASIS preparatory</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     certifications
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" href="#">resources</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">contact us</a>
                  </li>

               </ul>
               
            </div>
            
            <div class="w3-sidebar w3-bar-block w3-card w3-black w3-animate-right side_bar" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">&times;</button>
            <div class="side_hide">
            <a href="#" class="w3-bar-item w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-button">Who We Are</a>
            <a href="#" class="w3-bar-item w3-button">Asis respiratory</a>
            
            <a href="#" class="w3-bar-item w3-button">certifications</a>      
            <a href="#" class="w3-bar-item w3-button">resources</a>
            <a href="#" class="w3-bar-item w3-button">contact us</a>
      </div>

            <a href="#" class="w3-bar-item w3-button">our learning path</a>
            <a href="#" class="w3-bar-item w3-button">Testimonials</a>
            
            <a href="#" class="w3-bar-item w3-button">training calendar</a>
            <a href="#" class="w3-bar-item w3-button">forum</a>
            <a href="#" class="w3-bar-item w3-button">faq</a>
            </div>

            <div class="w3">
            <button class="w3-button  w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
            <div class="w3-container">
            </div>
            </div>

            </nav>
<script>

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
</header>