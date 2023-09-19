<html>

<head>
  <title>Final International University</title>
  <style>
    body {
      background-image: white;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .content-container {
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
    }
  </style>
</head>

<body>

  <img src="/assets/images/ay.jpg" alt="" class="university-photo">

  <div class="content-container">
    <h1>Final International University</h1>

    <!-- Signup Page -->

    <div id="signup" class="container" style="display:block;">
      <h2>Signup</h2>
      <form method="POST" id="signup-form" action="">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="surname">Surname:</label>
          <input type="text" id="lname" name="surname" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="cnpassword" name="cnpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" name="Submit" value="Signup">
        </div>
        </form>
    </div>
  </div>

  <script>
    //const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');

    /*loginForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Perform login authentication or other actions here
      console.log('Login:', username, password);
    });*/

    /*function showSignup() {
      document.getElementById('login').style.display = 'none';
      document.getElementById('signup').style.display = 'block';
    }*/
/*
    signupForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const name = document.getElementById('name').value;
      const surname = document.getElementById('surname').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;

      if(password != confirmPassword)
      {
        alert('Passwords are not matching');
      }

      // Perform signup process or other actions here
      console.log('Signup:', name, surname, email, password, confirmPassword);
    });*/
  </script>
</body>

</html>