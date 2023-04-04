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
                                <h4 class="card-title">Internal Expense Ingestion</h4>

                            </div>
                            <div class="card-body p-4">
                                <form id="expense-ingestion-form">
                                    <div class="row">

                                    <div class="mb-3 col-lg-3"> 
                                            <label class="form-label">From Date<span class='text-danger'>*</span></label>
                                            <input type="date" class="form-control" max="9999-12-31" name="from_date" Required>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label for="Email ID" class="form-label">To Date<span class='text-danger'>*</span></label>
                                        <input class="form-control" type="date" placeholder="" id="Email ID" max="9999-12-31"
                                            name="to_date" Required>
                                    </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Utility<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="firstname" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="utility" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Rent<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="lastname" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="rent" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="mobile" class="form-label">Travel's<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="travel" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Employee Loans<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID"  maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="emp_loan" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Others<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="others" Required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                       
                                        
                                        <!-- <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Total Amount<span class='text-danger'>*</span></label>
                                      
                                            <select class="form-select" name="transport_type" Required>
                                                <option value="">Choose Transport Type</option>
                                                <option value="Train">Train</option>
                                                <option value="Cab">Cab</option>
                                                <option value="Air">Air</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Ship">Ship</option>
                                                </select>
                                               
                                        </div> -->
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Maintence and Repair<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="maintence" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Salaries<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID"  maxlength="200" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="salary" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Medical Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID"  maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="medical" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Employee Benefit Programs<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="emp_benefit" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Total Amount<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="amount" Required>
                                        </div>
                                        <!-- <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Entertainment Amount Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="Email ID"
                                                name="entertainment" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Total Expenses Amount<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="Email ID" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="amount" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Others Payment Expenses<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="Email ID"
                                                name="others" Required>
                                        </div> -->
                                        <!-- <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Statement-Attachment</label>
                                            <input class="form-control" type="file" placeholder="" id="Email ID"
                                                name="attachment">
                                        </div>
                                         -->
                                    </div>
                                    <!-- <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Note<span class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="Email ID" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="note" Required>
                                        </div> -->
                                        <!-- <div class="mb-3 col-lg-6">
                                            <label for="Email ID" class="form-label">Designation <span class='text-danger'>*</span></label>
                                            <input class="form-control" type="" placeholder="" id="Email ID" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="designation"  Required>
                                        </div> -->
                                        <div class="col-lg-12">
                                        <div class="text-center py-3">
                                            <input type="submit" class='btn btn-primary' name="submit" value="Submit">
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
        url: './api/internal-ex-submit.php',
        data: new FormData(this),
        processData: false,
        contentType: false, // serializes the form's elements.
        success: function(data) {
            Swal.fire({
                title: 'Record Submitted Successfully',
                text: '',
                icon: 'success',
                timer: 15000
            })
            // Reset the form after succeful submission
            $("#expense-ingestion-form")[0].reset();
        }
    });

});
</script>
</body>


</html>