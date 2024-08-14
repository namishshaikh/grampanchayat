<?php
include'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Service</title>
  <link rel="stylesheet" type="text/css" href="service.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  
</head>
<body>
  <!-- <header>
    <div class="logo">
      <img src="/myimages/back1.png" height="50px" width="50px">
    </div>
    <div class="name-logo"><b>पंचायत दर्पण</b></div>
    <nav>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-icon"></button>
      </div>
      <div class="login">
        Your login code goes here -->
        <!-- <a href="login.html">Login</a>
      </div>
    </nav>
  </header> -->
  <div class="slideshow-container">

  
    <div class="mySlides fade">
    
      <img src="icon/images/h1.jpg" style="width:100%" height="400px">
    </div>
  
    <div class="mySlides fade">
      
      <img src="icon/images/h2.jpg" style="width:100%" height="400px">
      
    </div>
  
    <div class="mySlides fade">
      
      <img src="icon/images/h3.jpg" style="width:100%" height="400px">
     
    </div>
  
    <script src="service.js"></script>
  

  <main>

    <!-- <div class="help-like Form">
      
      <form action="#" method="post">
        <h2>Enquiry / Contact us</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div> -->
     <br><br>
</head>

<body>
  <!-- content starts here -->
  <div class="container">
    

    <button class="accordion">Form 1</button>
    <div class="accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti molestias necessitatibus quaerat quos incidunt! Quas officiis repellat dolore omnis nihil quo, ratione cupiditate! Sed, deleniti, recusandae! Animi, sapiente, nostrum?
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti molestias necessitatibus quaerat quos incidunt! Quas officiis repellat dolore omnis nihil quo, ratione cupiditate! Sed, deleniti, recusandae! Animi, sapiente, nostrum?
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti molestias necessitatibus quaerat quos incidunt! Quas officiis repellat dolore omnis nihil quo, ratione cupiditate! Sed, deleniti, recusandae! Animi, sapiente, nostrum?
      </p>
    </div>

    <button class="accordion">Form 2</button>
    <div class="accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti molestias necessitatibus quaerat quos incidunt! Quas officiis repellat dolore omnis nihil quo, ratione cupiditate! Sed, deleniti, recusandae! Animi, sapiente, nostrum?
      </p>
    </div>

    <button class="accordion">Form 3</button>
    <div class="accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti molestias necessitatibus quaerat quos incidunt! Quas officiis repellat dolore omnis nihil quo, ratione cupiditate! Sed, deleniti, recusandae! Animi, sapiente, nostrum?
      </p>
    </div>
  </div>
  <!-- content ends here -->

  <script>
    var accordions = document.getElementsByClassName("accordion");

    for (var i = 0; i < accordions.length; i++) {
      accordions[i].onclick = function() {
        this.classList.toggle('is-open');

        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          // accordion is currently open, so close it
          content.style.maxHeight = null;
        } else {
          // accordion is currently closed, so open it
          content.style.maxHeight = content.scrollHeight + "px";
        }
      }
    }
  </script>
</body>
</html>

    
    
    
  </main>
  <div class="wrapper">
    <div class="slider">
      <div class="slide">
        <img src="icon/imgaes/digital_india.jpg" alt="Logo 1"></a>
<a href="url2"><img src="icon/images/moefrd.png" alt="Logo 2"></a>
<a href="url3"><img src="icon/images/mfopr.jpeg" alt="Logo 3"></a>
<a href="url4"><img src="icon/images/make.jpeg" alt="Logo 4"></a>
<a href="url5"><img src="icon/images/incredible.jpeg" alt="Logo 5"></a>
<a href="url6"><img src="icon/images/health.png" alt="Logo 6"></a>
<a href="url7"><img src="icon/images/gov.png" alt="Logo 7"></a>

      </div>
      <div class="slide">
        <img src="im=con/images/digital_india.jpg" alt="Logo 1"></a>
<a href="url2"><img src="icon/images/moefrd.png" alt="Logo 2"></a>
<a href="url3"><img src="icon/images/mfopr.jpeg" alt="Logo 3"></a>
<a href="url4"><img src="icon/images/make.jpeg" alt="Logo 4"></a>
<a href="url5"><img src="icon/images/incredible.jpeg" alt="Logo 5"></a>
<a href="url6"><img src="icon/images/health.png" alt="Logo 6"></a>
<a href="url7"><img src="icon/images/gov.png" alt="Logo 7"></a>

      
      </div>
    </div>
</div>
<footer>
  <div class="footer-content">
    
    <div class="footer-links">
      <ul>
        <li><a href="#privacy">Privacy Policy</a></li>
        <li><a href="#terms">Terms of Service</a></li>
        &nbsp;
      </ul>
    </div>
    <div class="social-links">
      <a href="#contact">Contact </a>
      <a href="#" class="social-icon"><img src="/myimages/facebook.png" height="20px" width="20px" alt="Facebook"></a>
      <a href="#" class="social-icon"><img src="/myimages/twitter.png" height="20px" width="20px" alt="Twitter"></a>
      <a href="#" class="social-icon"><img src="/myimages/instagram.png" height="20px" width="20px" alt="Instagram"></a>
    </div>
  </div>
</footer>

    </div>
  </div>
</div>
</body>


</html>
