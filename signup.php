<?php
$success = false;
$user_exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "jetstreamone";

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $email = $_POST['Email'];
    $phone = $_POST['phone'];
    $password = $_POST['Password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  
    $check_sql = "SELECT * FROM signup WHERE UserName = ? OR Email = ? OR PhoneNo = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("sss", $username, $email, $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_exists = true;
    } else {
        $sql = "INSERT INTO signup (UserName, Email, PhoneNo, Password)
                VALUES (?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($sql);
        $insert_stmt->bind_param("ssss", $username, $email, $phone, $hashed_password);

        if ($insert_stmt->execute()) {
            $success = true;
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }

        $insert_stmt->close();
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up | JetStream One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: url('loginbg.jpg') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    .login-container {
      position: relative;
      background-color: #ffffffee;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      max-width: 450px;
      width: 100%;
      z-index: 1;
    }

    .login-logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .login-logo img {
      height: 80px;
    }

    h2 {
      text-align: center;
      color: #023e93;
      font-weight: 600;
    }

    .tagline {
      text-align: center;
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .form-label-icon {
      display: flex;
      align-items: center;
      font-weight: 500;
      color: #023e93;
      margin-bottom: 5px;
    }

    .form-label-icon i {
      margin-right: 8px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #023e93;
    }

    .btn-primary {
      background-color: #023e93;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1351a7;
    }

    .signup-link {
      text-align: center;
      margin-top: 15px;
    }

    .signup-link a {
      color: #023e93;
      font-weight: bold;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="overlay"></div>

  <a href="index.php" class="btn btn-light position-absolute m-3" style="top: 0; left: 0; z-index: 2;">
    <i class="bi bi-house-door-fill"></i> Home
  </a>

  <?php if ($success): ?>
  <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <div id="signupToast" class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <strong>✅ Account created successfully!</strong><br>
          Now you can <a href="login.php" class="text-white text-decoration-underline fw-bold">login to proceed</a>.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <script>
    setTimeout(() => {
      const toastEl = document.getElementById('signupToast');
      const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
      toast.hide();
    }, 5000);
  </script>
  <?php endif; ?>

  <?php if ($user_exists): ?>
  <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <div id="errorToast" class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          ❌ <strong>User already exists!</strong><br>
          Please try logging in or use a different username, email, or phone.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <script>
    setTimeout(() => {
      const toastEl = document.getElementById('errorToast');
      const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
      toast.hide();
    }, 5000);
  </script>
  <?php endif; ?>

  <div class="login-container">
    <div class="login-logo">
      <img src="airplaneheader.png" alt="JetStream One Logo">
    </div>
    <h2><i class="bi bi-person-plus-fill"></i> Sign Up</h2>
    <div class="tagline">Join the journey with JetStream One</div>

    <form method="POST" name="signup" id="signup" onsubmit="return validateForm();">
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-person-fill"></i> Username</label>
        <input name="username" id="username" type="text" class="form-control" placeholder="Choose a username">
      </div>
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-envelope-fill"></i> Email</label>
        <input name="Email" type="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-telephone-fill"></i> Phone Number</label>
        <input name="phone" type="tel" class="form-control" placeholder="Enter your phone number">
      </div>
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-lock-fill"></i> Password</label>
        <input name="Password" id="password" type="password" class="form-control" placeholder="Create a password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary fw-bold">Create Account</button>
      </div>
    </form>

    <div class="signup-link mt-3">
      Already have an account? <a href="login.php">Login</a>
    </div>
  </div>
<script>
function validateForm() {
	let x= document.forms["signup"]["username"].value;
	let y= document.forms["signup"]["password"].value;
	if (x=="" || y=="") {
		alert("All fields must be filled out");
		return false;
	}
}
</script>
</body>
</html>
