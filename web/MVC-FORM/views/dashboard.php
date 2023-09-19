<?php

if($_SESSION['user_type']=='admin')
{
    header('Location: /login');
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
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
            max-width: 250px;
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

        .box {
            background-color: transparent;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #000;
            text-align: center; /* Center the content in each box */
        }

        .box p {
            font-family: arial, sans-serif, bold;
        }

        /* Center the content in the main container */
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 120px; /* Add vertical distance between header and content */
            color: white; /* Set the text color to white */
        }
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


        /* Add any other styles for the form, inputs, buttons, etc. as needed */
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
    <!-- ... Header and other content ... -->

    <div class="content">

        <main>
            <div class="box">
                <h2> ETHICS COMMITTEE APPLICATION FORM</h2>
                <p> This form is a document that prompts you to provide information about your research to ensure you are meeting set standards</p>

            </div>

            <br><br>
            <div class="box">
                <h2> ETHICS COMMITTEE PROJECT INFORMATION FORM</h2>
                <p> This form is to provide the ethics committee with detailed information about the research project, its objectives, methods, potential risks, and how the researchers plan to protect the rights and well-being of the study participants.</p>
            </div>
            

        </main>
        <iframe id="formFrame" src="" width="100%" height="100%" frameborder="0"></iframe>
    </div>

    <!-- ... Script and other content ... -->


    <script src="/assets/js/script.js"></script>
</body>

</html>