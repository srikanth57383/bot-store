<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<head>

    <title>Employee On & Off boarding Records | IVEOND Bot Store</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/vertical-menu-onboarding.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!-- <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Employee On & Off boarding</h4>
                            <a class="btn btn-primary" href="employee-boarding-form.php">Add new</a>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div>

                        </div> -->
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div id="new-search-area" class="search"></div>
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>employee ID</th>
                                            <th>full name </th>
                                            <th>dob </th>
                                            <th>contact_no </th>
                                            <th>email </th>
                                            <th>father name </th>
                                            <th>father contact</th>
                                            <th> gender </th>
                                            <th> marital status </th>
                                            <th> blood grp </th>
                                            <th> id_mark </th>
                                            <th> ESI NO </th>
                                            <th> PF NO </th>
                                            <th>Aadhaar NO </th>
                                            <th> PAN </th>
                                            <th> bank AC NO </th>
                                            <th> IFSC </th>
                                            <th> present address </th>
                                            <th> permanent address</th>
                                            <th> date of joining </th>
                                            <th> designation </th>
                                            <th> job department</th>
                                            <th> job location </th>
                                            <th> CTC inr </th>
                                            <th> incentive</th>
                                            <th> manager</th>
                                            <th> Education</th>
                                            <th> Work History </th>
                                            <th> Family Details</th>

                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM `on_boarding` WHERE `offboarded` ='no' ";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {                                                                                                      
                                                    echo "    <td>".$row["emp_id"]."</td>\n";
                                                    echo "    <td>".$row["full_name"]."</td>\n";
                                                    echo "    <td>".$row["dob"]."</td>\n";
                                                    echo "    <td>".$row["contact_no"]."</td>\n"; 
                                                    echo "    <td>".$row["email"]."</td>\n";
                                                    echo "    <td>".$row["father_name"]."</td>\n"; 
                                                     echo "    <td>".$row["father_contact"]."</td>\n"; 
                                                     echo "    <td>".$row["gender"]."</td>\n";
                                                     echo "    <td>".$row["marital_status"]."</td>\n";
                                                     echo "    <td>".$row["blood_grp"]."</td>\n";
                                                    echo "    <td>".$row["id_mark"]."</td>\n";
                                                    echo "    <td>".$row["esi_no"]."</td>\n";
                                                    echo "    <td>".$row["pf_no"]."</td>\n";
                                                    echo "    <td>".$row["aadhaar_no"]."</td>\n";
                                                    echo "    <td>".$row["pan"]."</td>\n";
                                                    echo "    <td>".$row["bank_ac_no"]."</td>\n";
                                                    echo "    <td>".$row["Ifsc"]."</td>\n";
                                                    echo "    <td>".$row["present_address"]."</td>\n";
                                                    echo "    <td>".$row["permanent_address"]."</td>\n"; 
                                                    echo "    <td>".$row["date_of_joining"]."</td>\n";
                                                    echo "    <td>".$row["designation"]."</td>\n";
                                                    echo "    <td>".$row["job_department"]."</td>\n"; 
                                                    echo "    <td>".$row["job _location"]."</td>\n";
                                                    echo "    <td>".$row["ctc_inr"]."</td>\n";
                                                    echo "    <td>".$row["incentive"]."</td>\n";
                                                    echo "    <td>".$row["manager"]."</td>\n";
                                                    $education = unserialize(trim($row["education"]));
                                                    echo "    <td>";
                                                    foreach($education as $index => $val) {
                                                       foreach($val as $index => $item){
                                                        echo "<li>".$index." : <strong>".$item."</strong></li>";
                                                       }
                                                    }
                                                    echo "</td>\n";
                                                    $service = unserialize(trim($row['service_history']));
                                                    echo "    <td>";
                                                    foreach($service as $index => $val) {
                                                       foreach($val as $index => $item){
                                                        echo "<li>".$index." : <strong>".$item."</strong></li>";
                                                       }
                                                    }
                                                    echo "</td>\n";

                                                    $family = unserialize(trim($row["family"]));
                                                    echo "    <td>";
                                                    foreach($family as $index => $val) {
                                                       foreach($val as $index => $item){
                                                        echo "<li>".$index." : <strong>".$item."</strong></li>";
                                                       }
                                                    }
                                                    echo "</td>\n";                                                   
                                                   echo "    <td><button id='delForex' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";

                                                 
                                                    echo "<td><a  class='btn btn-info' href='employee-boarding-form-edit.php?empid=".$row["emp_id"]."'>Edit</a></td>\n";
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
<!-- <script src="assets/js/pages/datatables.init.js"></script> -->

<script src="assets/js/app.js"></script>
<script>
var table = $("#datatable-buttons").DataTable({
    initComplete: function() {
        $("#datatable-buttons_filter").detach().appendTo('#new-search-area');
    },

    "oLanguage": {
        "sSearch": "Search By Employee ID:"
    },

    "columnDefs": [{
        "searchable": false,
        "targets": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23,
            24, 25, 26, 27, 28, 29
        ]
    }],
    buttons: ['excel']


});

table.buttons().container()
    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');


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
                url: './api/on_boarding_delete.php',
                data: {
                    id: id
                }, // serializes the form's elements.
                success: function(data) {
                    Swal.fire({
                        title: 'Record Deleted Successfully!',
                        text: '',
                        icon: 'success',
                      
                    }).then(function() {
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