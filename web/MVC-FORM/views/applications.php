<?php
    if($_SESSION['user_type']=='admin')
    {
        header('Location: /login');
    }
    require_once("header.php");
?>
<html>
    <style>
      /* Styles for the table */
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 120px;
        color: white; /* Set the text color to white */
      }
      th, td, tr {
        /*padding: 82px;*/
        /*text-align: left;*/
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #f2f2f2;
      }*/
      tr:hover {
        background-color: #f5f5f5;
      }
      /* Styles for the buttons */
      button {
        padding: 6px 12px;
        cursor: pointer;
        
      }
      .edit-button {
        background-color: #4CAF50;
        color: white;
        border: none;
      }
      .delete-button {
        background-color: #f44336;
        color: white;
        border: none;
      }

      .button-link {
    display: block;
    background-color: #333333;
    color: #ffffff;
    text-decoration: none;
    padding: 5px;
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

  
  #applications th {
    background-color: black;
    color: white; /* Set text color to white for better visibility */
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

    <p> </p>
    <p> </p>
    <table id="applications">
      <thead>
        <tr>
          <th>Application Number</th>
          <th>Application Type</th>
          <th>Status</th>
          <th>Comment</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $user_id = $_SESSION['userId']; // Get the current user's ID
        $applications = RequestModel::orderByDesc('id')->where('user_id', $user_id)->get();
        foreach($applications as &$application)
        {
            $application['request_number'] = $application['id'];
            $application['comment'] = $application['request_comment'];
            $application['status'] = 'new';
            $application['ethic_id'] = 0;
            $application['research_id'] = 0;

            $ethicId = 0;
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
            else if($application['request_status_id']==4)
            {
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

            $editLink = '';
            $deleteLink = '';
            
            if ($application['status'] == 'approved' || $application['status'] == 'denied') {
                // If application is approved or denied, disable edit and delete links
                $editLink = '';
                $deleteLink = '';
            } else {
                // If application is not approved or denied, generate edit and delete links
                if ($application['request_type_id'] == 1) {
                    $editLink = "<a class=\"btn btn-outline-success edit-button\" href=\"ethic-application/{$application['ethic_id']}\">Edit</a>";
                    $deleteLink = "<a class=\"btn btn-outline-danger delete-button\" href=\"ethic-delete/{$application['id']}\">Delete</a>";
                } else if ($application['request_type_id'] == 2) {
                    $editLink = "<a class=\"btn btn-outline-success edit-button\" href=\"project-application/{$application['research_id']}\">Edit</a>";
                    $deleteLink = "<a class=\"btn btn-outline-danger delete-button\" href=\"project-delete/{$application['id']}\">Delete</a>";
                }
        }
        //print_r($applications);
        ?>
          <tr>

            
            <td ><?= $application['request_number'] ?></td>
            <td><?= $application['type'] ?></td>
            <td><?= $application['status'] ?></td>
            <td><?= $application['comment'] ?></td>
            <td>
                <?= $editLink ?>
                <?= $deleteLink ?>
                
              </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
     <div class="table-navigation">
        <button class="button-link" id="previous-button" onclick="navigateRows(-1)">Previous</button>
        <button class="button-link" id="next-button" onclick="navigateRows(1)">Next</button>
    </div>

    <script>
        let currentPage = 0;
        const rowsPerPage = 5;
        const tableRows = document.querySelectorAll('#applications tbody tr');
        const previousButton = document.getElementById('previous-button');
        const nextButton = document.getElementById('next-button');

        function navigateRows(direction) {
            currentPage += direction;

            if (currentPage < 0) {
                currentPage = 0;
            } else if (currentPage >= Math.ceil(tableRows.length / rowsPerPage)) {
                currentPage = Math.ceil(tableRows.length / rowsPerPage) - 1;
            }

            showCurrentPage();
        }

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

            updateNavigationButtons();
        }

        function updateNavigationButtons() {
            previousButton.disabled = currentPage === 0;
            nextButton.disabled = currentPage === Math.ceil(tableRows.length / rowsPerPage) - 1;
        }

        showCurrentPage(); // Show the initial page
    </script>
 </body>

  <script>
  
    </script>

    

<!--script src="/assets/js/application.js"></script-->
</html>