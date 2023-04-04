<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Employee-Off-Boarding </title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <?php include 'layouts/config.php'; ?>
    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
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
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Employee Off Boarding Form</h4>

                            <a class="btn btn-primary" href="on_boarding.php">Go back to Employee-Boarding</a>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12 m-4">

                        <form class="row gx-3 gy-2 align-items-center" action="" method="get">
                            <div class="col-sm-4">
                                <label class="" for="employeeid">Search Employee By Id</label>
                                <input type="text" class="form-control" id="employeeid" name="employeeid"
                                    placeholder="Employee Id">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                    </div>
                    <hr>
                    <!-- end col -->
                </div>
                <?php 
                if (isset($_GET['employeeid']) && !empty($_GET['employeeid']) ){

                    $search= $_GET['employeeid'];
                    $sql = " SELECT * FROM on_boarding where emp_id = '$search' and offboarded='no' ";
                   
                     $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    ?>
                <form id="offboarding-form">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Employee Name<span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="employee_name" Required value="<?php echo $row['full_name']; ?>"
                                readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Employee Id<span
                                    class='text-danger'>*</span></label>
                            <label for="firstname" class="form-label"><span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="employee_id" Required value="<?php echo $row['emp_id']; ?>"
                                readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Location<span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['job _location']; ?>"
                                readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Manager<span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['manager']; ?>"
                                readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Hire Dte<span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['date_of_joining']; ?>"
                                readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Department<span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['job_department']; ?>" readonly>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Designation<span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['designation']; ?>"
                                readonly>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">Salary<span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" placeholder="" id="firstname" maxlength="11"
                                minlength="2" name="Branchcode" Required value="<?php echo $row['ctc_inr']; ?>"
                                readonly>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <div class="mb-3 col-lg-12">
                        <h3>Documents List</h3>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">


                            <label for="reasonforresignation" class="ms-1"> Reason For Resignation<span
                                    class='text-danger'>*</span></label><br>
                            <input class="form-control" type="text" placeholder="" id="reasonforresignation"
                                maxlength="300" minlength="2" name="reasonforresignation">

                        </div>
                        <div class="mb-3 col-lg-6">


                            <label for="lastworkingday" class="ms-1">Issue Last Working Day<span
                                    class='text-danger'>*</span></label>
                            <input class="form-control" type="Date" placeholder="" id="lastworkingday" maxlength="300"
                                minlength="2" name="lastworkingday">

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox"  class="form-check-input" id="acknowledge" name="acknowledge"
                                value="acknowledge">
                            <label for="acknowledge" class="m-2">Acknowledge Resignation</label>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="conduct" name="conduct" value="conduct">
                            <label for="conduct" class="ms-1">Conduct Exit Interview / Negotiate if Possible</label>

                        </div>

                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="hand" name="hand" value="hand">
                            <label for="hand" class="ms-1"> Hand Over Process</label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="laptop" name="laptop" value="laptop">
                            <label for="laptop" class="ms-1">Recover Company Assets-To Submit Id Card and Laptop
                                Submission</label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="access" name="access" value="access">
                            <label for="access" class="ms-1">Revoke Employee access</label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="pay" name="pay" value="pay">
                            <label for="pay" class="ms-1">Remove From Pay Role </label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="redirect" name="redirect" value="redirect">
                            <label for="redirect" class="ms-1">Redirect Calls Emails & Update Passwords</label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="retention" name="retention" value="retention">
                            <label for="retention" class="ms-1"> Employee Retention</label>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="replacement" name="replacement" value="replacement">
                            <label for="replacement" class="ms-1"> Recuritment Process For replacement initiated & job
                                postingprepared</label><br>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="benefits" name="benefits" value="benefits">
                            <label for="benefits" class="ms-1">Benefits >> Medical,Insurance, Retirement,Gratuity
                            </label>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="loan" name="loan" value="loan">
                            <label for="loan" class="ms-1">Loans If Any</label>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="deductions" name="deductions" value="deductions">
                            <label for="deductions" class="ms-1">Deductions Caluclated For Final Day</label>

                        </div>
                        <div class="mb-3 col-lg-6">

                            <input type="checkbox" class="form-check-input" id="paycheck" name="paycheck" value="paycheck">
                            <label for="paycheck" class="ms-1">Final Paycheck Processed & Delivered </label>

                        </div>
                        <div class="mb-3 col-lg-12">


                            <label for="plansafterleaving" class="ms-1">
                                <h5>Plans After Leaving</h5>
                            </label>
                            <input class="form-control" type="text" placeholder="" id="plansafterleaving"
                                maxlength="300" minlength="2" name="plansafterleaving">

                        </div>
                        <div class="col-lg-12">
                            <div class="text-center py-3">
                                <input type="submit" class='btn btn-primary' name="submit" value="OFFBOARD">
                            </div>
                        </div>
                </form>
            </div>








            <?php

                                                }
                                            }
                                            else{
                                                echo "<h4> No Records Found </h4>";
                                            }
                }
                
                // require_once 'db/dbEmpDetail.php';
                // $employeeid = trim(mysqli_real_escape_string($_GET['id'])); 
                // $sql = "SELECT * FROM employees where empID = '".$employeeid."' "; 
                // $result = mysqli_query($connection, $sql); 
                // if (mysqli_num_rows($result)) { 
                //     while ($row = mysqli_fetch_assoc($result)) { 
                //         echo '<tr>' .'<td>' .$row["empName"].'</td>'.'<td>'. $row["position"].'</td>' .'<td>'.$row["empNRIC"].'</td>' .'<td>'.$row["empID"].'</td>' .'<td>'.$row["empEmail"].'</td>' .'<td>'.$row["empPwd"].'</td>' . "</tr>";
                //     } 
                // }
                // else { 
                //     echo "0 results";
                // } 
                // mysqli_close($connection); 
                ?>

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
$("#offboarding-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form. 
    var form = $(this);
    console.log(form.serialize());
    $.ajax({
        type: "POST",
        url: './api/offboarding_submit.php',
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            Swal.fire({
                title: 'Record Submitted Successfully!',
                text: '',
                icon: 'success',
              
            })
            // Reset the form after succeful submission
            $("#offboarding-form")[0].reset();

            setTimeout(() => {
                window.location.href = "./offbording.php";
            }, 1500);

        }
    });

});
</script>
<!-- <script>
$(document).ready(function() {
    var educationRowCount = 1;
    var serviceRowCount = 1;
    var familyRowCount = 1;


    var buttons_education_html =
        "<button type='button' id='delete_row' class='pull-right btn btn-danger'><i class='fas fa-trash' title='Delete'></i></button> <button type='button' id='add_row' class='btn btn-primary pull-left'><i class='fas fa-plus'><i></button>";

    var buttons_service_html =
        "<button type='button' id='delete_ser_row' class='pull-right btn btn-danger'><i class='fas fa-trash' title='Delete'></i></button> <button type='button' id='add_ser_row' class='btn btn-primary pull-left'><i class='fas fa-plus'><i></button>";

    var buttons_family_html =
        "<button type='button' id='delete_family_row' class='pull-right btn btn-danger'><i class='fas fa-trash' title='Delete'></i></button> <button type='button' id='add_family_row' class='btn btn-primary pull-left'><i class='fas fa-plus'><i></button>";

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

    // Add Educational Row
    $(document).on("click", "#add_row", function(e) {
        e.preventDefault();
        addTableRow('tab_logic', 'addr', buttons_education_html, educationRowCount);
        educationRowCount++;

    });

    // Delete Educational Row
    $(document).on("click", "#delete_row", function(e) {
        e.preventDefault();
        deleteTableRow('addr', educationRowCount);
        educationRowCount--
    });


    // Add service Row
    $(document).on("click", "#add_ser_row", function(e) {
        e.preventDefault();
        addTableRow('tab_ser_logic', 'ser_row', buttons_service_html, serviceRowCount);
        serviceRowCount++;
    });

    // Delete service Row
    $(document).on("click", "#delete_ser_row", function(e) {
        e.preventDefault();
        deleteTableRow('ser_row', serviceRowCount);
        serviceRowCount--
    });
    // Add familye Row
    $(document).on("click", "#add_family_row", function(e) {
        e.preventDefault();
        addTableRow('tab_family_logic', 'family_row', buttons_family_html, familyRowCount);
        familyRowCount++;
    });

    // Delete familye Row
    $(document).on("click", "#delete_family_row", function(e) {
        e.preventDefault();
        deleteTableRow('family_row', familyRowCount);
        familyRowCount--
    });

});
</script> -->
</body>


</html>