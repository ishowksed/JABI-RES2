<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="script.js" rel="stylesheet">
    <link rel="stylesheet" href="test.css">
    <link rel="icon" type="image/x-icon" href="JABI2.png">
</head>
<body>
<style>
    /* Footer Styling */
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
        overflow-anchor: none;
        position: fixed;
        width: 100%;
        bottom: 0;
        top: auto;
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
</style>

    <!--Navigation Bar-->
     <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            
        
            <h1 class="navbar-brand" href="HOMEPAGEJABI.php`">Jabi Navigation</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-4 me-4">
                <li class="nav-item">
                <a class="nav-link rounded px-3 btn btn-light" aria-current="page" href="HOMEPAGEJABI.php">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link rounded px-3 btn btn-light" aria-current="page" href="RATINGPAGE.php">Rate Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link rounded px-3 btn btn-light" aria-current="page" href="BLOGPAGE.php">Blog</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"> 
                    Shortcuts
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="MENUPAGE.php">Menu</a></li>
                    <li><a class="dropdown-item" href="FAQPAGE.php">Faq</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="ABOUTUSPAGE.php">About us</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-disabled="true">Customer</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<br>
<section id ="menu"></section>
    <!--Home Page-->
    <div class ="container-fluid">
        <div class="card shadow p-100 col-sm-100 mx-auto">
        <section id="home">
        <div class="hero">
            <b><i><h1>WELCOME TO JABIIII RES2RANT </h1></i></b>
            <p style="color:rgb(255, 255, 255)">Please Log in</p>
    </section>  
        </div>
        </div>
<br>
    <!--Log in Section-->
    <div class="container mt-5">
        <div class="card shadow p-5 col-sm-5 mx-auto">
            <h3 class="text-center">Login</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-floating ">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-light mt-3"> <a href="HOMEPAGE JABI.html" class="text-decoration-none text-white">Login</a></button>
            <p class="text-center">Please refresh if you can't login
        </div>
    </div>
    
  <!--Footer-->
    <footer>
    <div class=".card">
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
    </div>
    

    <!--test-->
    <script>
   let score = 85;
         if (score >=75) {
            console.log("Passed");
            } else {
                console.log("Failed");
         }

         for ( let i = 0; i < 3; i++) {
            console.log("Loop count " + i);
         }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</section>
</body>
</html>