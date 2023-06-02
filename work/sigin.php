<html>
<?php include("header.html") ?>
<head>
  <meta charset="utf-8" />
  <title>Responsive Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="sigin.css" />
  <script>
    function validatePassword() {
      var password = document.getElementById("password");
      var confirmPassword = document.getElementById("confirmPassword");

      if (password.value != confirmPassword.value) {
        confirmPassword.setCustomValidity("Passwords do not match.");
      } else {
        confirmPassword.setCustomValidity("");
      }
    }
  </script>
</head>
<body>
  <form action="connect.php" method="post">
    <div class="container">
      <h1 class="form-title">Registration</h1>
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" required minlength="2" maxlength="50"/>
        </div>
        <div class="user-input-box">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter Username" required pattern="[a-zA-Z0-9_]{4,16}{@,.}" title="Username must be alphanumeric (4-16,@ characters)"/>
        </div>
        <div class="user-input-box">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter Email"/>
        </div>
        <div class="user-input-box">
          <label for="phoneNumber">Phone Number</label>
          <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" required pattern="^\d{10}$" title="Phone number must be a 10-digit number"/>
        </div>
        <div class="user-input-box">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter Password" required pattern=".{8,}" title="Password must be at least 8 characters long" oninput="validatePassword()"/>
        </div>
        <div class="user-input-box">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required oninput="validatePassword()"/>
        </div>
      </div>

      <div class="form-submit-btn">
        <input type="submit" value="Register">
      </div>
    </div>
  </form>
</body>
<?php include("footer.html") ?>
</html>
