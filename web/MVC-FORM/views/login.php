<?php
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Clear the error message after displaying it
?>

<html>

<head>
  <title>Final International University</title>
  <style>
    .error-message {
            color: red;
        }
        body {
      background-image: #f5f5f5;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    content-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: black;
      text-align: center;
    }

    .university-photo {
      width: 100px; /* Adjust the size as per your requirement */
      margin-bottom: 20px;
      color:black;
    }

    .container {
      width: 300px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-group input[type="submit"] {
      background-color: red;
      color: white;
      cursor: pointer;
    }

    .university-photo {
      display: block;
      top: 10px; /* Adjust the position as per your requirement */
      width: 130px; /* Adjust the size as per your requirement */
      margin: 0 auto;
      background-color: black;
    }
  </style>
</head>

<body>

  <img src="/assets/images/ay.jpg" alt="" class="university-photo">

  <div class="content-container">
    <h1>Final International University</h1>

    <!-- Login Page -->
    <div id="login" class="container">
      <h2>Login</h2>
      <form id="login-form" method="post" action="">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <?php if (!empty($error)) { ?>
                <p class="error-message"><?php echo $error; ?></p>
          <?php } ?>
        </div>
        <div class="form-group">
          <input type="submit" name="Submit" value="Login">
        </div>
        <div class="form-group">
          <p>Don't have an account? <a href="/signup">Signup</a></p>
        </div>
      </form>
    </div>
  </div>

  <script>
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');

    /*loginForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Perform login authentication or other actions here
      console.log('Login:', username, password);
    });
    */



   
  </script>
</body>

</html>