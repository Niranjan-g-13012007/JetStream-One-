<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JetStream One - Customer Support</title>
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

    .logo-title .text {
      text-align: left;
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
      overflow: hidden;
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

    marquee a {
      color: rgb(13, 0, 255);
      text-decoration: underline;
    }

    .support-container {
      padding: 40px 20px;
      background-color: #f9f9f9;
    }
    .support-section {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    .contact-info {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 20px;
      background: #f8f9fa;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .contact-info i {
      font-size: 24px;
      color: #023e93;
    }
    .contact-info h4 {
      margin: 0;
      color: #333;
    }
    .social-links {
      padding: 20px;
      background: #f8f9fa;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .social-icon {
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .social-icon:hover {
      transform: scale(1.2);
      color: #014fbc;
    }
    .contact-info {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 20px;
      background: #f8f9fa;
      border-radius: 8px;
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }
    .contact-info:hover {
      background: #e8f5fe;
      transform: translateY(-2px);
    }
    .ticket-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
    .ticket-form:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
    .support-section {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    .support-section:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
    .accordion-button {
      transition: all 0.3s ease;
    }
    .accordion-button:hover {
      background-color: #e8f5fe;
      color: #014fbc;
    }
    .accordion-button:not(.collapsed) {
      background-color: #e8f5fe;
      color: #014fbc;
    }
    .form-control:focus {
      border-color: #014fbc;
      box-shadow: 0 0 0 0.2rem rgba(1, 79, 188, 0.25);
    }
    .form-select:focus {
      border-color: #014fbc;
      box-shadow: 0 0 0 0.2rem rgba(1, 79, 188, 0.25);
    }
    .btn-primary {
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #014fbc;
      transform: translateY(-1px);
    }
    .btn-link {
      background-color: white;
      color: #086af7;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      display: inline-block;
      transition: all 0.3s ease;
    }
    .btn-link:hover {
      background-color: #e0e0e0;
      color: #014fbc;
      transform: translateY(-1px);
    }
    .checkin-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }
    .checkin-form h3 {
      color: #023e93;
      margin-bottom: 20px;
    }
    .ticket-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }
    .ticket-form h3 {
      color: #023e93;
      margin-bottom: 20px;
    }
    h1 {
      color: navy;
    }
    .section-heading {
      color: navy;
    }
    .ticket-status {
      padding: 20px;
      background: #e8f5fe;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .ticket-status h4 {
      color: #023e93;
      margin: 0;
    }
    .footer {
    background-color: #1351a7;
    padding: 20px;
    text-align: center;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
  <a href="#about">About Us</a>
</div>
<marquee>
  Welcome Aboard JetStream Airlines — Elevate your travel experience with us!
  &nbsp;&nbsp;
  <a href="book.php" target="_self">Book Now!!</a>
</marquee>
<div class="support-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-4">
        <div class="text-center mb-4">
          <h2 class="section-heading">Connect With Us</h2>
          <div class="social-links d-flex justify-content-center gap-3">
            <a href="mailto:niranjang.24it@kongu.edu" class="social-icon" title="Email Us - niranjang.24it@kongu.edu">
              <i class="bi bi-envelope-fill" style="font-size: 24px; color: #023e93;"></i>
            </a>
            <a href="https://www.instagram.com/nirxnjxn_off_/" class="social-icon" target="_blank" title="Instagram - nirxnjxn_off_">
              <i class="bi bi-instagram" style="font-size: 24px; color: #023e93;"></i>
            </a>
            
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="support-section">
          <h2 class="section-heading">Customer Support Center</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="contact-info">
                <i class="bi bi-telephone"></i>
                <div>
                  <h4>Phone Support</h4>
                  <p>+91 1234567890</p>
                  <p>Available 24/7</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-info">
                <i class="bi bi-envelope"></i>
                <div>
                  <h4>Email Support</h4>
                  <p>support@jetstreamone.com</p>
                  <p>Response within 24 hours</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-info">
                <i class="bi bi-chat-dots"></i>
                <div>
                  <h4>Live Chat</h4>
                  <p>Available during business hours</p>
                  <p>Mon-Fri: 9AM-6PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-4">
        <div class="support-section">
          <h2 class="section-heading">Online Check-in</h2>
          <form action="checkin.php" method="POST" class="row g-3">
            <div class="col-md-6">
              <label for="pnr" class="form-label">PNR/Booking Reference</label>
              <input type="text" class="form-control" id="pnr" name="pnr" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Registered Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Check-in Now</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="ticket-form">
          <h3>Create Support Ticket</h3>
          <form action="submit_ticket.php" method="POST">
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="booking">Booking Issues</option>
                <option value="flight">Flight Information</option>
                <option value="baggage">Baggage</option>
                <option value="refund">Refunds</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Ticket</button>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="ticket-status">
          <h4>Check Your Ticket Status</h4>
          <p>Enter your ticket reference number to check the status of your support request.</p>
          <form action="check_status.php" method="GET" class="d-flex gap-2">
            <input type="text" class="form-control" placeholder="Ticket Reference" name="ticket_id">
            <button type="submit" class="btn btn-primary">Check Status</button>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="support-section">
          <h3 class="section-heading">Frequently Asked Questions</h3>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  How do I track my flight status?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  You can track your flight status by visiting our flight status page or using our mobile app.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  What should I do if I miss my flight?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Please contact our customer service immediately to discuss your options for rebooking.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  How can I change my booking?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  You can modify your booking through our website or mobile app. Changes may be subject to fees.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  What is your baggage allowance policy?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Our standard baggage allowance is 20kg for checked baggage and 7kg for cabin baggage. Please check our website for specific route policies.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  How can I check-in online?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Visit our website and enter your PNR and registered email to check-in online. Available 24 hours before departure.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                  What should I do if my flight is delayed?
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Please check our website for updates and contact our customer service for assistance with rebooking or compensation.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                  How can I request special assistance?
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Please inform us at least 48 hours before departure through our website or customer service for special assistance needs.
                </div>
              </div>
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