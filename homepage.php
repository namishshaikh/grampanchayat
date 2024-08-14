<?php
include'header.php';

?>

<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
$q1="select * from work";
$result=mysqli_query($con,$q1);
$num1= mysqli_num_rows($result);
mysqli_close($con);
?>  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website Name</title>
  <link rel="stylesheet" href="homepage.css">
</head>

<body>
  <!-- Header Section
  <header>
    <div class="logo">
      <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" height="50px" width="50px">
    </div>
    <div class="name-logo"><b>पंचायत दर्पण</b></div>
    <nav>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-icon"></button>
      </div>
      <div class="login">
        Your login code goes here

        <a href="login.php">Login</a>
      </div>
    </nav>
  </header> -->
  <!-- Photo Slider Section -->
  <section class="slider">
    <div class="slider-container">
      <div class="slide">
        <img src="https://prd.mp.gov.in/Assets/Slider/SliderNIC11.jpg" alt="Slide 1">
      </div>
      <div class="slide">
        <img src="https://prd.mp.gov.in/Assets/Slider/PDS8.jpg" alt="Slide 2">
      </div>
      <div class="slide">
        <img src="https://prd.mp.gov.in/Assets/Slider/SliderWork.jpg" alt="Slide 3">
      </div>
    </div>
  </section>

  <!--about-->
  <section class="about">
  <h1 class="info">About Us</h1>
  <div class="content">
  <div class="about_img">
    <img src="icon/546622-gram-panchayat.jpg" >
  </div>
  <div class="box">
    <!-- <img src="icon/madhay-pradesh-pancha " class="logoo" alt="Watermark"> -->
      <p>This website aims to provide essential information related to the Gram Panchayat. It will share important details such as the list of Panchayat members, their contact information, schedule of events, and updates. Additionally, all government schemes and initiatives will be showcased, catering to specific departments, sectors, or groups, including schemes for farmers, construction projects, cleanliness campaigns, education programs, and more.
      The website will also provide a description of the application process for these schemes, enabling people to easily apply and track their progress. To facilitate public interaction, there will be an option to send messages to all Panchayat members, promoting seamless communication between members and citizens. Furthermore, a secure database will be implemented for efficient data management of the Gram Panchayat. 
      </p>
      <button><a href="about.php">Know more</a></button>
  </div>
  </div>
 
  </section>


   <!-- Updates Section -->
   <section class="updates">
   
    <h2>Yojna Information</h2>
    <div class="container">
    <?php
      for($i=0;$i<$num1;$i++)
      {
          $row=mysqli_fetch_array($result);

         
      ?>
    <div id="cardContainer">
      
      <div class="card">
       
       <h3><?php echo $row['yname']; ?></h3>
       <h5><?php echo $row['wname']; ?><h5>
       <p><?php echo $row['tamount']; ?><p>
       <p><?php echo $row['yearrr']; ?><p>
      </div>
    </div>
     <?php
      }
      ?>

    </div>
       
    
  </section>
  <!-- #region <-->
  <section class="contact">
  <h2>Enquiry / Contact us</h2>
    <div class="container">
    <div class="help-like Form">
      
      <form action="#" method="post">
       
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
    </div>
  </section>
 
  
  <footer>
     
<!-- Footer Section -->
  </div>
  <nav class="contact-us">
    <ul class="social-links">
      <li><a href="https://www.facebook.com/">Facebook</a></li>
      <li><a href="https://twitter.com/">Twitter</a></li>
      <li><a href="https://www.instagram.com/">Instagram</a></li>
    </ul>
    <a href="#contact">Contact Us</a>
  </nav>
  
      
      </div>
    </div>
</div>
</body>

  </footer>
</body>
<!-- ... Same HTML structure as above ... -->

<!-- Add this script at the end of the body -->
<script>
    // JavaScript for the image slider
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      updateSlider();
    }
  
    function updateSlider() {
      sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
  
    setInterval(nextSlide, 5000); // Change slide every 5 seconds
  </script>
  
</html>
