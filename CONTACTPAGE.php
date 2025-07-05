<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>                
<body>  
<style>
    /* Footer Styling */
footer {
    background-color: #1a0707;
    color: #fff;
    text-align: center;
    padding: 1rem;
    position: static;
    width: 100%;
    left: 0;
}

/* Card Styling */
    .card {
        border-radius: 10px;
    }
    .card img {
        border-radius: 10px;
    }
    body {
        background-color: #FFECB8;
        color: #333;
        font-family: Arial, sans-serif;
    }
/* Contact Form Styling */
body {
    background-color: #FFECB8;
    color: #333;
    font-family: Arial, sans-serif;
    scroll-behavior: smooth;
}

</style>

    <!-- taskbar -->
    <header>
        <nav>
            <ul>
                <li><a href="HOMEPAGEJABI.php">Home</a></li>
                <li><a href="MENUPAGE.php">Menu</a></li>
                <li><a href="ABOUTUSPAGE.php">About us</a></li>
                <li><a href="GALLERYPAGE.php">Gallery</a></li>
                <li><a href="FAQPAGE.php">FAQ</a></li>
                <li><a href="BLOGPAGE.php">Blog</a></li>
                <li><a href="PRICINGPAGE.php">Pricing</a></li>
            </ul>
        </nav>
    </header>

 <!--Contact-->
<section id="menu">
        <b><i><h2 style="color: rgb(255, 255, 255);">Contact Us</h2></b></i>
<br>
      <div class="container mt-1">
        <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
            <div class="card-body">
                <h3 class="text-center">Get in Touch</h3>
        <p style="text-align: center;">We would love to hear from you! Please fill out the form below to get in touch with us.</p>
   
        <form action="submit_form.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <a href="https://ngl.link/ksedrick1" target="_blank" class="btn btn-dark">Submit</a>
        </form>
        </div>
        </div>
<br> 
<hr>
    <p class="text-center">You can also reach us on our social media platforms:</p>
    <div class="text-center btn-group m-5 d-flex justify-content-center">
    <img src="SOCIALLOGO.png" alt="Social Media Icons" style="width: 100px; height: 50px;">
    <a href="https://www.facebook.com" target="_blank" class="btn btn-outline-dark">Facebook</a>
    <a href="https://www.twitter.com" target="_blank" class="btn btn-outline-dark">Twitter</a>
    <a href="https://www.instagram.com" target="_blank" class="btn btn-outline-dark">Instagram</a>
    </div>
    </div>

   <!-- Footer-->
     <footer>
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</section>
</body>
</html>