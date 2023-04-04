<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Expense Ingestion form | IVEOND Bot Store</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
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
                            <h4 class="mb-sm-0 font-size-18">Expense Ingestion Form</h4>

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">FOREX Elements</li>
                                </ol>
                            </div> -->
                            <a class="btn btn-primary" href="expense-ingestion.php">Go back to Expense Ingestion</a>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">External Expense Ingestion</h4>

                            </div>
                            <div class="card-body p-4">
                                <form id="expense-ingestion-form">
                                    <div class="row">

                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Purpose<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                onkeydown="return /[a-z]/i.test(event.key)" maxlength="150"
                                                name="purpose" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Department<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="lastname"
                                                onkeydown="return /[a-z]/i.test(event.key)" maxlength="150"
                                                name="department" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="mobile" class="form-label">Number of People<span class='text-danger'>*</span></label>
                                            <input class="form-control " type="number" min="1" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="statement" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Manager Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="" placeholder="" id="Email ID"
                                                onkeydown="return /[a-z]/i.test(event.key)" maxlength="150"
                                                name="manager_name" Required>
                                        </div>
                                    </div>
                                    <!-- <div class="mb-3 col-lg-12">
                                            <table class="table table-bordered table-hover" id="tab_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th class="text-center">
                                                            Date<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Category<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Description<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Air & Train<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Lodging<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                          Tax<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                           Mobile<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Meals & Tips<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                          Entertainment<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Others<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Amout<span class='text-danger'>*</span>
                                                        </th>
                                                         -->

                                    <div class="row">
                                        <div class="mb-3 col-lg-3">
                                            
                                                <label class="form-label">From Date<span class='text-danger'>*</span></label>
                                                <input type="date" class="form-control"id="startdate" name="date" Required>
    
                                        </div>
                                        <div class="mb-3 col-lg-3">
                                            <label for="Email ID" class="form-label">To Date<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="date" placeholder=""id="enddate" max="9999-12-31"
                                                name="category" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Description<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="" placeholder="" id="Email ID"
                                                name="description" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Transport Type<span class='text-danger'>*</span></label>
                                      
                                            <select class="form-select" name="transport_type" Required>
                                                <option value="">Choose Transport Type</option>
                                                <option value="Train">Train</option>
                                                <option value="Cab">Cab</option>
                                                <option value="Air">Air</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Ship">Ship</option>
                                                </select>
                                               
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Lodging Amount Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="lodging" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Destination State/Country<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="Email ID"  maxlength="200"
                                                name="tax" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Mobile Bill Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID"  maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="mobile_Phone" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Food Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="food" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Entertainment Amount Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="entertainment" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Transport/Other Miscellaneous Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID"  maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="others" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Total Expenses Amount<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="amount" Required>
                                        </div>
                                        
                                        <!-- <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Statement-Attachment</label>
                                            <input class="form-control" type="file" placeholder="" id="Email ID"
                                                name="attachment">
                                        </div>
                                         -->
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Authorized By<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="" placeholder="" id="Email ID"
                                                onkeydown="return /[a-z]/i.test(event.key)" maxlength="150"
                                                name="authorized_by" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Designation <span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="" placeholder="" id="Email ID"
                                                onkeydown="return /[a-z]/i.test(event.key)" maxlength="150"
                                                name="designation" Required>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center py-3">
                                                <input type="submit" class='btn btn-primary' name="submit"
                                                    value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Start row -->

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

<script src="assets/js/app.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
<!-- datepicker js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script>
flatpickr('#datepicker-basic');
// Submit the form values
$("#expense-ingestion-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form. 
    var form = $(this);
    $.ajax({
        type: "POST",
        url: './api/ex-ing-submit.php',
        data: new FormData(this),
        processData: false,
        contentType: false, // serializes the form's elements.
        success: function(data) {
            Swal.fire({
                title: 'Record Submitted Successfully',
                text: '',
                icon: 'success',
                timer: 50000
            })
            // Reset the form after succeful submission
            $("#expense-ingestion-form")[0].reset();
        }
    });

});
</script>
<script>
$(document).ready(function() {
    var creditRowCount = 1;
   
    var buttons_credit_html =
        "<button id='delete_rowc' class='pull-right btn btn-danger'><i class='fas fa-trash' title='Delete'></i></button> <button id='add_rowc' class='btn btn-primary pull-left'><i class='fas fa-plus'><i></button>";

   
    function addTableRow(tableId, rowId, buttons, count) {
        var b = count - 1;
        $('#' + rowId + count).html($('#' + rowId + b).html()).find('td:first-child').html(count + 1).find(
            'td:last-child').html(count + 1);
        $('#' + tableId).append('<tr id="' + rowId + (count + 1) + '"></tr>');
        // Add last child       
        $('#' + rowId + count).find('td:last-child').html(buttons);
        $('#' + rowId + b).find('td:last-child').hide();
    }

    function deleteTableRow(rowId, count) {
        if (count > 1) {
            $("#" + rowId + (count - 1)).html('');
            $('#' + rowId + (count - 2)).find('td:last-child').show();
        }
    }

    // Add credital Row
    $(document).on("click", "#add_rowc", function(e) {
        e.preventDefault();
        addTableRow('tab_logic', 'addr', buttons_credit_html, creditRowCount);
        creditRowCount++;

    });

    // Delete credital Row
    $(document).on("click", "#delete_rowc", function(e) {
        e.preventDefault();
        deleteTableRow('addr', creditRowCount);
        creditRowCount--
    });


// Total Formula
// unitPrice quantity totalAmount addr0
// $(document).on('change','#unitPrice,#quantity',function(){
//      var rowId = $(this).closest('tr').attr('id');
//      var unitPrice = $("#"+rowId+" #unitPrice").val();
//      var quantity = $("#"+rowId+" #quantity").val();
   
//      var totalAmount = unitPrice * quantity;
//      $("#"+rowId+" #totalAmount").val(totalAmount);
          
// })

});
</script>
</body>


</html>