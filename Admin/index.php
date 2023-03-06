<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
       <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            ADMIN DASHBOARD
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">

          <li class="sidebar-list-item">
            <a href="tasks.php">Tasks</a>
          </li>

          <li class="sidebar-list-item">
            <a href="evaluation.php">Evaluation</a>
          </li>

          <li class="sidebar-list-item">
            <a href="department.php">Departments </a>
          </li>

          <li class="sidebar-list-item">
            <a href="designation.php">Designations </a>
          </li>

          <li class="sidebar-list-item">
            <a href="employees.php">Employees</a>
          </li>

          <li class="sidebar-list-item">
            <a href="evaluator.php">Evaluator</a>
          </li>

          <li class="sidebar-list-item">
            <a href="user.php"> Users </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>