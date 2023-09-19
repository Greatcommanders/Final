// Handle form submission for login
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.querySelector('input[type="text"]').value;
    const password = document.querySelector('input[type="password"]').value;
    const userType = document.getElementById("userType").value;

    // Add default username and password for login directly
    const defaultUsername = "user123";
    const defaultPassword = "pass123";
    const isAdmin = userType === "admin";

    if (username === defaultUsername && password === defaultPassword) {
        if (isAdmin) {
            window.location.href = "admin_dashboard.html";
        } else {
            window.location.href = "dashboard.html";
        }
    } else {
        alert("Invalid credentials. Please try again.");
    }
});

// Logout function
function logout() {
    window.location.href = "index.html";
}


///////////////

// Function to show the Home section
function showHome() {
    const dashboardContent = document.querySelector(".content");
    dashboardContent.innerHTML = '<h2>Welcome to the Dashboard</h2> <h2> ETHICS COMMITTEE APPLICATION FORM</h2><p> This form is a document that prompts you to provide information about your research to ensure you are meeting set standards</p><br><br><h2> ETHICS COMMITTEE PROJECT INFORMATION FORM</h2> <p> This form is to provide the ethics committee with detailed information about the research project, its objectives, methods, potential risks, and how the researchers plan to protect the rights and well-being of the study participants.</p>';
}

// Function to show the Forms section
function showForms() {
    const dashboardContent = document.querySelector(".content");
    dashboardContent.innerHTML = `
    
    <title>Forms</title>
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
      }
      .val-box:hover {
        transform: translate(0px, -2px);
      }
    </style>
    <h2>Forms</h2>
    <br>
    <p>if you want to provide information about your research to ensure you are meeting set standards</p>
    <div class="val-box" onclick="openEthicForm(1)">
      <span>Ethic Form A</span>
    </div>
    <br><br>
    <p>if you want to provide the ethics committee with detailed information about the research project</p>
    <div class="val-box" onclick="openEthicForm(2)">
      <span>Ethic Form B</span>
    </div>`;
}

// Function to show the Applications section
function showApplications() {
    const dashboardContent = document.querySelector(".content");
    dashboardContent.innerHTML = `
    <title>Applications Table</title>
    <style>
      /* Styles for the table */
      table {
        width: 100%;
        border-collapse: collapse;
      }
      th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #f2f2f2;
      }
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
    </style>
  </head>
  <body>
    <h2>Applications</h2>
    <table>
      <thead>
        <tr>
          <th>Application Number</th>
          <th>Application Type</th>
          <th>Status</th>
          <th>Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Type A</td>
          <td>Pending</td>
          <td>
            <button class="edit-button" onclick="editApplication(1)">Edit</button>
            <button class="delete-button" onclick="deleteApplication(1)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>002</td>
          <td>Type B</td>
          <td>Approved</td>
          <td>
            <button class="edit-button" onclick="editApplication(2)">Edit</button>
            <button class="delete-button" onclick="deleteApplication(2)">Delete</button>
          </td>
        </tr>
        <!-- Add more application rows here as needed -->
      </tbody>
    </table>`;
}

// Function to show the Settings section
function showSettings() {
    const dashboardContent = document.querySelector(".content");
    dashboardContent.innerHTML = `
      <h2>Settings</h2>
      <button onclick="logout()">Logout</button>`;
}

// Function to open Ethic Forms in the dashboard
function openEthicForm(formNumber) {
    const dashboardContent = document.querySelector(".content");

    // Clear the dashboard content
    dashboardContent.innerHTML = "";

    // Load the respective Ethic Form based on the formNumber
    if (formNumber === 1) {
        // Load Ethic Form A
        dashboardContent.innerHTML = '<object type="text/html" data="ethic3.html" width="100%" height="700px"></object>';
    } else if (formNumber === 2) {
        // Load Ethic Form B
        dashboardContent.innerHTML = '<object type="text/html" data="ethic second form.html" width="100%" height="700px"></object>';
    }
}

// Function to edit an application (placeholder function)
function editApplication(applicationNumber) {
    // Replace this with your actual edit functionality
    alert("Edit application " + applicationNumber);
}

// Function to delete an application (placeholder function)
function deleteApplication(applicationNumber) {
    // Replace this with your actual delete functionality
    alert("Delete application " + applicationNumber);
}

// Logout function
function logout() {
    window.location.href = "index.html";
}