<?php
session_start();

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "jetstreamone";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['Password'];  

    $sql = "SELECT * FROM signup WHERE UserName = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])) {
            $_SESSION['username'] = $user['UserName'];
            $_SESSION['login_success'] = "You have successfully logged in!";
            header("Location: login.php");
            exit();
        } else {
            $message = "Incorrect password. Please try again.";
        }
    } else {
        $message = "No account found with that username. Please <a href='signup.php'>sign up</a>.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | JetStream One</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
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
      top: 0; left: 0;
      height: 100%; width: 100%;
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
    .message {
      margin-top: 15px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>

  <a href="index.php" class="btn btn-light position-absolute m-3" style="top: 0; left: 0; z-index: 2;">
    <i class="bi bi-house-door-fill"></i> Home
  </a>

  <div class="login-container">
    <div class="login-logo">
      <img src="airplaneheader.png" alt="JetStream One Logo" />
    </div>
    <h2><i class="bi bi-person-circle"></i> Login</h2>

    <form method="POST" action="">
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-person-fill"></i> Username</label>
        <input name="username" type="text" class="form-control" placeholder="Enter your username" required />
      </div>
      <div class="mb-3">
        <label class="form-label-icon"><i class="bi bi-lock-fill"></i> Password</label>
        <input name="Password" type="password" class="form-control" placeholder="Enter your password" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary fw-bold">Login</button>
      </div>
    </form>

    <?php if (!empty($message)): ?>
      <div class="message text-danger fw-semibold"><?= $message ?></div>
    <?php endif; ?>

    <?php if (isset($_SESSION['login_success'])): ?>
      <div class="message text-success fw-bold"><?= $_SESSION['login_success'] ?></div>
      <script>
        setTimeout(() => {
          window.location.href = "index.php";
        }, 2000);
      </script>
      <?php unset($_SESSION['login_success']); ?>
    <?php endif; ?>

    <div class="signup-link mt-3">
      Don't have an account? <a href="signup.php">Sign Up</a>
    </div>
  </div>
</body>
</html>
