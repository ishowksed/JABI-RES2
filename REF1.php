<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Karl Works</title>
    <!--Taskbar--> <nav>
    <a href="Section1.html">Introduction</a>
    <a href="Section2.html">Bookmark</a>
    <a href="Section3.html">Images</a>
    <a href="Section4.html">Contact</a>
  </nav>
<style>
      a {
      display: inline-block;
      padding: 10px 20px;
      background-color:rgb(255, 255, 255);
      color:rgb(0, 0, 0);
      text-decoration: none;
      border-radius: 40px;
      margin-bottom: 20px;
     
 }
         a:hover {
      background-color: rgba(179, 176, 184, 0.521);
     }
   
      .myHeader {
        background-color: aqua;
        color: rgb(0, 0, 0);
        padding-inline:20px;
        border-radius: 40px;
        text-align: center;
        font-style: normal;
        margin-inline: 1px;
        padding-bottom: 30px;
        scroll-padding: 100px;

 }
      body {
         background-image: url("PIC2.jpg");
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: 100% 100%;
 }
    html {
         scroll-behavior: smooth;
         scroll-padding: 1rem;
         text-align: center;
         font-style: normal


 }
</style>
</head>


<!-- Section 1 -->
<div class="myHeader">
<b><h2>Section: 1 Introduction </h2></b>
   <b><h2>Welcome to our Web Page</h2></b>


   <p>This is the various HTML concepts including hyperlinks, bookmarks, images, and styling.
        Scroll down or use the navigation bar to explore different sectors.</p>
</div>
<br>
<!-- Section 2 -->
<div class="myHeader">
  <b><h2>Section: 2 Images and Floating Images</h2></b>
  <h2>Using images in HTML</h2>
 
      <p>Below are example of images,floating images, and clickable image links.</p>
      <a href="https://cvsu.edu.ph">


     
          <img src="CVSU.jpg" alt="CVSU"style="width: 50px;
          height: 50px;">
      <p> This is an example of a left-loading image. The text wraps around it.</p>
      <a href="BILOG.gif">


      <img src="BILOG.gif" alt="Circle"style="width: 50px;
          height: 50px;"></a>
      <p>This is an example of a right-loading image. The text wraps around it.</p>
      <img src="BILOG.gif" alt="Circle"style="width: 50px;
          height: 50px;">
      <p>Click the images below to visit W3Schools:</p>
     <a href="https://www.w3schools.com">
 
      <img src="w3.jpg" alt="W3Schools" style="width: 60px;
      height: 60px;">
     </a>
  </div>
<br>




<!--Section 3 -->
<div class="myHeader">
<b><h2>Section 3: Bookmark</h2></b>
<b><h2>Using Bookmark in HTML</h2></b>
<p>Click the the link below to jump the Introduction section</p>
<a href="ITEC-50.html">Go to Introduction</a>
</div>
<br>


<!--Section 4 -->
<div class="myHeader">
<b><h2>Section 4:Contact Section with Email link and Button as a link</h2></b>
<b><h2>Contact us</h2></b>
<p>Have question? Send us a email:</p>
<a href="https://mail.google.com/">Email us</a>
<p>Or Visit our HTML Tutorial by clicking the button below or on the right:</p>
<a href="https://www.w3schools.com/html/default.asp"style="background-color: blue;" >HTML Tutorial</a>
</div>
<br>




</body>
</html>

