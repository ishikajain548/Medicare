<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
require "includes/head.php";
session_start();

require "includes/auth.php";
?>


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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require "includes/header.php" ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require "includes/aside.php"; ?>
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
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Items List</li>
                                  
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <!-- ============================================================== -->


                
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">

                    <!-- column -->
                    <div class="col-12">
                        <!-- Live search starts here---->
                        <div class="form-inline">

                        </div>
                        <!-- Live search ends here---->
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Items List </h4>
        
                                    </div>
                                </div>
                                <div class="float-right"> <a href="add_list.php" class="btn btn-success float-right"> Add Item</a>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle " id="table-data">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th class="border-top-0">S.No</th>
                                            <th class="border-top-0">Item Info</th>

                                            <th class="border-top-0"> Quanitity </th>
                                            <th class="border-top-0 col-span-2"> Action </th>

                                        </tr>
                                    </thead>
                                    <?php

                                    require "includes/conn.php";

                                    if (isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                    } else {
                                        $page = 1;
                                    }

                                    $num_per_page = 10;
                                    $start_from = ($page - 1) * 10;

                                    $sql = "SELECT * FROM store_items limit $start_from,$num_per_page";
                                    //create a query that fetch data from the database
                                    $res = mysqli_query($conn, $sql);

                                    //check if there are any records in the database
                                    if ($res == TRUE) {
                                        $count = mysqli_num_rows($res);
                                        $sn = 1;
                                        if ($count > 0) {
                                            while ($rows = mysqli_fetch_assoc($res)) {
                                                $id = $rows['id'];
                                                $item_name = $rows['item_name'];
                                                $capacity = $rows['capacity'];

                                              

                                    ?>
                                                <tbody id="output">
                                                    <tr>
                                                        <th scope="row"><?php echo $sn++; ?></th>
                                                        <td>
                                                            <p> ID: <b><?php echo "$id"; ?></b></p>
                                                            <p> Name:<b><?php echo "$item_name"; ?></b>

                                                            </p>
                                                            
                                                        </td>
                                                       
                                                        <td><?php echo "$capacity"; ?></td>
                                                        <td>
                                                            <a href="update_items_stock.php?id=<?php echo "$id" ?>" class="btn btn-success" type="button">Update Quanitity</a>
                                                        </td>

                                                    </tr>
                                                </tbody>

                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 md-3">
                    <?php
                    $pr_query = "select * from store_items";
                    $pr_result = mysqli_query($conn, $pr_query);
                    $total_record = mysqli_num_rows($pr_result);

                    $total_page = ceil($total_record / $num_per_page);

                    if ($page > 1) {
                        echo "<a href='items_list.php?page=" . ($page - 1) . "' class='btn btn-warning'>Previous</a>";
                    }


                    for ($i = 1; $i < $total_page; $i++) {
                        echo "<a href='items_list.php?page=" . $i . "' class='btn btn-success'>$i</a>";
                    }

                    if ($i > $page) {
                        echo "<a href='items_list.php?page=" . ($page + 1) . "' class='btn btn-warning'>Next</a>";
                    }
                    ?>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keypress(function() {
                $.ajax({
                    type: 'POST',
                    url: 'action.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>