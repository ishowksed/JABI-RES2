<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">   <meta charset="UTF-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>

<style>
 /* Footer Styling */
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
        position: static;
        width: 100%;
        bottom: 0;
        top: auto;
    }
/* Menu Section */

.menu-item {
    margin: 1.5 rem 0;
    text-align: center;
    padding: 1rem;
}
.menu-item img {
    width: 200px;
    height: 150px;
    border-radius: 10px;
    
}
/* Side Navigation */
.side-nav { 
  text-align: center;
  float: left;
  color:#fff;
  width: 30%;
  height:1910px;
  padding: 20px;

  /* only for demonstration, should be removed */
  background: #333;
  padding: 20px;
}
h4 {
    font-style: bold;
}

</style>

<!--Taskbar-->
<header>
        <nav>
            <ul>
                <li><a href="HOMEPAGEJABI.php">Home</a></li>
                <li><a href="ABOUTUSPAGE.php">About us</a></li>
                <li><a href="CONTACTPAGE.php">Contact us</a></li>
                <li><a href="GALLERYPAGE.php">Gallery</a></li>
                <li><a href="FAQPAGE.php">FAQ</a></li>
                <li><a href="BLOGPAGE.php">Blog</a></li>
                <li><a href="PRICINGPAGE.php">Pricing</a></li>
            </ul>
        </nav>
    </header>

<!--MENU-->
     <section id="menu">
        <b><i><h2 style="color: rgb(255, 255, 255);">Menu</h2></b></i>   
        <id class="menu-item">
        <h4>Explore our delicious menu items below. Click on the "Check Order" button to view more details and place your order.</h4>
<!--Side Navigation-->
<section>
  <id class="side-nav">
      <h1>Side Dish</h1>
<br> 
<div class="container mt-1">
<!--One Item-->
        <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
            
            <img src="GINO.png" alt="FOOD PIC" style="width: 100%; height: 60; border-radius: 10px;">
            <h4>Gnocchi</h4>
            <p> Soft dumlings served with various sauces</p>
            <a href="PRICINGPAGE.php" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
<br>
<!--Item-->
 <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
            
            <img src="FUGI.png" alt="FOOD PIC" style="width: 100%; height: 60; border-radius: 10px;">
            <h4>Fungi alla Florentina</h4>
            <p> Simple but flavorful dish of seared mushrooms with touch of arugula.</p>
            <a href="PRICINGPAGE.php" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
<br>
<hr>
<h1>Dessert</h1>
<br>
<!--Item-->
 <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
            
            <img src="TIRA.png" alt="FOOD PIC" style="width: 100%; height: 60; border-radius: 10px;">
            <h4>Tiramisu</h4>
            <p>Coffee flavored dessert layers with lady fingers, mascarpone cream and cocoa powder</p>
            <a href="PRICINGPAGE.php" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
<br>

<!--Item-->
 <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
            
            <img src="GEL.png" alt="FOOD PIC" style="width: 100%; height: 60; border-radius: 10px;">
            <h4>Gelato</h4>
            <p>Ice cream made with reach flavor and creamy texture.</p>
            <a href="PRICINGPAGE.php" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
  </id>
</section>
<!--Menu Items-->
<div class="container mt-1">
        <div class="card shadow p-2 col-sm-8 mx-auto justify-content-around">
        <div class="menu-item">
            <h1>Main Dishes</h1>
            <img src="CARBS.png" alt="FOOD PIC">
            <h3>Spaghetti Carbonara</h3>            
            <p>A classic Italian pasta dish with creamy sauce and pancetta.</p>
            <a href="https://en.wikipedia.org/wiki/Carbonara" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>  
        <div class="menu-item">
            <img src="PIZZA.png" alt="FOOD PIC">
            <h3>Margherita Pizza</h3>
            <p>Thin crust pizza topped with fresh tomatoes, mozzarella, and basil.</p>
            <a href="https://en.wikipedia.org/wiki/Pizza_Margherita" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
        <div class="menu-item">
            <img src="PASTA.png" alt="FOOD PIC">
            <h3>Pesto Pasta</h3>    
            <p> A dish where cooked pasta tossed with flavorful green sauce made with basil, garlic, pine nuts, olive oil and salt.</p>
            <a href="https://en.wikipedia.org/wiki/Pesto_alla_trapanese" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
         <div class="menu-item">
            <img src="CHICK.png" alt="FOOD PIC">
            <h3>Fried Chicken</h3>    
        <p>Fried chicken, also called Southern fried chicken,
             is a dish consisting of chicken pieces that have been coated with seasoned flour</p>
            <a href="https://en.wikipedia.org/wiki/Fried_chicken" target="_blank" class="btn btn-outline-dark">Check Order</a>
        </div>
        <div class="menu-item">
            <img src="BURGER.png" alt="FOOD PIC">
            <h3>Cheeseburger</h3>
            <p>A juicy beef patty topped with melted cheese, lettuce, tomato, and pickles.</p>
            <a href="https://en.wikipedia.org/wiki/Cheeseburger" target="_blank" class="btn btn-outline-dark">Check Order</a>
        <!-- Add more menu items as needed -->
    </section>

    <footer>
       <b><p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p></footer></b>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>