<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>                
<body>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  height: 100%;
}

div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
}
</style>

<!-- taskbar -->
    <header>
        <nav>
            <ul>
                <li><a href="HOMEPAGEJABI.php">Home</a></li>
                <li><a href="MENUPAGE.php">Menu</a></li>
                <li><a href="ABOUTUSPAGE.php">About us</a></li>
                <li><a href="CONTACTPAGE.php">Contact</a></li>
                <li><a href="FAQPAGE.php">FAQ</a></li>
                <li><a href="BLOGPAGE.php">Gallery</a></li>
                <li><a href="PRICINGPAGE.php">Pricing</a></li>
            </ul>
        </nav>
    </header>

<!--Gallery-->
<b><i><h2 style="color: rgb(255, 255, 255);">Gallery</h2></b></i>
<div class="scroll-container">
  <img src="CARBS.png" alt="PIC" width="500px" height="500px">
  <img src="CHICK.png" alt="Pic" width="500px" height="500px">
  <img src="PIZZA.png" alt="Pic" width="500px" height="500px">
  <img src="PASTA.png" alt="Pic" width="500px" height="500px">
</div>
<!-- End of Gallery -->

<!-- With Bootstrap -->
<!-- Carousel -->

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>  


  </div>
  <hr>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active align-items-lg-justify-content-center">
      <img src="CARBS.png" alt="Los Angeles" class="d-block" style="width:100%; height: 700px;">

    </div>
    <div class="carousel-item">
      <img src="CHICK.png" alt="Chicago" class="d-block" style="width:100%; height: 700px;">
    </div>
    <div class="carousel-item">
      <img src="PIZZA.png" alt="New York" class="d-block" style="width:100%; height: 700px;">
    </div>
  </div>  
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!--Footer-->
 <footer>
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>