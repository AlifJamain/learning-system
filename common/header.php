<?php 
    @$_SESSION['login'];
    error_reporting(1);
?>
<?php
if(isset($_SESSION['login'])) {
?>
<div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="subview.php" class="nav-link">
              <p>
                Lesson
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="sublist.php" class="nav-link">
              <p>
                Quiz
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="result.php" class="nav-link">
              <p>
                Result
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="infoview.php" class="nav-link">
              <p>
                Infomation
              </p>
            </a>
            </li>
             <li class="nav-item">
            <a href="signout.php" class="nav-link">
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
<?php
            } else {
                echo "&nbsp;";
            }
            ?>