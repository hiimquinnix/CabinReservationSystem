<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cabin in the Alley</title>
   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/6de27d32b0.js" crossorigin="anonymous"></script></head>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function () {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            
            events: 'fetchevents.php',
            

          });
          calendar.render();
        });

    </script>
</head>

<section class="header">

          <video autoplay loop muted plays-inline class="background-clip">
            <source src="images/cabid.mp4" type="video/mp4">
          </video>
       
    <nav>
      <a href="index.html"><img src="images/logo.png" alt=""></a>
      <div class="nav-links" id="nav-links">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#Amenities">Amenities & Rates</a></li>
          <li><a href="#calendar">Calendar Availability</a></li>
          <li><a href="reserve.php">Reserve now</a></li>
          <a href="logout.php" id="logoutbtn" class="custom-btn">Logout</a>
        </ul> 
      </nav>
      
   </div>
    <div class="text-box">
      <h1>Cabin in the Alley</h1>
      <p>At our welcoming retreat, every guest is invited to transcend the conventional vacation experience. We don't just offer a getaway; we provide an immersive journey where tranquility and a sense of home intertwine. Our goal is to create an environment where each visitor not only feels the escape from the ordinary but also embraces a unique and comforting ambiance. It's more than a mere destination; it's a sanctuary where peace is celebrated, and diverse atmospheres converge to cultivate a truly restful and homely experience. Come, unwind, and let the essence of our retreat redefine your notion of a perfect getaway.</p>
    </div>
  </section>
 <section class="Amenities" id="Amenities">
  <h1>FULL LIST OF AMENITIES AND RATES</h1>
  <p>Discover the amenities that make your stay special.</p>
  
<table>
  <thread>
    <tr>
      <th>Overnight Stay</th>
      <th>Check In: 3:00pm</th>
      <th>Check Out: 1:00pm</th>
    </tr>
    <tbody>
    <tr>
      <th></th>
      <td>Weekdays</td>
      <td>Weekends/Holidays</td>
    </tr>
    <tr>
      <th>19 - 24 pax</th>
      <td>₱24,000</td>
      <td>₱26,000</td>
    </tr>
    <tr>
      <th>13 - 18 pax</th>
      <td>₱18,000</td>
      <td>₱20,000</td>
    </tr>
    <tr>
      <th>7 - 12 pax</th>
      <td>₱13,000</td>
      <td>₱15,000</td>
    </tr>
    <tr>
      <th>6 pax / Below</th>
      <td>₱12,000</td>
      <td>₱14,000</td>
    </tr>
    
    </tbody>
  </thread>
</table>

<br>
<br>
<hr class="solid">

<br>
<section class="gallery" id="gallery">
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 2</div>
      <img src="images/1.jpg"   width="900" height="300" style="width:100%">
      <div class="text">Cabin</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/2.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Infinity swimming pool and jacuzzi</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="images/3.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Living Room</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="images/entertainment and sitting room.png"  width="900" height="300" style="width:100%">
      <div class="text">Entertainment and Sitting room</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">5 / 6</div>
      <img src="images/4.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Bar Counter</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">6 / 7</div>
      <img src="images/5.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Main Bedroom</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">7 / 8</div>
      <img src="images/6.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Main Bathroom</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">8 / 9</div>
      <img src="images/7.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Loft Beds</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">9 / 10</div>
      <img src="images/8.jpg"  width="900" height="300" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>

<ul class="amenities-list">
  <h2>Full Amenities</h2>
  <li>Air-conditioned Bedroom (4 pax capacity) with attached bathroom (with hot and cold water).</li>
  <li>Roomy Loft that could house 20 guests.</li>
  <li>Common bathroom (with hot and cold water).</li>
  <li>Free Internet Access.</li>
  <li>Entertainment Area with Smart TV, Netflix, Sound system, and karaoke.</li>
  <li>Living Room with two sets of seating furniture.</li>
  <li>Fully Equipped outdoor kitchen and dining (with attached toilet) coffee maker, oven, rice cooker, electric kettle, kitchen and dining utensils, refrigerator, pots and pans, gas and stove, and water dispenser with free 5 gallons of mineral water.</li>
  <li>Grilling Area.</li>
  <li>Infinity swimming pool and jacuzzi.</li>
  <li>Car Parking.</li>
</ul>
<br>
</section>
<br>
<br>
<hr class="solid">

<br>
<section class="calendar">
  <h1>CABIN IN THE ALLEY ONLINE CALENDAR </h1>
  <p>Availability is based on Check-in Date. If a date is not marked as BOOKED, it’s still available for overnight booking (Time Slot: 3:00 PM to 1:00 PM). </p>
<br>
</section>
<br>
<br>
<div style=" width: 850px;
margin-top: 30px;
margin-left: auto;
margin-right: auto;
border-collapse: collapse;
font-size: 20px;
position: center;">
  <div id="calendar"></div>
</div>


  
  <script>
    var slideIndex = 1;
  
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
  
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    showSlides(slideIndex);
  </script>
</div>

  <br>
<footer>
    <p>Cabin in the Alley Resort 2023 | All Rights Reserved</p>
  <div class="icons">
    <a href="https://www.facebook.com/cabininthealley" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="mailto:hiimquinnix@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
    <a href="https://www.instagram.com/cabin.in.the.alley?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
  </div>
</footer>


<script src="src/js/jquery.js"></script>
<script src="src/js/sweetalert.min.js"></script>
<script src="src/js/custom.js"></script>

</body>
</html>
