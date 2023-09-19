<html>
<head>

    <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .menu {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      margin-bottom: 100px;
    }

    .menu-btn {
      padding: 10px 20px;
      background-color: #333333;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .menu-btn.active {
      background-color: #333333;
      color: white;
    }

    .menu-btn:hover {
    background-color: red;
  }

    .content {
      text-align: center;
      display: none;
     
    }

    .content.active {
      display: block;
      
    }

    .horizontal-content {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      
    }

    .content-item {
      margin: 0 10px;
      flex-basis: 22%; /* Adjust the width of each content item */
      margin: 5px 1px; /* Adjust the margin between content items */
      
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      
    }

    th, td {
      padding: 8px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .university-container {
  text-align: center;
  margin-top: 20px;
}

.university-photo {
  display: block;
  width: 100px;
  margin: 0 auto;
  margin-top: 1px;
}

.university-info {
  margin-top: 10px; /* Adjust the margin as needed */
  font-size: 25px;
}

    .content {
  text-align: center; /* Center the content horizontally */
}

.content img {
  display:block;
  width: 130px; /* Adjust the size as needed */
  margin: 0 auto 10px; /* Add some margin at the bottom to separate from the "Log out" link */
  border-radius: 1%; /* Make the photo circular */
  border: 1px solid white; /* Add a border with a color to the photo */
  box-shadow:none; /* Add a shadow effect to the photo */
}

.content p {
  margin:auto; /* Remove the default margin for the paragraph element */
}

.content a {
  display: block;
  background-color: #be1414; /* Change to your desired color for the "Log out" link */
  color: #ffffff;
  text-decoration: none;
  padding:1px;
  border-radius:3px;
  font-size: 12px;
  transition:none;
  margin-top: 1px; /* Add some spacing between the photo and the "Log out" link */
  
}

.content a:hover {
  background-color: red; /* Change to your desired color for the hover effect */
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
  
  .toggle-nav {
    display: flex;
}

.toggle-nav a {
    margin-right: 10px;
    display: inline-block;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
    transform: translate(0, 0);
    transition: transform 0.2s;
    cursor: pointer;
}

.toggle-nav a:hover {
    transform: translate(0px, -2px);
}

.table-navigation {
  display: flex; /* Use flexbox to arrange buttons horizontally */
            justify-content: space-between; /* Distribute space between buttons */
            align-items: center; /* Center buttons vertically */
}
    .button-link {
  font-size: 14px;
  padding: 5px 5px;
}
  </style>
</head>
<body>
  <head>
  <div class="university-container">
    <div class="university-photo">
      <img src="/assets/images/ay.jpg" alt="" class="university-photo">
    </div>
    <div class="university-info">FINAL INTERNATIONAL UNIVERSITY</div>
  </div>
    
    <div class="toggle-nav">
      <div class="container">
        <div class="menu">
          <button class="menu-btn active" onclick="showContent('home')">Home</button>
          <button class="menu-btn" onclick="showContent('applications')">Applications</button>
          <button class="menu-btn" onclick="showContent('profile')">Profile</button>
        </div>
      </div>
    </div>
  </head>

    <div class="content active" id="home-content">
      <div class="horizontal-content">
        <div class="content-item">
          <h2>New Request</h2>

          <?php
            $model = new requestModel();
            $total = $model->count();
            $denied = $model->where(['request_status_id'=>4])->get()->count();
            $approved = $model->where(['request_status_id'=>3])->get()->count();
            $revised = $model->where(['request_status_id'=>2])->get()->count();
            $new = $model->where(['request_status_id'=>1])->get()->count();
          ?>

          <div class="amount">Amount(s): <?= $new ?></div>
        </div>
        <div class="content-item">
          <h2>Approved</h2>
          <div class="amount">Amount(s): <?= $approved ?></div>
        </div>
        <div class="content-item">
          <h2>Denied</h2>
          <div class="amount">Amount(s): <?= $denied ?></div>
        </div>
        <div class="content-item">
          <h2>Revised</h2>
          <div class="amount">Amount(s): <?= $revised ?></div>
        </div>
      </div>
    </div>

    <div class="content" id="applications-content">
      
      <table>
        <thead>
          <tr>
            <th>App No</th>
            <th>App Type</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <?php 


        $applications = RequestModel::orderByDesc('id')->get();
        foreach($applications as &$application)
        {
            $application['request_number'] = $application['id'];
            $application['comment'] = $application['request_comment'];
            $application['status'] = 'new';
            $application['ethic_id'] = 0;
            $application['research_id'] = 0;
            if($application['request_status_id']==1)
            {
                $application['status'] = 'new';
            }
            else if($application['request_status_id']==2)
            {
                $application['status'] = 'revised';
            }
            else if($application['request_status_id']==3)
            {
                $application['status'] = 'approved';
            }
            else if($application['request_status_id']==4){
              $application['status'] = 'denied';
            }
            if($application['request_type_id']==1)
            {
                $application['type'] = 'Ethics';
                $application['ethic_id'] = RequestEthicModel::where(['request_id'=>$application['id']])->first()['ethic_id'];
       
            }
            else if($application['request_type_id']==2)
            {
                $application['type'] = 'Project';
                $application['research_id'] = RequestResearchModel::where(['request_id'=>$application['id']])->first()['research_id'];
   
            }
            
        }
        foreach($applications as $application){ 
        ?>
          <tr>
            <td >
                <?php
                  if($application['request_type_id']==1){
                ?>
                <a href="ethic-application/<?= $application['ethic_id'] ?>"><?= $application['request_number'] ?></a>

                <?php }else ?>
                <?php
                  if($application['request_type_id']==2){
                ?>
                <a href="project-application/<?= $application['research_id'] ?>"><?= $application['request_number'] ?></a>
                <?php } ?>
              
              </td>
              <td><?= $application['type'] ?></td>
              <td><?= $application['request_date'] ?></td>
              <td>
                <?php if($application['status']=='new'){ ?>
                  <span class="btn btn-outline-warning"> <?= $application['status'] ?></span>
                <?php } ?>
                <?php if($application['status']=='revised'){ ?>
                  <span class="btn btn-outline-warning"> <?= $application['status'] ?></span>
                <?php } ?>
                <?php if($application['status']=='approved'){ ?>
                  <span class="btn btn-outline-success"> <?= $application['status'] ?></span>
                <?php } ?>
                <?php if($application['status']=='denied'){ ?>
                  <span class="btn btn-outline-danger"> <?= $application['status'] ?></span>
                <?php } ?>
              </td>
          </tr>
        <?php } ?>
        <div class="table-navigation">
          <button class="button-link" id="previous-button" onclick="navigateRows(-1)">Previous</button>
          <button class="button-link" id="next-button" onclick="navigateRows(1)">Next</button>
        </div>
      </tbody>
      </table>
    </div>

    

    <div class="content" id="profile-content">
   
      <div class="center-content">
        <img src="/assets/images/be.jpg" alt="" class="logo-photo">
        <div
    style="color:#000000">
    <h3>
    <?php 
    echo $_SESSION['userFullName'];
    ?>
    </h3>
    </div>
        <p> <a href="/logout" class="button-link">Log Out</a> </p>
        
      </div>
      
    </div>
  </div>

  <script>

      function showContent(contentId) {
      const contents = document.querySelectorAll('.content');
      const menuBtns = document.querySelectorAll('.menu-btn');

      contents.forEach(content => {
        content.classList.remove('active');
      });

      menuBtns.forEach(btn => {
        btn.classList.remove('active');
      });

      const selectedContent = document.getElementById(`${contentId}-content`);
      const selectedBtn = document.querySelector(`button[data-content="${contentId}"]`);

      selectedContent.classList.add('active');
      selectedBtn.classList.add('active');
    }

    function logOut() {
      // Perform logout action here or redirect to logout page.
      alert("Logged out successfully!");
    }
  
    let currentPage = 0; // Initialize with the first page index
    const rowsPerPage = 5; // Display two rows per page
    const tableRows = document.querySelectorAll('#applications-content tbody tr');
    const previousButton = document.getElementById('previous-button');
    const nextButton = document.getElementById('next-button');

    // Show the initial page
    showCurrentPage();

    // Add this function to handle page navigation
  function navigateRows(direction) {
    currentPage += direction;

    if (currentPage < 0) {
      currentPage = 0;
    } else if (currentPage >= Math.ceil(tableRows.length / rowsPerPage)) {
      currentPage = Math.ceil(tableRows.length / rowsPerPage) - 1;
    }

    showCurrentPage();
  }

  // Helper function to display the current page
  function showCurrentPage() {
    const startIndex = currentPage * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    tableRows.forEach((row, index) => {
      if (index >= startIndex && index < endIndex) {
        row.style.display = 'table-row';
      } else {
        row.style.display = 'none';
      }
    });

    // Update button states
    updateNavigationButtons();
  }

  // Enable/disable navigation buttons based on current page
  function updateNavigationButtons() {
    previousButton.disabled = currentPage === 0;
    nextButton.disabled = currentPage === Math.ceil(tableRows.length / rowsPerPage) - 1;
  }

  // Update button states initially
  updateNavigationButtons();
  </script>
</body>
</html>