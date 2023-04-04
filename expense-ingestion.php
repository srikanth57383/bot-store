<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<head>

    <title>Expense Ingestion Records | IVEOND Bot Store</title>
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

    <?php include 'layouts/vertical-menu-expense.php'; ?>

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
                            <h4 class="mb-sm-0 font-size-18">Expense Ingestion</h4>
                            <!-- <a class="btn btn-primary" href="expense-ingestion-form.php">Add new</a> -->

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



                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- 
        tabs -->
        <div class="col-xl-12">
            <div class="card">
                <!-- end card header -->

                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified " role="tablist">
                        <li class="nav-item waves-effect waves-light ">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">External</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Internal</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home-1" role="tabpanel">
                            <p class="mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <!-- <h4 class="card-title">Expense Ingestion Records</h4> -->
                                        </div>
                                        <div class="card-body">

                                            <!-- filter form -->
                                            <form action="" class="row p-3">
                                            <div class="col-2">
                                                <label for="">From Date
                                            <input type="date" id="min-date" class="form-control date-range-filter"
                                                placeholder="From: yyyy-mm-dd"></label>
                                            </div>
                                            <div class="col-2">
                                            <label for="">To Date
                                            <input type="date" id="max-date" class="form-control date-range-filter"
                                                placeholder="To: yyyy-mm-dd"></label>
                                            </div>
                                            <div class="col-3 p-3">
                                                <button class="btn btn-info" type="button" id="filterform">Reset</button>
                                                </div>

                                            </form>
                                            <!-- date filter -->
                                            

                                            

                                            <table id="datatable"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                    <th>From Date</th>
                                                        <th>To Date</th>
                                                        <th>Purpose</th>
                                                        <th>Department</th>
                                                        <th>Number of People</th>
                                                        <th>Manager Name</th>
                                                   
                                                        <th>Description</th>
                                                        <th>Transport Type</th>
                                                        <th>Lodging Amount Expenses</th>
                                                        <th>Destination State/Country</th>
                                                        <th>Mobile Bill Expenses</th>
                                                        <th>Food Expenses</th>
                                                        <th>Entertainment Amount Expenses</th>
                                                        <th>Total Expenses Amount</th>
                                                        <th>Others Payment Expenses</th>
                                                        <th>Authorized By</th>
                                                        <th>Designation</th>


                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                            $sql = "SELECT `id`, `purpose`, `department`, `statement`, `manager_name`,`category`, `description`, `transport_type`, `tax`, `food`, `entertainment`, `amount`, `others`, `authorized_by`, `designation`,`date`,`attachment` FROM `expense`";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo "<tr>\n";
                                                    echo "    <td>".$row["date"]."</td>\n";
                                                    echo "    <td>".$row["category"]."</td>\n";
                                                    echo "    <td>".$row["purpose"]."</td>\n";
                                                    echo "    <td>".$row["department"]."</td>\n";
                                                    echo "    <td>".$row["statement"]."</td>\n";
                                                    echo "    <td>".$row["manager_name"]."</td>\n";

                                                    echo "    <td>".$row["description"]."</td>\n";
                                                    echo "    <td>".$row["transport_type"]."</td>\n";
                                                    echo "    <td>".$row["tax"]."</td>\n";
                                                    echo "    <td>".$row["food"]."</td>\n";
                                                    echo "    <td>".$row["entertainment"]."</td>\n";
                                                    echo "    <td>".$row["amount"]."</td>\n";
                                                    echo "    <td>".$row["others"]."</td>\n";
                                                    echo "    <td> <a href='./uploads/".$row["attachment"]."' download>Attacment</a></td>\n";
                                                    echo "    <td>".$row["authorized_by"]."</td>\n";
                                                    echo "    <td>".$row["designation"]."</td>\n";


                                                    // echo "    <td>".$row["attachment"]."</td>\n";
                                                  //  echo "    <td> <a href='./uploads/".$row["attachment"]."' download>Attacment</a></td>\n";
                                                    echo "    <td><button id='delExIng' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";

                                                    echo "</tr>\n";
                                                }
                                            }
                                          //  $link->close();
                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end cardaa -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            </p>
                        </div>
                        <div class="tab-pane" id="profile-1" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <!-- <h4 class="card-title">Expense Ingestion Records</h4> -->
                                        </div>
                                        <div class="card-body">
                                               <!-- filter form -->
                                               <form action="" class="row p-3">
                                            <div class="col-2">
                                            <label for="">From Date
                                            <input type="date" id="min-date2" class="form-control date-range-filter2"
                                                placeholder="From: yyyy-mm-dd"></label>
                                            </div>
                                            <div class="col-2">
                                            <label for="">To Date
                                            <input type="date" id="max-date2" class="form-control date-range-filter2"
                                                placeholder="To: yyyy-mm-dd"></label>
                                            </div>
                                            <div class="col-3 p-3">
                                                <button class="btn btn-info" type="button" id="filterform2">Reset</button>
                                                </div>

                                            </form>
                                            <!-- date filter -->
                                            <table id="datatable2"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>From Date</th>
                                                        <th>To Date</th>
                                                        <th>Utility</th>
                                                        <th>Rent</th>
                                                        <th>Travel's</th>
                                                        <th>Employee Loans</th>
                                                        <th>Others</th>
                                                        <th>Total Amount</th>
                                                        <th>Maintence and Repair</th>
                                                        <th>Salaries</th>
                                                        <th>Medical Expenses</th>
                                                        <th>Employee Benefit Programs</th>
                                                        <th>Note</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                            $sql = "SELECT `id`, `from_date`, `to_date`, `utility`, `rent`, `travel`, `emp_loan`, `others`, `amount`, `maintence`, `salary`, `medical`, `emp_benefit`, `note` FROM `internal_expense` ";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo "<tr>\n";
                                                    echo "    <td>".$row["from_date"]."</td>\n";
                                                    echo "    <td>".$row["to_date"]."</td>\n";
                                                    echo "    <td>".$row["utility"]."</td>\n";
                                                    echo "    <td>".$row["rent"]."</td>\n";
                                                    echo "    <td>".$row["travel"]."</td>\n";
                                                    echo "    <td>".$row["emp_loan"]."</td>\n";
                                                    echo "    <td>".$row["others"]."</td>\n";
                                                    echo "    <td>".$row["amount"]."</td>\n";
                                                    echo "    <td>".$row["maintence"]."</td>\n";
                                                    echo "    <td>".$row["salary"]."</td>\n";
                                                    echo "    <td>".$row["medical"]."</td>\n";
                                                    echo "    <td>".$row["emp_benefit"]."</td>\n";
                                                    echo "    <td>".$row["note"]."</td>\n";
                                                    echo "    <td><button id='delExIng' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";

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
                        </div>

                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <!-- internal form -->



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
<script src="assets/js/pages/moment.js"></script>
<script src="assets/js/pages/dataTables.dateTime.js"></script>

