<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
    <title>Final International University</title>
    <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 9px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 0;
            margin: 10px 0;
            border-top: 1px solid #000;
            padding-top: 10px;
        }
        
        h3 {
            text-align: center;
            margin: 10px 0;
            border-top: 1px solid #000;
            padding-top: 10px;
        }
        
        .university-photo {
            display: block;
            top: 10px;
            width: 130px;
            margin: 0 auto;
        }
        
        .advisor {
            font-family: Arial, sans-serif;
        }
        
        .textbox {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-color: red;
            border-width: 0.3ch;
        }

        .button-link {
    display: block;
    background-color:red;
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
    background-color: #555555;
  }
  
    </style>

</head>

<body>

    <div class="container">
        <img src="/assets/images/final.jpg" alt="" class="university-photo">
        <h1>Final International University</h1>
        <h3>ETHICS COMMITTEE PROJECT INFORMATION FORM</h3>
    </div>
    <form method="post" action="">
    <div class="container">

        <?php

            //echo 'Application Id :'.$data['appId'];
            $applications = EthicModel::where(['id'=>$data['appId']])->first();
            //print_r($applications);

        ?>
        
        <div class="advisor">
            <p>1. Briefly describe the study to be conducted, including the sub-research questions, and hypotheses if any.</p>
        </div>
        <textarea id="address" class="textbox" name="study_description" rows="9">
            <?= $applications['study_description'] ?>
        </textarea>


    </div>
    <br>
    <div class="container">
        <div class="advisor">
            <p>2. Explain the data collection plan, specifying the methods, scales, tools, and techniques to be used. (Please hand in a copy of all types of instruments such as scales and questionnaires to be used in the study along with this document.)</p>
        </div>
        <textarea id="address" class="textbox" name="data_collection" rows="9">
        <?= $applications['data_collection'] ?>
        </textarea>


    </div>

    <br>
    <div class="container">
        <div class="advisor">
            <p>3. Write down the expected results of your study</p>
        </div>
        <textarea id="address" class="textbox" name="expected_result" rows="9">
        <?= $applications['expected_result'] ?>
        </textarea>


    </div>
    <br>
    <div class="container">
        <label class="advisor">4. Does your study involve items/procedures that may jeopardize the physical and/or psychological well being
            of the participants or that may be distressing for them?</label>

        <div class="radio-buttons" style="display: flex; margin-bottom: 10px ; ">
            <input type="radio" name="titleChoice" id="yesOption" value="yes" onclick="toggleTextBox(true)  "
            <?php
            if($applications['procedures']!='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="yesOption">Yes</label>

            <input type="radio" name="titleChoice" id="noOption" value="no" onclick="toggleTextBox(false)"
            <?php
            if($applications['procedures']=='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="noOption">No</label>
        </div>



        <div class="advisor" style="margin-bottom: 15px;">
            <label for="reasonInput">If yes, please explain. Specify the precautions that will be taken to eliminate or minimize the effects of
                these items/procedures.</label>
            <textarea id="reasonInput" class="textbox" name="procedures" rows="9">
                <?= $applications['procedures'] ?>
            </textarea>

        </div>
    </div>
    <script>
        function toggleTextBox(enable) {

            const reasonInput = document.getElementById("reasonInput");

            if (enable) {

                reasonInput.disabled = false;
            } else {

                reasonInput.disabled = true;
                reasonInput.value="";
            }
        }
    </script>

    <div class="container">
        <label class="advisor">5. Will the participants be kept totally/partially uninformed of the aim of the study (i.e. is there deception)</label>

        <div class="radio-buttons" style="display: flex; margin-bottom: 10px ; ">
            <input type="radio" name="dataChoice" id="yesDataOption" value="yes" onclick="toggleDataTextBox(true)"
            <?php
            if($applications['aim_of_the_study']!='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="yesDataOption">Yes</label>

            <input type="radio" name="dataChoice" id="noDataOption" value="no" onclick="toggleDataTextBox(false)"
            <?php
            if($applications['aim_of_the_study']=='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="noDataOption">No</label>
        </div>

        <div class="advisor" style="margin-bottom: 15px;">
            <label for="dataInput">If yes, explain why. Indicate how this will be explained to the participants at the end of the data
            collection in debriefing the participants</label>
            <textarea id="dataInput" class="textbox" value="<?= $applications['aim_of_the_study'] ?>" name="aim_of_the_study" rows="9">
            <?= $applications['aim_of_the_study'] ?>
            </textarea>
        </div>
    </div>
    <script>
        function toggleDataTextBox(enable) {
            const dataInput = document.getElementById("dataInput");

            if (enable) {
                dataInput.disabled = false;
            } else {
                dataInput.disabled = true;
                dataInput.value="";
            }
        }
    </script>

    <div class="container">
        <div class="advisor">
            <p>6. Indicate the potential contributions of the study to your research area and/or the societ</p>
            <textarea id="address" class="textbox" name="potential_contributions" rows="9">
            <?= $applications['potential_contributions'] ?>
            </textarea>
        </div>
    </div>

    <div class="container">
        <label class="advisor">7. Have you completed any previous research projects?</label>

        <div class="radio-buttons" style="display: flex; margin-bottom: 10px ; ">
            <input type="radio" name="researchChoice" id="yesResearchOption" value="yes" onclick="toggleResearchTextBox(true)"
            <?php
            if($applications['previous_research_projects']!='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="yesResearchOption">Yes</label>

            <input type="radio" name="researchChoice" id="noResearchOption" value="no" onclick="toggleResearchTextBox(false)"
            <?php
            if($applications['previous_research_projects']=='')
            {
                echo 'checked';
            }
            ?>
            >
            <label for="noResearchOption">No</label>
        </div>

        <div class="advisor" style="margin-bottom: 15px;">
            <label for="researchInput"> If your answer is yes, write down the titles, and dates of previous research projects you have conducted or
                that you have taken part in and the names of funding institution(s) if any.</label>
            <textarea id="researchInput" class="textbox" value="<?= $applications['previous_research_projects'] ?>" name="previous_research_project" rows="9">
            <?= $applications['previous_research_projects'] ?>
            </textarea>
        </div>
    </div>
    <script>
        function toggleResearchTextBox(enable) {
            const researchInput = document.getElementById("researchInput");

            if (enable) {
                researchInput.disabled = false;

            } else {
                researchInput.disabled = true;
                document.getElementById("researchInput").value="";
            }
        }
    </script>

    <div class="container">
        <div class="advisor">
            <p>Researcher's name and surname:</p>
            <input type="textbox" name="researcher" value="<?= $applications['researcher'] ?>" class="textbox">signature:



        </div>
    </div>

    

    <div class="container">
        <div class="advisor">
            <br><br>
            <p>Supervisor's / Advisor's name and surname:</p>
            <input type="textbox" name="supervisor" value="<?= $applications['supervisor'] ?>" class="textbox">signature:
        </div>
    </div>

    <?php if($_SESSION['user_type']=='admin'){ ?>

        <div class="container">
            <label>APPLICATION STATUS</label>
            <select class="form-select" name="application_status">
                <option value="approved">Approved</option>
                <option value="denied">Denied</option>
                <option value="revised">Revised</option>
            </select>
        </div>

        <div class="container">
        <label>Comment</label>
            <!-- Use a unique identifier for the comment box -->
            <textarea id="commentBox_<?= $data['appId'] ?>" type="text" name="request_comment" class="form-control" placeholder="Write your comment here"></textarea>
        </div>

    <?php  } ?>

    <div>
        <button type="submit" class="button-link"  name="Submit">Submit</button>
    </div>

    

    </form>

    <script>
     // Add an event listener to the form submission
     document.querySelector("form").addEventListener("submit", function() {
        // Get the comment box element using its unique identifier
        const commentBox = document.getElementById("commentBox_<?= $data['appId'] ?>");

        // Save the comment to local storage
        localStorage.setItem("savedComment_<?= $data['appId'] ?>", commentBox.value);
    });

    // Get the comment box element using its unique identifier
    const commentBox = document.getElementById("commentBox_<?= $data['appId'] ?>");

    // Check if there is stored content in the browser's local storage
    const storedComment = localStorage.getItem("savedComment_<?= $data['appId'] ?>");

    // If there is stored content, populate the comment box
    if (storedComment) {
        commentBox.value = storedComment;
    }
</script>

</body>

</html>