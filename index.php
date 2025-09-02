<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JetStream One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }
    .header {
      background-color: #023e93;
      padding: 10px 20px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .logo-title {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .logo-title img {
      height: 80px;
    }
    .logo-title .text h1 {
      margin: 0;
      font-size: 36px;
    }
    .logo-title .text h4 {
      margin: 0;
      font-size: 18px;
    }
    
    .header-buttons {
      display: flex;
      gap: 20px;
      align-items: center;
    }
    .header-buttons .btn-link {
      background: linear-gradient(135deg, #023e93 0%, #082f6d 100%);
      color: white;
      text-decoration: none;
      padding: 14px 30px;
      border-radius: 25px;
      font-size: 17px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(2, 62, 147, 0.2);
    }
    .header-buttons .btn-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(2, 62, 147, 0.3);
      background: linear-gradient(135deg, #014fbc 0%, #086af7 100%);
    }
    
    .navbar {
      background-color: #082f6d;
      display: flex;
      padding: 10px 20px;
    }
    .navbar a {
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      font-weight: bold;
    }
    .navbar a:hover {
      background-color: #315cab;
      border-radius: 4px;
    }
    marquee {
      color: white;
      background-color: rgb(140, 166, 194);
      font-size: 18px;
      padding: 10px;
    }
    .carousel-inner img {
      height: 400px;
      object-fit: cover;
    }
    .carousel-caption h5 {
      font-size: 28px;
      font-weight: bold;
    }
    .carousel-caption p {
      font-size: 20px;
    }
    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }
    .column {
      padding: 13px;
      border: 1px solid #ccc;
      background-color: #fff;
      border-radius: 8px;
    }
    .column.side1 {
      flex: 1;
      min-width: 200px;
      background-image: url("worldwide.jpg");
    }
    .column.middle {
      flex: 2;
      min-width: 300px;
      color: white;
      background-image: url("airplane.avif");
    }
    .column.side2 {
      flex: 1;
      min-width: 200px;
      background-image: url("domestic.png");
    }
    .column:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      z-index: 1;
    }
    .video-section {
      display: flex;
      flex-wrap: wrap;
      margin: 40px auto;
      padding: 20px;
    }
    .video-section .text-side {
      flex: 1;
      padding: 20px;
      background-color: #e6f0ff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .video-section .text-side h3 {
      color: #003366;
      font-weight: bold;
    }
    .video-section .text-side ul, .video-section .text-side ol {
      margin-top: 10px;
      margin-left: 20px;
    }
    .video-section .video-side {
      flex: 1;
      padding: 20px;
    }
    video {
      width: 100%;
      max-height: 350px;
      object-fit: cover;
      border: 3px solid #003366;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    table {
      width: 97%;
      margin: 20px;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    th, td {
      border: 1px solid #cccccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #003366;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #e0f7fa;
    }

    .text-side:hover{
      transform: scale(1.03);
    }

    video:hover {
      transform: scale(1.03);
    }
    .footer {
      background-color: #1351a7;
      padding: 20px;
      text-align: center;
    }
    .footer a {
      color: white;
    }
    @media screen and (max-width: 768px) {
      .row, .video-section {
        flex-direction: column;
      }
    }
    .no-gap-bottom {
      margin-bottom: 0 !important;
    }
    .no-gap-top {
      margin-top: 0 !important;
      display: block;
    }
  </style>
</head>
<body>

<div class="header">
  <div class="logo-title">
    <img src="airplaneheader.png" alt="JetStream One Logo">
    <div class="text">
      <h1 style="color: white;">JetStream One</h1>
      <h4>Fly Smarter Go Further</h4>
    </div>
  </div>
  <div class="header-buttons">
    <?php if (isset($_SESSION['username'])): ?>
      <div class="d-flex align-items-center ms-3 gap-3">
        <span class="me-2 fw-semibold text-white">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar" style="width:36px;height:36px;border-radius:50%;margin-right:8px;">
          <?= htmlspecialchars($_SESSION['username']) ?>
        </span>
        <a href="logout.php" class="btn-link">Logout</a>
      </div>
    <?php else: ?>
      <div class="d-flex ms-3 gap-1">
        <a href="login.php" class="btn-link">Login</a>
        <a href="signup.php" class="btn-link">Sign Up</a>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="book.php">Book</a>
  <a href="trips.php">Trips</a>
  <a href="offers.php">Offers</a>
  <a href="#about">About Us</a>
</div>

<div id="destinationCarousel" class="carousel slide no-gap-bottom" data-bs-ride="carousel">

<marquee class="no-gap-top">
  Welcome Aboard JetStream Airlines - Elevate your travel experience with us! &nbsp;&nbsp;
  <a href="book.php">Book Now!!</a>
</marquee>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#destinationCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#destinationCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#destinationCarousel" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#destinationCarousel" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#destinationCarousel" data-bs-slide-to="4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="book.php">
        <img src="switzerland.png" alt="Switzerland" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>Switzerland</h4>
          <p>Experience the majestic Alps and charming villages.</p>
        </div>
      </a>
    </div>
    <div class="carousel-item">
      <a href="book.php">
        <img src="maldives.jpg" alt="Maldives" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Maldives</h5>
          <p>Relax in paradise with crystal-clear waters and white sand beaches.</p>
        </div>
      </a>
    </div>
    <div class="carousel-item">
      <a href="book.php">
        <img src="dubai.jpeg" alt="Dubai" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dubai</h5>
          <p>Explore futuristic architecture, luxury shopping, and desert adventures.</p>
        </div>
      </a>
    </div>
    <div class="carousel-item">
      <a href="book.php">
        <img src="bali.jpg" alt="Bali" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bali</h5>
          <p>Explore lush landscapes and ancient temples in Indonesia’s island paradise.</p>
        </div>
      </a>
    </div>
    <div class="carousel-item">
      <a href="book.php">
        <img src="australia.jpg" alt="Sydney" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sydney</h5>
          <p>Discover the iconic skyline, Broadway shows, and vibrant city life.</p>
        </div>
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#destinationCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#destinationCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-4">
  <h3 class="text-center">Explore Popular Destinations with JetStream Airlines</h3>
  <h3 class="text-center">Fly to the world's most beautiful destinations. Book your dream vacation today!</h3>
</div>

<div class="row">
  <div class="column side1">
    <h2>International</h2>
    <p>JetStream One Airlines specializes in international travel, connecting travelers to leading destinations across the globe. Our network spans countries including the United States, Canada, United Kingdom, France, Germany, United Arab Emirates, Japan, Australia, Singapore, South Africa, and Brazil. With modern aircraft, exceptional service, and global connectivity, we ensure a smooth, world-class flying experience. JetStream One - Bringing the world closer, one country at a time.</p>
    <center>
        <p>Fly Beyond Borders </p>
    </center>
  </div>
 
  <div class="column middle">
    <h2 style="color: white;">Objective</h2>
    <p style="color: white">At JetStream Airlines, we are committed to delivering exceptional air travel experiences with safety, comfort, and reliability at our core. Serving both domestic and international routes, we connect people across the globe - from business professionals to tourists.</p>
    <p>Our modern, fuel-efficient fleet ensures on-time, eco-friendly journeys, while our dedicated team provides personalized service on every flight. With competitive pricing, convenient schedules, and top-tier hospitality, we make flying accessible and enjoyable. More than just transportation, JetStream is a gateway to new experiences and opportunities. We continue to grow through innovation, sustainability, and a passion for elevating every journey.</p>
    <center>
        <p>Fly Smart Fly JetStream </p>
    </center>
  </div>
 
  <div class="column side2">
    <h2>Domestic</h2>
    <p>JetStream One Airlines offers seamless domestic travel, connecting major cities and regional hubs with speed and reliability. Our network ensures easy access to business centers, cultural sites, and tourist spots across the country.

With modern aircraft, reliable service, and on-time schedules, we make every journey smooth and comfortable-whether for work or leisure.
JetStream One - Connecting every corner of the nation, one journey at a time.
</p>
    <center>
        <p>Fly Within. Fly JetStream.</p>
    </center>
  </div>
</div>
<h3 style="text-align: center;color:navy(11, 67, 235)">✈️Innovation in the air. Comfort in every seat. JetStream One-where travel feels right.</h3>


<div class="video-section container">
  <div class="text-side">
    <h3>Why Choose JetStream One?</h3>
    <p>At JetStream One, we place safety, innovation, and customer experience at the heart of every journey.</p>
    
    <h5>✔ Our Safety Features:</h5>
    <ul>
      <li>Advanced Aircraft Health Monitoring Systems (AHMS)</li>
      <li>Real-time weather and turbulence tracking</li>
      <li>Strict COVID-19 safety and hygiene protocols</li>
      <li>Experienced crew with regular emergency drills</li>
    </ul>

    <h5>🚀 Our Innovations:</h5>
    <ol>
      <li>AI-based ticket fare prediction</li>
      <li>Eco-friendly biofuel trial routes</li>
      <li>In-flight virtual reality entertainment</li>
      <li>Mobile app with real-time tracking & upgrades</li>
    </ol>
  </div>

  <div class="video-side">
    <video class="rounded shadow-lg" controls autoplay muted loop>
      <source src="video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>

<pre><h2 style="font-family:Arial, Helvetica, sans-serif;color: navy;">   Available Fights</h2></pre>
<pre><h2 style="font-family:Arial, Helvetica, sans-serif;color: navy;">   International </h2></pre>
<table class="body1">
    <tr>
      <th>Flight Number</th>
      <th>From</th>
      <th>To</th>
      <th>Departure</th>
      <th>Arrival</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>AI101</td>
      <td>New York (JFK)</td>
      <td>London (LHR)</td>
      <td>2025-05-22 08:00</td>
      <td>2025-05-22 20:00</td>
      <td>On Time</td>
    </tr>
    <tr>
      <td>AI202</td>
      <td>Delhi (DEL)</td>
      <td>Dubai (DXB)</td>
      <td>2025-05-22 10:30</td>
      <td>2025-05-22 13:00</td>
      <td>Delayed</td>
    </tr>
  </table>
  <pre><h2 style="font-family: Arial, Helvetica, sans-serif;color:navy">   Domestic</h2></pre>
  <table class="body1">
    <tr>
      <th>Flight Number</th>
      <th>From</th>
      <th>To</th>
      <th>Departure</th>
      <th>Arrival</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>AI104</td>
      <td>Chennai (MAA)</td>
      <td>Bagdogra (IXB)</td>
      <td>2025-05-23 08:00</td>
      <td>2025-05-23 23:00</td>
      <td>Arrived</td>
    </tr>
    <tr>
      <td>BI203</td>
      <td>Delhi (DEL)</td>
      <td>Mumbai (BOM)</td>
      <td>2025-05-23 07:30</td>
      <td>2025-05-23 15:00</td>
      <td>Delayed</td>
    </tr>
  </table>


<div class="footer" id="about">
   <h5 style="color:white">© 2025 JetStream One. All Rights Reserved </h5>
   <h5 style="color:white">JetStream One | Privacy Statement | Terms of Use</h5>
   <h5 style="color:white"><a href="aboutus.php" target="_self" style="color: white">About us</a> |<a href="customersupport.php" target="_self" style="color : white"> Customer Support</a> | Policy | Media & Gallery</h5>
  </div>
      <h5></h5>
</body>
</html>
