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
                                <h4 class="card-title">Add New</h4>
                                <hr>
                                <form action="dashboard/functions/complain.php" method="POST">

                                <input type="hidden" placeholder="Auto" id="ticket-number" name="id" readonly><br>

                                <div class="form-group">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Name<span class="text-danger">*</span></label>
                                       
                                    
                                            <input type="input" class="form-control" name="name" required>
                                      
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group wd-2000">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">E-Mail<span class="text-danger">*</span></label>
                                                <input type="input" class="form-control" name="email" required>
                                              
                                                
                                            </div>
                                        </div>

                                 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Phone <span class="text-danger">*</span></label>
                                               
                                                <input type="input" class="form-control" name="phone" required>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row">
                                        <div class="col-md 15">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Address <span class="text-danger">*</span></label>
                                                
                                                <input type="input" class="form-control" name="alamat" required></input>
                                            </div>

                                        
                                            <div class="row">
                                        <div class="col-md 15">
                                            <div class="form-group">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">date <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="created_at" required></input>
                                                </div>

                                          
                                                <input type="hidden" class="form-control" name="updated_at" required></input>

                                        
                                                
                                                <input type="hidden" class="form-control" name="deleted_at" required></input>
                                                
                                                
                                                <input type="hidden" class="form-control" name="sampah" value="1" required></input>
                                        
                                          
                                       
                               
                                    <button type="submit" name="simpan" class="btn waves-effect px-4 waves-light btn-primary">Submit</button>
                                   
                                </form>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <footer class="footer text-center text-muted">
            Designed and Developed by <a href="#">Firman Muhsin</a>.
            </footer>
    <!-- Data Table -->
    <?php include "partials/script.php" ?>
</body>

</html>