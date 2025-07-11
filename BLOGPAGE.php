<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>                
<body>
  <!--Taskbar-->
  <header>
        <nav>
            <ul>
                <li><a href="HOMEPAGEJABI.php">Home</a></li>
                <li><a href="MENUPAGE.php">Menu</a></li>
                <li><a href="ABOUTUSPAGE.php">About us</a></li>
                <li><a href="CONTACTPAGE.php">Contact</a></li>
                <li><a href="FAQPAGE.php">FAQ</a></li>
            </ul>
        </nav>

    </header>
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  position: static;

}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
h2{
  font-style: italic;
  color: #ffffff;
}
body {
  background-color: #FFECB8;
  color: #333;
  font-family: Arial, sans-serif;
  scroll-behavior: smooth;
}
</style>
</head>
<scr>

<div class="header">
  <h2>JABI RES2RANT BRIEF HISTORY</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>JABI SOFT OPENING</h2>
      <h5>Soft Opening, Dec 7, 2017</h5>
      <img src="RES2 OPEN.png" alt="FOOD PIC" style="height:400px;"></img>
      <p>History of JABIREST2</p>
      <p>This is the soft opening of Jabi Res2rant our restaurant name here is previous one.</p>
    </div>
    <div class="card">
      <h2>Our Interior</h2>
      <h5>Captured of Morning, Sep 2, 2017</h5>
      <img src="INSIDE.png" alt="FOOD PIC" style="height:400px;"></img>
      <p>Inside of JABI</p>
      <p>In JABI RES2RANT Early open to our Customers</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h4>About Us</h4>
      <img src="MEM.png" alt="FOOD PIC" style="height:100px;"></img>
      <p>Itec 50 Final Project Members</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <img src="MEM2.png" alt="FOOD PIC"></img><br>
      <img src="MEM3.png" alt="FOOD PIC"></img><br>
      <img src="MEM4.png" alt="FOOD PIC"></img>
    </div>
    <div class="card">
      <h3>Follow us</h3>
      <p>@JABIRE2RANT@gmail.com</p>
      <p>Follow us on our social media platforms for the latest updates and offers.</p>
      <img src="SOCIALLOGO.png" alt="Social Media Icons" style="width: 100px; height: 50px;">
    </div>
  </div>
</div>
</script>
    <!-- Footer-->
     <footer>
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
</body>
</html>