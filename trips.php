<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trips @JetStream One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f8fc;
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
      display: block;
    }

    .footer {
      background-color: #1351a7;
      padding: 35px;
      text-align: center;
      margin-top: 40px;
    }

    .card:hover {
      transform: scale(1.01);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }

    .nav-tabs .nav-link.active {
      background-color: #023e93;
      color: white;
    }

    .badge {
      font-size: 0.9em;
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
    <span class="me-2 fw-semibold text-white"> <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar" style="width:36px;height:36px;border-radius:50%;margin-right:8px;">
 <?= htmlspecialchars($_SESSION['username']) ?></span>
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
  <a href="aboutus.php">About Us</a>
</div>

<marquee>
  " Every great trip begins with a smooth takeoff "
</marquee>

<div class="container my-5">
  <h2 class="text-center text-primary mb-4"><i class="bi bi-airplane-engines"></i> Your Trips</h2>

  <ul class="nav nav-tabs justify-content-center mb-4" id="tripTabs" role="tablist">
    <li class="nav-item">
      <button class="nav-link active" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button" role="tab">Upcoming Trips</button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="past-tab" data-bs-toggle="tab" data-bs-target="#past" type="button" role="tab">Past Trips</button>
    </li>
  </ul>

  <div class="tab-content" id="tripTabsContent">
    
  
    <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Chennai to Mumbai <span class="badge bg-success">Confirmed</span></h5>
              <p class="card-text">Departure: June 15, 2025 – 08:00 AM</p>
              <p class="card-text">Flight No: JS-203 | Gate 12</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Delhi to Singapore <span class="badge bg-warning text-dark">Pending</span></h5>
              <p class="card-text">Departure: July 2, 2025 – 06:30 AM</p>
              <p class="card-text">Flight No: JS-500 | Gate 8</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Bangalore to Kochi <span class="badge bg-success">Confirmed</span></h5>
              <p class="card-text">Departure: June 20, 2025 – 01:15 PM</p>
              <p class="card-text">Flight No: JS-112 | Gate 6</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <div class="tab-pane fade" id="past" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Kolkata to Dubai</h5>
              <p class="card-text">Date: April 3, 2025 | Flight No: JS-320</p>
              <span class="badge bg-secondary">Completed</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Bengaluru to Goa</h5>
              <p class="card-text">Date: March 12, 2025 | Flight No: JS-150</p>
              <span class="badge bg-secondary">Completed</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Hyderabad to Chennai</h5>
              <p class="card-text">Date: February 20, 2025 | Flight No: JS-190</p>
              <span class="badge bg-secondary">Completed</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="footer" id="about">
   <h5 style="color:white">© 2025 JetStream One. All Rights Reserved </h5>
   <h5 style="color:white">JetStream One | Privacy Statement | Terms of Use</h5>
   <h5 style="color:white"><a href="aboutus.php" target="_self" style="color: white">About us</a> |<a href="customersupport.php" target="_self" style="color : white"> Customer Support</a> | Policy | Media & Gallery</h5>
  </div>

</body>
</html>
