<?php
session_start();
error_reporting(1);
include("includes/config.php");
extract($_REQUEST);
$que_id=$_GET['que_id'];
$q=mysqli_query($con,"select * from mst_question where que_id='$que_id'");
$res=mysqli_fetch_assoc($q);

if(isset($update)) {
    $query="update mst_question SET que_desc='$addque',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$anstrue' where que_id='$que_id'";	
    mysqli_query($con,$query);
    echo "<script>alert('Quiz Update Success');</script>";	
    echo "<script type='text/javascript'> document.location = 'questionview.php'; </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Learning System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Dashboard</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <?php include("common/header.php"); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Question</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter Question</label>
                    <textarea class="form-control" name="addque" cols="60" rows="2" id="addque">
                        <?php echo $res['que_desc']; ?></textarea>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter Answer 1</label>
                    <input class="form-control"value="<?php echo $res['ans1']; ?>" name="ans1" type="text" id="ans1" size="85" maxlength="85">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter Answer 2</label>
                    <input class="form-control" value="<?php echo $res['ans2']; ?>" name="ans2" type="text" id="ans2" size="85" maxlength="85">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter Answer 3</label>
                    <input class="form-control" value="<?php echo $res['ans3']; ?>" name="ans3" type="text" id="ans3" size="85" maxlength="85">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter Answer 4</label>
                    <input class="form-control" name="ans4"value="<?php echo $res['ans4']; ?>" type="text" id="ans4" size="85" maxlength="85">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Enter True Answer</label>
                   <input class="form-control"value="<?php echo $res['true_ans']; ?>" name="anstrue" type="text" id="anstrue" size="50" maxlength="50">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <a class='btn btn-danger' href='questionview.php'>Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