<!-- Datatable init js -->
<!-- <script src="assets/js/pages/datatables.init.js"></script> -->

<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
// fot tabs toggle, 
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
        $.fn.dataTable.tables({
            visible: true,
            api: true
        }).columns.adjust();
    });

    // table 1
    var table = $('#datatable').DataTable({
        buttons: ['excel']
    });
    var table2 = $('#datatable2').DataTable({
        buttons: ['excel']
    });
    table.buttons().container()
        .appendTo('#datatable_wrapper .col-md-6:eq(0)');
        table2.buttons().container()
        .appendTo('#datatable2_wrapper .col-md-6:eq(0)');
// Extend dataTables search
$.fn.dataTable.ext.search.push(

    function( settings, data, dataIndex ) {
        if ( settings.nTable.id !== 'datatable' ) {
        return true;
      }
        var min  = $('#min-date').val();
        var max  = $('#max-date').val();
        var from_date = data[0] || 0;
        var to_date = data[1] || 0; // Our date column in the table

        if  ( 
                ( min == "" || max == "" )
                || 
                ( moment(from_date).isSameOrAfter(min) && moment(to_date).isSameOrBefore(max) ) 
            )
        {
            return true;
        }
        return false;
    }

);

$.fn.dataTable.ext.search.push(

function( settings, data, dataIndex ) {
    if ( settings.nTable.id !== 'datatable2' ) {
    return true;
  }
    var min  = $('#min-date2').val();
    var max  = $('#max-date2').val();
    var from_date = data[0] || 0;
    var to_date = data[1] || 0; // Our date column in the table

    if  ( 
            ( min == "" || max == "" )
            || 
            ( moment(from_date).isSameOrAfter(min) && moment(to_date).isSameOrBefore(max) ) 
        )
    {
        return true;
    }
    return false;
}

);

// Re-draw the table when the a date range filter changes
$('.date-range-filter').change( function() {
    table.draw();
} );

// Re-draw the table when the a date range filter changes
$('.date-range-filter2').change( function() {
    table2.draw();
} );

$('#filterform').on('click', function(e)
{
   $('#min-date').val('');
    $('#max-date').val('');
    table.draw();
});

$('#filterform2').on('click', function(e)
{
   $('#min-date2').val('');
    $('#max-date2').val('');
    table2.draw();
});

    $("#datatable").on("click", "#delExIng", function() {

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
                    url: './api/ex-ing-delete.php',
                    data: {
                        id: id
                    }, // serializes the form's elements.
                    success: function(data) {
                        Swal.fire({
                            title: 'Record Deleted Successfully',
                            text: '',
                            icon: 'success',
                            timer: 50000
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

    $("#datatable2").on("click", "#delExIng", function() {

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
            url: './api/internal-expense-del.php',
            data: {
                id: id
            }, // serializes the form's elements.
            success: function(data) {
                Swal.fire({
                    title: 'Record Deleted Successfully',
                    text: '',
                    icon: 'success',
                    timer: 5000
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
    
})
</script>
</body>

</html>