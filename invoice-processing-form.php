<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Invoice Processing form | IVEOND Bot Store</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-sm-0 font-size-18">FOREX Elements</h4>

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">FOREX Elements</li>
                                </ol>
                            </div> -->
                            <a  class="btn btn-primary" href="invoice-processing.php">Go back to forex</a>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Invoice Processing</h4>
                                
                            </div>
                            <div class="card-body p-4">
                            <form id="forex-form"> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Client First Name</label>
                                                <input class="form-control" type="text" placeholder=""  id="firstname" name="firstname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input class="form-control" type="text" placeholder="" id="lastname" name="lastname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile" class="form-label">Mobile Number</label>
                                                <input class="form-control" type="number" placeholder="" id="mobile" name="MobileNumber" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="Email ID" class="form-label">Email ID</label>
                                                <input class="form-control" type="email" placeholder="" id="Email ID" name="EmailID">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Account Transit from" class="form-label">Account Transit from</label>
                                                <input class="form-control" type="text" placeholder="" id="Account Transit from" name="AccountTransitfrom">
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            
                                            <div class="mb-3">
                                                <label for="Branch Number" class="form-label">Branch Number</label>
                                                <input class="form-control" type="text" placeholder="hunter2" id="Branch Number" name="BranchNumber">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Currency Converting from" class="form-label">Currency Converting from </label>
                                                <input class="form-control" type="text" placeholder="" id="Currency Converting from" name="CurrencyConvertingfrom">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Currency Converting To" class="form-label">Currency Converting To</label>
                                                <input class="form-control" type="text" placeholder="" id="Currency Converting To" name="CurrencyConvertingTo">
                                            </div>
                                            
                                            <div>
                                                <label for="Amount" class="form-label">Amount</label>
                                                <input class="form-control" type="text" placeholder="" id="Amount" name="Amount">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Account Transit  To" class="form-label">Account Transit To</label>
                                                <input class="form-control" type="text" placeholder="" id="Account Transit  To" name="AccountTransitTo">
                                            </div>
                                            
                                        </div>
                                    </div>
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
<script>

// Submit the form values
$("#forex-form").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form. 
var form = $(this); 
$.ajax({
    type: "POST",
    url: './api/forex-submit.php',
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
        Swal.fire(
        {
            title: 'Good job!',
            text: 'Record Submitted Successfully',
            icon: 'success',
            timer: 1500           
        }       
    )
    // Reset the form after succeful submission
    $("#forex-form")[0].reset();
    }
});

});

</script>
</body>


</html>