<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<head>

    <title>Credit Memo Records | IVEOND Bot Store</title>
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

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

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
                            <h4 class="mb-sm-0 font-size-18">Credit Memo</h4>
                            <a class="btn btn-primary" href="Credit-memo-form.php">Add new</a>

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
                                <h4 class="card-title">Credit Memo Records</h4>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Number</th>
                                            <th>Date</th>
                                            <th>Bill From Company Name</th>
                                            <th>Bill From Company Address</th>
                                            <th>Bill From Company Phone No</th>
                                            <th>Bill From Company Email</th>
                                            <th>Bill To customer Name</th>
                                            <th>Bill To customer Address</th>
                                            <th>Bill To customer Phone No</th>
                                            <th>Bill To Customer Email</th>
                                            <th>Invoice</th>
                                            <th>Order</th>
                                            <th>Sales Person</th>
                                            <th>Payment Term</th>
                                            <th>Shipping Date</th>
                                            <th>Order Details</th>
                                            <th>Authorized By</th>
                                            <th>Name & Designation</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                            $sql = "SELECT `id`, `number`, `date`, `ComingFromCompanyName`, `GoingToCompany_Name`, `ComingFromCompanyAddress`,
                                             `GoingToCompanyAddress`, `ComingFromCompanyPhoneNo`, `Going ToCompanyPhoneNo`, `Invoice`, `Order`, `SalesPerson`, `PaymentTerm`, 
                                             `ShippingDate`, `orderdetails`, `AuthorizedBy`, `Name_Designation`, `created _at`, `comp_mail`, `cust_mail` FROM `creditmemo`";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo "<tr>\n";
                                                    echo "    <td>".$row["id"]."</td>\n";
                                                    echo "    <td>".$row["number"]."</td>\n";
                                                    echo "    <td>".$row["date"]."</td>\n";
                                                    echo "    <td>".$row["ComingFromCompanyName"]."</td>\n";
                                                    echo "    <td>".$row["ComingFromCompanyAddress"]."</td>\n";
                                                    echo "    <td>".$row["ComingFromCompanyPhoneNo"]."</td>\n";
                                                    echo "    <td>".$row["comp_mail"]."</td>\n";
                                                    echo "    <td>".$row["GoingToCompany_Name"]."</td>\n";
                                                    
                                                    echo "    <td>".$row["GoingToCompanyAddress"]."</td>\n";
                                               
                                                    echo "    <td>".$row["Going ToCompanyPhoneNo"]."</td>\n";
                                                    echo "    <td>".$row["cust_mail"]."</td>\n";
                                                    echo "    <td>".$row["Invoice"]."</td>\n";
                                                    echo "    <td>".$row["Order"]."</td>\n";
                                                    echo "    <td>".$row["SalesPerson"]."</td>\n";
                                                    echo "    <td>".$row["PaymentTerm"]."</td>\n";
                                                    echo "    <td>".$row["ShippingDate"]."</td>\n";
                                                    $orderDetailsSerialized = unserialize(trim($row['orderdetails']));
                                                    echo "    <td>";
                                                    foreach($orderDetailsSerialized as $index => $val) {
                                                       foreach($val as $index => $item){
                                                        echo "<li>".$index." : <strong>".$item."</strong></li>";
                                                       }
                                                    }
                                                    echo "    <td>".$row["AuthorizedBy"]."</td>\n";
                                                    echo "    <td>".$row["Name_Designation"]."</td>\n";
                                                  //  echo "    <td>".$row["created _at"]."</td>\n";
                                                    echo "    <td><button id='delForex' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";

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
                url: './api/creditmemo-delete.php',
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