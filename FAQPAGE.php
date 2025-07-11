<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">
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
  <title>FAQ Example</title>
  <br>
  <style>
    .faq-item {
      margin-bottom: 10px;
      text-align: center;
    }

    body {
      font-family: Arial, sans-serif;
    background-color: #FFECB8;
      
      color: #333;
    }
    .faq-question {
      background-color: #8B3A00;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      width: 80%;
      text-align: center;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .faq-question:hover {
      background-color: #f1a83b;
    }

    .faq-answer {
      max-height: 0;
      position: center;
      overflow: hidden;
      transition: max-height 0.6s ease;
      background: #ffffff;
      padding: 0 15px;
      border-radius: 5px 5px;
      width: 100%;
      text-align: center;
    }

    .faq-answer p {
      margin: 0px 0;
      text-align: center;
      position: left
    }

    .active + .faq-answer {
      max-height: 200px; /* adjust as needed */
      position: center;
      padding: 10px 15px;
      text-align: center;
    }

  </style>
</head>
<body>
  
<h2 style="color: rgb(255, 255, 255);">FAQ</h2>


<div class="container mt-5">
<div class="card shadow p-15 col-sm-10 mx-auto">
            <h3>Ordering Process</h3>
  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">How do I place an order?</button>
    <div class="faq-answer">
      <p>Customers can place orders through the restaurant's website or mobile app.</p>
    </div>
  <br>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">Can I modify my order after it is placed?</button>
    <div class="faq-answer">
      <p style="text-align: center;">Modifications are typically allowed within a short time frame after ordering.</p>
    </div>

 <h3>Payment Information</h3>

<br>
 <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">What payment methods do you accept?</button>
    <div class="faq-answer">
      <pr>Most online restaurants accept credit/debit cards, PayPal, and sometimes cash on delivery.</pr>
    </div>
<br>
    <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">Is my payment information secure?</button>
    <div class="faq-answer">
      <p>Yes, secure payment gateways are used to protect customer information.</p>
    </div>

<br>

<div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">What payment methods do you accept?</button>
    <div class="faq-answer">
      <p>Most online restaurants accept credit/debit cards, PayPal, and sometimes cash on delivery.</p>
    </div>
    </div>  
    </div>


  <script>
    function toggleFAQ(button) {
      button.classList.toggle("active");
    }
  </script>

</body>
</html>


 <footer style="background-color: #333; color: #fff; text-align: center; padding: 1rem; position: fixed; width: 100%; bottom: 0;">
        <p>&copy; 2025 JABI RES2RANT | All Rights Reserved</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>