<?php

    require_once("header.php");
?>

<html>

<head>

    <title>ETHICS COMMITTEE APPLICATION FORM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('/../assets/images/univ.png');
    /* Replace 'your-image-url.jpg' with the URL of your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
        }
        
        .boring {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-decoration-color: red;
            text-align: center;
        }
        
        .middle {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            margin-top: 20px;
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
        
        .child {
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
        
        .box {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #000;
        }
        
        .other {
            font-family: Arial, sans-serif;
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
        
        .radiobuttons label {
            display: block;
            margin-bottom: 10px;
        }
        
        .textbox.enabled {
            background-color: #ffffff;
            border-color: #007bff;
        }
        
        .dynamic-research {
            display: none;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        /*
        input[type="text"] {
            width: 300px;
            padding: 5px;
        }
        
        
        input[type="radio"] {
            margin-right: 5px;
        }
        
        form {
            width: 400px;
            margin: 0 auto;
        }
        */
        
       
         

        .button-link {
    display: block;
    background-color:#333333;
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
    <form method="post" action="">
        <div class="container">

            <h3>ETHICS COMMITTEE APPLICATION FORM</h3>
            <div class="box">
                <p>Studies conducted in Final International University (FIU) and/or studies conducted by FIU personnel/students, which involve collecting data from human participants, are subject to review by the FIU Ethics Committee (EC). Applicants should
                    submit this application form to the FIU EC along with the other required documents (see the Application Check List). Approval of the EC is required before the start of data collection from human participants.</p>
            </div>

            <div>
                <label for="study-title">1.Title of Study:</label>
                <input type="text" id="study-title" name="study_title" class="textbox">
            </div>

            <div class="radiobuttons">
                <td> <label for="study-type">2.Type of Study:</label>
                    <div class="radiobuttons">
                        <label><input type="radio" name="study_type" value="academic-staff" onchange="handleStudyTypeChange()"> Academic Staff Study</label>
                        <label><input type="radio" name="study_type" value="doctorate-thesis" onchange="handleStudyTypeChange()"> Doctorate Thesis</label>
                        <label><input type="radio" name="study_type" value="master-thesis" onchange="handleStudyTypeChange()"> Master Thesis</label>
                    </div>
                    <input type="checkbox" id="otherCheckbox5" onclick="toggleTextBox5()"> Other
                    <input type="text" class="textbox" name="study_type" id="otherTextBox5" disabled>



                    <script>
                        function toggleTextBox5() {
                            var otherCheckbox5 = document.getElementById("otherCheckbox5");
                            var otherTextBox5 = document.getElementById("otherTextBox5");

                            if (otherCheckbox5.checked) {
                                otherTextBox5.disabled = false;
                            } else {
                                otherTextBox5.disabled = true;
                            }
                        }
                    </script>
                </td>
            </div>
            <p>3.Researcher's</p>

            <div>
                <label for="name">Name and Surname:</label>
                <input type="text" id="name" name="researcher_full_name_1" class="textbox">
            </div>

            <div>
                <label for="department">Department:</label>
                <input type="text" id="department" name="researcher_department_1" class="textbox">
            </div>

            <div>
                <label for="institute">Institute:</label>
                <input type="text" id="institute" name="researcher_institute_1" class="textbox">
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="researcher_phone_1" class="textbox">
            </div>

            <div>
                <label for="address">Address:</label>
                <textarea id="address" class="textbox" name="researcher_address_1" rows="3"></textarea>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="researcher_email_1" class="textbox" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                <span class="hint">Enter a valid email address (e.g., example@example.com)</span>
            </div>


            <div class="other">
                <p>4.Other researchers (if any)</p>
            </div>


            <div>
                <label for="dynamic-name">Name and Surname:</label>
                <input type="text" id="dynamic-name" name="researcher_full_name_2" class="textbox">
            </div>

            <div>
                <label for="dynamic-institute">Institute:</label>
                <input type="text" id="dynamic-institute" name="researcher_institute_2" class="textbox">
            </div>

        </div>

        <script>
            const studyTypeRadios = document.querySelectorAll('input[name="study-type"]');
            const dynamicResearchSection = document.querySelector('.dynamic-research');

            studyTypeRadios.forEach(radio => {
                radio.addEventListener('change', () => {
                    if (radio.value === 'other') {
                        dynamicResearchSection.style.display = 'block';
                    } else {
                        dynamicResearchSection.style.display = 'none';
                    }
                });
            });
        </script>




        <div class="container">

            <div class="advisor">
                <p>5.Advisor's/Supervising Faculty Member's (Undergraduate students conducting research must have an academic advisor/instructor supervising their research):</p>


                <div class="other">
                    <div>
                        <label for="Title">Title:</label>
                        <select name="language" id="language">
                            <option value="">Prof. Dr.</option>
                            <option value="Assoc. Pro. Dr.">Assoc. Pro. Dr.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Instr.">Instr.</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="Name and Surname:">Name and Surname:</label>
                        <input type="text" id="Name and Surname:" name="supervisor_full_name" class="textbox">
                    </div>

                    <div>
                        <label for="Department:">Department:</label>
                        <input type="text" id="Department:" name="supervisor_department" class="textbox">
                    </div>

                    <div>
                        <label for="address:">Address:</label>
                        <input type="text" id="Address:" name="supervisor_address" class="textbox">
                    </div>

                    <div>
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="supervisor_phone" class="textbox">
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" class="textbox" name="supervisor_email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                        <span class="hint">Enter a valid email address (e.g., example@example.com)</span>
                    </div>
                </div>

            </div>

            <!-- ... Your existing content ... -->
            <script>
                function handleStudyTypeChange() {
                    const doctoratethesisRadio = document.querySelector('input[value="doctorate-thesis"]');
                    const masterthesisRadio = document.querySelector('input[value="master-thesis"]');
                    const section5 = document.querySelector('.advisor');
            
                    if (doctoratethesisRadio.checked || masterthesisRadio.checked) {
                        section5.style.display = 'block';
                    } else {
                        section5.style.display = 'none';
                    }
                }
            
                // Call the function once on page load to handle the initial state.
                handleStudyTypeChange();
            </script>
        </div>



        <div class="container">
            <div class="advisor">
                <p>6. Expected time frame of the study:</p>
            </div>
            <div>
                <label for="Start:">Start:</label>
                <input type="date" id="Start:" name="expected_start_date" class="textbox">
            </div>

            <div>
                <label for="End:">End:</label>
                <input type="date" id="End:" name="expected_end_date" class="textbox">
            </div>

            <div class="middle">
                <p>The start date of the study should be at least three weeks from your date of application.</p>
            </div>

        </div>


        <div class="container">
            <div class="advisor">
                <p>7. Organizations, institutions in which data collection is planned to be accomplished:</p>
            </div>

            <div id="organizations">
                <div>
                    <label for="a.">a.</label>
                    <input type="text" id="a." name="data_collection_institution_1" class="textbox">
                </div>
                <div>
                    <label for="b.">b.</label>
                    <input type="text" id="b." name="data_collection_institution_2" class="textbox">
                </div>
            </div>

            <button onclick="addTextbox()">Add More</button>

            <!-- ... Your existing content ... -->

        </div>

        <script>
            function addTextbox() {
                var div = document.createElement('div');
                var label = document.createElement('label');
                var input = document.createElement('input');
                var count = document.getElementById('organizations').getElementsByTagName('input').length + 1;

                label.setAttribute('for', 'textbox-' + count);
                label.textContent = String.fromCharCode(96 + count) + '.';

                input.setAttribute('type', 'text');
                input.setAttribute('id', 'textbox-' + count);
                input.setAttribute('class', 'textbox');

                div.appendChild(label);
                div.appendChild(input);

                document.getElementById('organizations').appendChild(div);
            }
        </script>




        <div class="container">
            <div class="advisor">
                <p>8.Is the approval/permission of an institution or organization other than IFU required for data collection?</p>
                <label>
            <input type="radio" name="approval" value="yes" onclick="toggleTextBox1(true)"> Yes
            </label>
                <label>
            <input type="radio" name="approval" value="no" onclick="toggleTextBox1(false)"> No
            </label>
                <br>
                <label for="institution">If yes, please specify :</label>
                <input type="text" id="institution" name="other_institution" disabled>
            </div>


        </div>

        <script>
            function toggleTextBox1(enable) {
                var textBox = document.getElementById("institution");
                textBox.disabled = !enable;
            }
        </script>


        <div class="container">
            <div class="advisor">


                <p>9.Project Funding Status</p>
            </div>
            <form>
                <label>
                <input type="radio" name="study_support" value="supported" onclick="handleRadioButtonClick()" />
                Supported
            </label>
                <label>
                <input type="radio" name="study_support" value="not_supported" onclick="handleRadioButtonClick()" />
                Not Supported
            </label>
                <br />


                <label>
                <input type="radio" name="funding" value="university" onclick="handleRadioButtonClick()" />
                University
            </label>
                <label>
                <input type="radio" name="funding" value="tubitak" onclick="handleRadioButtonClick()" />
                TUBITAK
            </label>


                <br />
                <label>
                <input type="radio" name="funding" value="international" onclick="handleRadioButtonClick()" />
                International
            </label>
                <br />
                <input type="text" id="textbox1" class="textbox" />
                <br />
                <label>
                <input type="radio" name="funding" value="other" onclick="handleRadioButtonClick()" />
                Other
            </label>
                <br />
                <input type="text" id="textbox2" name="other_institution" class="textbox" />
                <br />
                <button type="button" onclick="clearChoices()">Clear</button>


        </div>
        <script>
            const originalChecked = document.querySelector('input[name="funding"]:checked');
            const originalTextbox1Value = document.getElementById('textbox1').value;
            const originalTextbox2Value = document.getElementById('textbox2').value;

            function handleRadioButtonClick() {
                const supportedRadio = document.querySelector('input[value="supported"]');
                const notSupportedRadio = document.querySelector('input[value="not_supported"]');
                const texbox1 = document.getElementById('textbox1');
                const texbox2 = document.getElementById('textbox2');

                if (supportedRadio.checked) {
                    // Enable all radio buttons and textboxes
                    enableRadiosAndTextboxes(true);
                } else if (notSupportedRadio.checked) {
                    // Disable all radio buttons and textboxes
                    enableRadiosAndTextboxes(false);
                }
            }

            function enableRadiosAndTextboxes(enable) {
                const radios = document.querySelectorAll('input[name="funding"]');
                const texboxes = document.querySelectorAll('input[type="text"]');

                for (const radio of radios) {
                    radio.disabled = !enable;
                }

                for (const textbox of texboxes) {
                    textbox.disabled = !enable;
                }
            }

            function resetChoices() {
                const radios = document.querySelectorAll('input[name="funding"]');
                const texboxes = document.querySelectorAll('input[type="text"]');

                for (const radio of radios) {
                    if (radio === originalChecked) {
                        radio.checked = true;
                        handleRadioButtonClick();
                    } else {
                        radio.disabled = false;
                        radio.checked = false;
                    }
                }

                for (const textbox of texboxes) {
                    if (textbox.id === 'textbox1') {
                        textbox.value = originalTextbox1Value;
                        textbox.disabled = originalChecked.value !== 'supported';
                    } else {
                        textbox.value = originalTextbox2Value;
                        textbox.disabled = true;
                    }
                }
            }

            function clearChoices() {
                const radios = document.querySelectorAll('input[name="funding"]');
                const texboxes = document.querySelectorAll('input[type="text"]');

                for (const radio of radios) {
                    radio.checked = false;
                    radio.disabled = false;
                }

                for (const textbox of texboxes) {
                    textbox.value = '';
                    textbox.disabled = true;
                }
            }
        </script>



        <div class="container">
            <div class="middle">
                <p>Will the ethical approval be used for a project submission (TUBITAK, EU projects etc.)?</p>
            </div>
            <label>
                <input type="radio" name="approval" value="yes" > yes
            </label>
            <label>
                <input type="radio" name="approval" value="no" > no
            </label>


        </div>





        <div class="container">
            <div class="advisor">
                <p>10. Status of the application</p>
            </div>
            <form id="applicationForm">
                <br>
                <input type="radio" name="status" value="new">New
                <input type="radio" name="status" value="revised">Revised
                <input type="radio" name="status" value="extension">Extension of a Previous Study
                <input type="radio" name="status" value="reporting_changes">Reporting Changes
                <br><br>
                <div class="box">
                    <label>Protocol No (this is on your approval letter):</label>
                    <input type="text" name="protocolNumber"><br><br>
                    <label>The new expected date of completion:</label>
                    <input type="text" name="expectedDate"><br><br>
                    <label>If this is an extension of a previous project, does the current study show any differences from the previously
        approved one? </label>
                    <input type="radio" name="changes" value="yes">Yes
                    <input type="radio" name="changes" value="no">No
                    <p>If yes, please complete the box below (reporting changes)</p>
                    <br><br>
                </div>


                <div id="changesBox" style="display: none;">
                    <p>Reporting changes (if any)</p>
                    <div class="box">
                        <label>Protocol No:</label>
                        <input type="text" name="reporting_changes_protocol_number" class="textbox"><br><br>
                        <label>Please explain the changes you want to make (e.g., adding a new researcher to the research team, adding a
        new measure, adding a new study similar to your approved study) in a simple language so that people with
        no expertise in the field can understand (two parahraphs maximum). If, your change(s) will be new informed
        consent form, debriefing form, etc., submit these forms together with the revised application to the Ethics
        Committee.</label>
                        <input type="text" name="unexpected_situations" class="textbox"><br><br>
                        <label>Is the reason for the proposed changes an unexpected situation that happens to a participant in the study
        (e.g., an event that could harm the participant's psychological or physical health)?</label>
                        <input type="radio" name="refuse" value="accept">yes
                        <input type="radio" name="refuse" value="refuse">no
                        <br><br>
                        <label>If your answer is yes; describe the unexpected situation that requires you to make changes. Please indicate
        what measures you have taken to prevent similar situations from occurring in the future</label>
                        <input type="text" name="unexpected_situations" class="textbox">
                    </div>

                </div>

                <br><br>
                <div class="boring">
                    <p style="color: red;">THE FOLLOWING QUESTIONS SHOULD ONLY BE ANSWERED IF THE APPLICATION IS NEW OR REVISED (see item 10.)</p>
                </div>


                <label>11. Please explain the purpose of your study and the research question you are trying to answer with this study.
        Write it in a simple language so that people without expertise in the field can understand (maximum of two
        paragraphs).</label>

                <textarea id="gel" class="textbox" name="study_purpose" rows="3"></textarea>


                <label>12. Write down your data collection process, including the method, scale, tools and techniques to be used.
        (Submit a copy of any measure or questionnaire used in the research with this document.)</label>

                <textarea id="fer" name="collection_methods" class="textbox" rows="3"></textarea>


        </div>

        <script>
            const statusRadios = document.querySelectorAll('input[name="status"]');
            const changesRadios = document.querySelectorAll('input[name="changes"]');
            const changesBox = document.getElementById('changesBox');
            const refuseRadio = document.querySelector('input[name="refuse"]');
            const cTextBox = document.querySelector('input[name="C"]');
            const protocolNumberInput = document.querySelector('input[name="protocolNumber"]');
            const expectedDateInput = document.querySelector('input[name="expectedDate"]');
            const gelInput = document.querySelector('input[name="gel"]');
            const ferInput = document.querySelector('input[name="fer"]');

            function disableAllInputs() {
                const inputs = document.querySelectorAll('input[type="text"], input[type="radio"]');
                inputs.forEach(input => input.disabled = true);
            }

            function enableGelAndFer() {
                gelInput.disabled = false;
                ferInput.disabled = false;
            }

            function enableProtocolAndExpectedDate() {
                protocolNumberInput.disabled = false;
                expectedDateInput.disabled = false;
                changesBox.style.display = 'none';
                cTextBox.disabled = true;
                refuseRadio.disabled = true;
            }

            function enableABC() {
                const abcInputs = document.querySelectorAll('input[name="A"], input[name="B"], input[name="C"], input[name="refuse"]');
                abcInputs.forEach(input => input.disabled = false);
                changesBox.style.display = 'block';
                refuseRadio.addEventListener('change', function() {
                    cTextBox.disabled = this.value === "refuse";
                });
            }

            function handleStatusChange() {
                if (this.value === "new" || this.value === "revised") {
                    enableGelAndFer();
                    disableAllInputs();
                    gelInput.disabled = false;
                    ferInput.disabled = false;

                } else if (this.value === "extension") {
                    enableProtocolAndExpectedDate();
                } else if (this.value === "reporting_changes") {
                    enableABC();
                }
            }

            statusRadios.forEach(radio => radio.addEventListener('change', handleStatusChange));

            changesRadios.forEach(radio => radio.addEventListener('change', function() {
                if (this.value === "yes") {
                    changesBox.style.display = 'block';
                    enableABC();
                } else {
                    changesBox.style.display = 'none';
                    cTextBox.disabled = true;
                    refuseRadio.disabled = true;
                }
            }));
        </script>



        <div class="container">

            <div class="advisor">
                <p>13. Does the study aim to partially/completely provide the participants with incorrect information in any way. Is there deception? Does the study require secrecy?</p>
            </div>
            <label>
                <input type="radio" name="secrecy" value="yes" > yes
            </label>
            <label>
                <input type="radio" name="secrecy" value="no" > no
            </label>

        </div>


        <div class="container">
            <div class="advisor">
                <p>14.Beyond the minimum stress and discomfort that participants may encounter in their daily lives, does your work contain elements that threaten their physical and/or mental health or that may be a source of stress for them?
                </p>
                <label>
            <input type="radio" name="approval" value="yes" onclick="toggleTextBox9(true)"> Yes
            </label>
                <label>
            <input type="radio" name="approval" value="no" onclick="toggleTextBox9(false)"> No
            </label>
                <br>
                <label for="so">If your answer is yes; what negative effects does your work have on the physical and/or mental health of
                    the participants? Please explain in detail. Please write down the measures taken in order to eliminate or
                    minimize the effects of these elements:</label>

                <textarea type="text" id="so" class="textbox" name="negative_effects"></textarea>
            </div>


        </div>

        <script>
            function toggleTextBox9(enable) {
                var textBox = document.getElementById("so");
                textBox.disabled = !enable;
            }
        </script>


        <div class="container">
            <div class="advisor">
                <p>15. The expected number of participants:</p>
                <input type="text" id="textbox" name="number_of_participants" class="textbox">

            </div>

        </div>

        <div class="container">

            <label class="advisor">16. If you are doing an education or intervention study, will a control group be used? </label>

            <input type="radio" name="studentStatus" value="yes" onclick="toggleLevelOfSchoolSection(true)"> Yes
            <input type="radio" name="studentStatus" value="no" onclick="toggleLevelOfSchoolSection(false)"> No

            <div id="levelOfSchoolSection">

                <div class="advisor">
                    <p>17. From the list presented below, tick the options that best describe the participants:</p>

                </div>

                <input type="checkbox" name="schoolLevel" value="university"> University students
                <input type="checkbox" name="schoolLevel" value="college">Adults in employment
                <input type="checkbox" name="schoolLevel" value="Unemployed adults">Unemployed adults

                <div class="child"><input type="checkbox" name="schoolLevel" value="Preschool children"> Preschool children*</div>
                <p>Will you obtain verbal consent from the children participating in the study? </p>
                <input type="radio" name="studentStatus" value="yes"> Yes
                <input type="radio" name="studentStatus" value="no"> No

                <div class="child"><input type="checkbox" name="schoolLevel" value="Primary school pupils">Primary school pupils*</div>
                <p>Will you obtain verbal consent from the pupils participating in the study? </p>
                <input type="radio" name="studentStatus" value="yes"> Yes
                <input type="radio" name="studentStatus" value="no"> No

                <div class="child"><input type="checkbox" name="schoolLevel" value="Highshool students">Highshool students**</div>
                <div class="child"><input type="checkbox" name="schoolLevel" value="Child workers">Child workers*</div>
                <div class="child"><input type="checkbox" name="schoolLevel" value="The elderly">The elderly</div>
                <div class="child"><input type="checkbox" name="schoolLevel" value="Mentally disabled/challenged individuals">Mentally disabled/challenged individuals*</div>
                <input type="checkbox" name="schoolLevel" value="Physically disabled">Physically disabled/challenged individualsts
                <div class="child"><input type="checkbox" name="schoolLevel" value="Prisoners">Prisoners</div>

                <div class="advisor">
                    <p>If Other (Specify):</p>
                    <input type="checkbox" id="otherCheckbox" onclick="toggleTextBox()"> Other
                    <input type="text" class="textbox" id="otherTextBox" name="other_study_participants" disabled>
                </div>
            </div>

            <script>
                function toggleTextBox() {
                    var otherCheckbox = document.getElementById("otherCheckbox");
                    var otherTextBox = document.getElementById("otherTextBox");

                    if (otherCheckbox.checked) {
                        otherTextBox.disabled = false;
                    } else {
                        otherTextBox.disabled = true;
                    }
                }
            </script>
        </div>
        <script>
            function toggleLevelOfSchoolSection(isStudent) {
                var levelOfSchoolSection = document.getElementById("levelOfSchoolSection");

                if (isStudent) {
                    levelOfSchoolSection.style.display = "block";
                } else {
                    levelOfSchoolSection.style.display = "none";
                }
            }
        </script>




        <div class="container">
            <div class="advisor">
                <p>18. Briefly describe the sample characteristics, special restrictions and conditions for participation (for example, age group restriction, whether there is a requirement to be a member of a certain social group, etc.) Please explain.</p>
                <textarea type="text" id="textbox"  name="participation_condition" class="textbox"></textarea>

            </div>

        </div>


        <div class="container">
            <div class="advisor">
                <p>19. Explain how you will invite participants to the study. If the invitation will be via e-mail, social media, various websites, and similar channels like this, you should insert the text of the announcement into the application file. Please
                    add the textin the textbox below.</p>
                <textarea type="text" id="textbox" name="participation_invitation" class="textbox"></textarea>

            </div>

        </div>

        <div class="container">
            <div class="advisor">
                <p>20. Please tick the method(s) to be used:</p>


                survey<input type="checkbox"> Interview<input type="checkbox"> Observation<input type="checkbox"> Computer test<input type="checkbox"> <br><br> Video/film recording <input type="checkbox"> Voice recording<input type="checkbox"> Physiological
                measurement
                <input type="checkbox"> Biological sample<input type="checkbox"><br><br> Making participants use alcohol, drugs or any other chemical substance <input type="checkbox"> <br><br> Exposure to high stimulation (such as light, sound)
                <input type="checkbox"> Exposure to radioactive material<input type="checkbox"> <br><br>

            </div>

            <div class="advisor">
                <label for="enableTextbox">Other (please specify):</label>
                <input type="checkbox" name="used_methods" id="enableTextbox" />

                <br /><br />

                <input type="text" id="textbox12" name="" class="textbox" disabled/>

            </div>
            <script>
                const checkbox = document.getElementById('enableTextbox');
                const textbox = document.getElementById('textbox12');

                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        textbox12.disabled = false;
                        textbox12.classList.add('enabled');
                    } else {
                        textbox12.disabled = true;
                        textbox12.classList.remove('enabled');
                    }
                });
            </script>





            <div class="container">
                <div class="advisor">
                    <p>21. Write down the possible contributions of this work to your field and/or society (one paragraph at most).</p>
                </div>
                <textarea id="address" class="textbox" name="work_contributions" rows="5"></textarea>



                <div class="advisor">
                    <p>
                        I confirm that the information I have given above is accurate to the best of my knowledge.
                    </p>
                    <br><br>
                    <p>Supervisor's (if any) Name and Surname:</p> <input type="text" id="textbox" name="supervisor" class="textbox">

                    <br><br>


                    <p>Researcher's Name and Surname:</p> <input type="text" id="textbox" name="researcher" class="textbox">
                    <br><br>

                    <div class="val-box">
                        <button type="submit" name="Submit" class="button-link">Submit</button>
                    </div>
                </div>
            </div>
            </div>
        </form>

</body>

</html>