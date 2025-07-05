<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jabi Res2rant</title>
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
            padding: 10px;
            position: static;
            width: 100%;
            left: 0;
            bottom: 0;
        }
     </style>
    <!-- taskbar -->
    <header>
        <nav>
            <ul>
                
                <div class=".container">
                <div class="topleft"> <img src="JABI2.png" alt="Jabi Logo" class="logo" height="60" width="70"></div>
                <div class="justify-content-around">
                    <li><a href="HOMEPAGEJABI2.php">Back</a></li>
            </ul>
        </nav> 
    </header>

    <section id="home">
        <div class="hero">
            <b><i><h1>JABIIII RES2RANT WEBSITE</h1></i></b>
            <p style="color:rgb(255, 255, 255)">Experience the taste of authentic cuisine</p>
            
        </div>
    </section>

    <!-- Contents -->
    <section id="menu">
        <div class="#menu">
        <b><i><h3>CONTENTS </h3></i></b>
        </div>
    <br>    
    <!-- Menu -->
        <div class="home">
        <a href="MENUPAGE.php">
        <div class="container">
        <img src="JABI PIC 3.jpg" alt="Avatar" class="image">
        <div class="overlay">
         <div class="text">Menu</div>
        </div>
        </div>
        </a>

        <a href="ABOUTUSPAGE.php">
        <div class="container">
        <img src="ABOUT PIC.jpg" alt="Avatar" class="image">
        <div class="overlay">
         <div class="text">About</div>
        </div>
        </div>
        </a>

        <a href="GALLERYPAGE.php">
        <div class="container">
        <img src="IMAGE PIC.jpg" alt="Avatar" class="image">
        <div class="overlay">
         <div class="text">Gallery</div>
        </div>
        </div>
        </a>

        <a href="CONTACTPAGE.php">
        <div class="container">
        <img src="CONTACT PIC.jpg" alt="Avatar" class="image">
        <div class="overlay">
         <div class="text">Contact</div>
        </div>
        </div>
        </a>

<hr>

    <!--Feedback-->
    <section id="#menu"> 
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
         
         <a href="RATINGPAGE.php" target="_blank" class="btn btn-dark">Rate Us</a>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<br>
    <footer>
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
</body>
</html>
