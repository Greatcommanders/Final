<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        /* Add any additional styles here */
        /* Style for the header */
        
        header {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            /* Optional: You can customize the background color of the header */
        }
        /* Style for the logo */
        
        .logo {
            max-width: 200px;
            /* Adjust the width as needed */
        }
        /* Style for the login container */
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Optional: You can customize the background color of the container */
        }
        /* Add any other styles for the form, inputs, buttons, etc. as needed */

        .button-link {
    display: block;
    background-color: #333333;
    color: #ffffff;
    text-decoration: none;
    padding: 10px 50px;
    border-radius: 5px;
    font-size: 18px;
    transition: background-color 0.3s ease;
    text-align: center;
    width: fit-content; /* Ensures the button width fits its content */
    margin: 0 auto; /* Centers the button horizontally */
  }

  .button-link:hover {
    background-color: red;
  }

    </style>
</head>

<body>
    <header>
        <div class="logo">FINAL INTERNATIONAL UNIVERSITY</div>
        <img src="assets/images/final.jpg" alt="" class="university-photo">

        <!-- <button class="logout" onclick="logout()">Logout</button>-->

        <div class="toggle-nav">
            <a href="/" class="button-link">Home</a>
            <a href="/forms" class="button-link">Forms</a>
            <a href="/applications" class="button-link">Applications</a>
            <!--a href="/settings" >Settings</a-->
            <a href="/logout" class="button-link">logout</a>

        </div>
    </header>