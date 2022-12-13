
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/header.php') ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body onload="draw();" class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('layouts/topbar.php') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('layouts/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id="PageName" class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li id="breadcrumb_1" class="breadcrumb-item"><a href="#">Home</a></li>
              <li id="breadcrumb_2" class="breadcrumb-item"><a href="#"></a></li>
              <li id="breadcrumb_3" class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <div class="content fade show ">
      <div class="container-fluid">
        <div class="row">
          <div class=" overlay-wrapper container-fluid">
                      <div class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i><div class="text-bold pt-2">Loading...</div></div>
          <?php if(isset($_view) && $_view) $this->load->view($_view);?>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   <?php $this->load->view('layouts/footer.php') ?>

</div>
<!-- ./wrapper -->



</body>
</html>
