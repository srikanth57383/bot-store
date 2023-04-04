<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<head>

    <title>Forex Records | IVEOND Bot Store</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
<style>
    th{
        text-transform:capitalize;
    }
</style>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

<?php include 'layouts/vertical-menu-forex.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Forex</h4>
                            <!-- <a class="btn btn-primary" href="forex-form.php">Add new</a> -->

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div> -->

                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Records</h4>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                        <th>Branch code</th>
                                        <th>Account number</th>
                                        
                                        <th>Client First Name</th>
                                        <th>Last Name</th>
                                        <th>Nationality</th>
                                        <th> Mobile Number</th>
                                        <th>Account Balance</th>
                                        <th>Marital Status</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <!-- <th>Delete</th>
                                        <th>view</th> -->
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM `forex`";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo "<tr>\n";
                                                    echo "    <td>".$row["branchcode"]."</td>\n"; 
                                                    echo "    <td>".$row["cardnumber"]."</td>\n"; 
                                                     
                                                    echo "    <td>".$row["first_name"]."</td>\n"; 
                                                    echo "    <td>".$row["last_name"]."</td>\n"; 
                                                    echo "    <td>".$row["nationality"]."</td>\n";
                                                    echo "    <td>".$row["mobilephone"]."</td>\n"; 

                                                    echo "    <td>".$row["account_balance"]."</td>\n"; 
                                                    echo "    <td>".$row["status"]."</td>\n"; 
                                                    echo "    <td>".$row["gender"]."</td>\n"; 
                                                    echo "    <td>".$row["active"]."</td>\n"; 
                                                    
                                                    // echo "    <td><button id='delForex' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";
                                                    // echo "    <td><a class='btn btn-info' href='forexview.php?id=".$row['id']."'>View </a></td>\n";
                                                    echo "</tr>\n";
                                                }
                                            }
                                            $link->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>
<script>
    
$("#datatable-buttons").on("click", "#delForex", function() {

    // get the row id
    var id = $(this).data('id');
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#2ab57d",
        cancelButtonColor: "#fd625e",
        confirmButtonText: "Yes, delete it!"
    }).then(function(result) {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: './api/forex-delete.php',
                data: {
                    id: id
                }, // serializes the form's elements.
                success: function(data) {
                    Swal.fire({
                            title: 'Record Deleted Successfully',
                            text: '',
                            icon: 'success',
                            timer: 5000
                        }
                    ).then(function(){
                    // reload the page after delete successful   
                        location.reload();
                    })
                    
                }
            });             
        }
    });



    // submit delete request

})
</script>
</body>

</html>