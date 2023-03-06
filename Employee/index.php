<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Employee Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            Employee
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">

          <li class="sidebar-list-item">
            <a href="task.php">Tasks</a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->

      <h1>Home</h1>
      <!-- End Main --> 

    </div>

    <!-- Scripts -->
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>