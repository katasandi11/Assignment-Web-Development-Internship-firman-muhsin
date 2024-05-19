<?php

require('function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "partials/head.php"; ?>
    <title>Account Management</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include "partials/navbar.php" ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php $active = 'y' ?>
        <?php include "partials/sidebar.php" ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->

                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <?php
                                $id = $_GET["id"];
                                $data = mysqli_query($conn, "SELECT * FROM data1 WHERE id = '$id'");
                                $row = mysqli_fetch_row($data);
                                ?>
                                <h4 class="card-title">Update </h4>
                                <hr>
                             
                                    
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" placeholder="" name="id" value="<?= $row[0]; ?>" readonly >
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
    
                                        <input type="text" class="form-control" placeholder="" name="name" value="<?= $row[1]; ?>" readonly required></input>
                                    </div>
                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="email" value="<?= $row[2]; ?>" readonly required></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="phone" value="<?= $row[3]; ?>" readonly required></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        
                                        <input type="text" class="form-control" placeholder="" name="alamat" value="<?= $row[4]; ?>" readonly required></input>
                                    </div>

                                    <a href="index.php" class="ml-3 btn btn-primary btn" style="width: 110px;">Kembali</a>
                                  
                                
                                        
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->

                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->

                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    </div>
    </div>
    <footer class="footer text-center text-muted">
            Designed and Developed by <a href="#">Firman Muhsin</a>.
            </footer>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
  
    <!-- Data Table -->
    <?php include "partials/script.php" ?>
</body>

</html>