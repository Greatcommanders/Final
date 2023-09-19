<?php

if($_SESSION['user_type']=='admin')
{
    header('Location: /login');
}

require_once("header.php");
?>

<style>
  /* Styles for the 3D rectangle effect */
  .val-box {
    display: inline-block;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
    transform: translate(0, 0);
    transition: transform 0.2s;
    cursor: pointer;
    background-color: gray; /* Add red background color */
    color: white; /* Adjust text color for visibility */
  }
  .val-box:hover {
    background-color: red;
  }
  .val-box:hover {
    transform: translate(0px, -2px);
  }

  /* Center the text within the buttons */
  .val-box span {
    display: block;
    text-align: center;
    font-size: 18px;
  }

  /* Center the content on the page */
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

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Optional: You can customize the background color of the container */
        }
        .container p {
    text-align: center;
    font-size: 25px;
  }
</style>

<div class="content">

        <main>
            <div class="box">
                <h2> ETHICS COMMITTEE APPLICATION FORM</h2>
                <p> if you want to provide information about your research to ensure you are meeting set standards</p>
                <a class="val-box" href="/projects">
                  <span>Ethic Form A</span>
                </a>
            </div>

            <br><br>
            <div class="box">
                <h2> ETHICS COMMITTEE PROJECT INFORMATION FORM</h2>
                <p> if you want to provide the ethics committee with detailed information about the research project</p>
                <a class="val-box" href="/ethics">
                  <span>Ethic Form B</span>
                </a>
            </div>
            

        </main>
        
    </div>


</div>