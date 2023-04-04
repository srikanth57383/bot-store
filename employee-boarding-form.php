<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Employee-Boarding form | IVEOND Bot Store</title>
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
                            <h4 class="mb-sm-0 font-size-18"></h4>

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Employee-Boarding Elements</li>
                                </ol>
                            </div> -->
                            <!-- <a class="btn btn-primary" href="on_boarding.php">Go back to Employee-Boarding</a> -->

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Employee Personal Information</h3>

                            </div>
                            <div class="card-body p-4">
                                <form id="Employee-Boarding-form">
                                    <div class="row">


                                        <div class="mb-3 col-lg-10">

                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="emp_id" class="form-label">Employee ID<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="emp_id"
                                                maxlength="12" name="emp_id" Required>
                                        </div>

                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Full Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="full_name" Required>
                                        </div>

                                        <div class="mb-3 col-lg-2">
                                            <label for="firstname" class="form-label">Date of Birth<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="date" placeholder="" name="dob" Required>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Contact Number<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="firstname"
                                                maxlength="16"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="contact_no" Required maxlength="16">
                                        </div>

                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Email Id<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="email" placeholder="" id="firstname"
                                                name="email" Required>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Father Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="father_name" Required maxlength="120">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Father Contact Number<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="firstname"
                                                maxlength="16"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="father_contact" Required maxlength="16">
                                        </div>


                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Blood Group<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="blood_grp" Required maxlength="10">
                                        </div>

                                        <div class="mb-3 col-lg-4">
                                            <label for="lastname" class="form-label">Marital Status<span
                                                    class='text-danger'>*</span></label><br>
                                            <input type="radio" name="marital_status" value="Married" checked> Married /
                                            <input type="radio" name="marital_status" value="Single" Required>
                                            Single<br>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="lastname" class="form-label">Gender<span
                                                    class='text-danger'>*</span></label><br>
                                            <input type="radio" name="gender" value="Male" checked> Male /
                                            <input type="radio" name="gender" value="Female" Required> Female<br>
                                        </div>
                                        <div class="mb-3 col-lg-5">
                                            <label for="firstname" class="form-label">ID Mark<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="id_mark" Required maxlength="200">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">ESI No<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="esi_no" Required maxlength="16">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">PF No<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="pf_no" Required maxlength="16">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Aadhaar No<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="firstname"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="aadhaar_no" Required maxlength="12">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">PAN<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="pan" Required maxlength="10">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Bank Ac No<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="bank_ac_no" Required maxlength="16">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">IFSC<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="Ifsc" Required maxlength="16">
                                        </div>
                                        <div class="mb-3 col-lg-10">
                                            <h3>Employee Address Information </h3>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label for="firstname" class="form-label">Present Address<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="present_address" rows="4" cols="50" Required maxlength="600">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label for="firstname" class="form-label">Permanent Address<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                name="permanent_address" Required maxlength="600">
                                        </div>
                                        <div class="mb-3 col-lg-10">
                                            <h3>Employee Professional Information </h3>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="joiningdate" class="form-label">Date Of Joining<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="date" placeholder=""
                                                name="date_of_joining"  id="joiningdate" Required>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Designation<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="designation"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" name="designation"
                                                Required maxlength="120">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Job Department<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="job_department"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" name="job_department"
                                                Required>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Job Location<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="job_location"
                                                name="job_location" Required maxlength="120">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">CTC INR<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="ctc_inr"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="ctc_inr" Required maxlength="120">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="firstname" class="form-label">Incentive<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="incentive"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="incentive" Required maxlength="300">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="Manager" class="form-label">Manager<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="Manager"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="manager" Required maxlength="300">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <h3>Employee Education Details </h3>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <table class="table table-bordered table-hover" id="tab_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th class="text-center">
                                                            Name Education<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Name College<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Name University<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Passing Years<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Grade<span class='text-danger'>*</span>
                                                        </th>
                                                        <th>Add/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id='addr0'>
                                                        <td>1</td>
                                                        <td>
                                                            <input type="text" name='education_name[]'
                                                                placeholder='Enter name_education'
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='education_college[]'
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                placeholder='Enter name_college' class="form-control"
                                                                Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='education_university[]'
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                placeholder='Enter name_university' class="form-control"
                                                                Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='education_year[]'
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                placeholder='Enter pasing_Years' class="form-control"
                                                                Required maxlength="4" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='education_grade[]'
                                                                placeholder='Enter grade' class="form-control" Required
                                                                maxlength="20" />
                                                        </td>
                                                        <td><button id='add_row' class='btn btn-primary pull-left'><i
                                                                    class='fas fa-plus'><i></button></td>
                                                    </tr>
                                                    <tr id='addr1'></tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mb-3 col-lg-12">
                                            <h3>Employee Service History</h3>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <table class="table table-bordered table-hover" id="tab_ser_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th class="text-center">
                                                            Organization<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Designation<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Department<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            From Year<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            To Year<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Total Salary<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            In Hand<span class='text-danger'>*</span>
                                                        </th>
                                                        <th>
                                                            Add / Delete
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id='ser_row0'>
                                                        <td>1</td>
                                                        <td>
                                                            <input type="text" name='service_organization[]'
                                                                placeholder=''
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='service_designation[]'
                                                                placeholder=''
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='service_dept[]' placeholder=''
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='service_from[]' placeholder=''
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='service_to[]' placeholder=''
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='service_total_salary[]'
                                                                placeholder=''
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='service_in_hand[]' placeholder=''
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                class="form-control" Required maxlength="300" />
                                                        </td>
                                                        <td class='px-1'><button id='add_ser_row'
                                                                class='btn btn-primary pull-left'><i
                                                                    class='fas fa-plus'><i></button></td>
                                                    </tr>
                                                    <tr id='ser_row1'></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <h3>Employee Family Details </h3>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <table class="table table-bordered table-hover" id="tab_family_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th class="text-center">
                                                            Family Member Name<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Relation<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                            Mobile Number<span class='text-danger'>*</span>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id='family_row0'>
                                                        <td>1</td>
                                                        <td>
                                                            <input type="text" name='fam_mmber_name[]' placeholder=''
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required />
                                                        </td>
                                                        <td>
                                                            <input type="text" name='fam_mmber_relation[]'
                                                                placeholder=''
                                                                onkeydown="return /[a-z\s]/i.test(event.key)"
                                                                class="form-control" Required />
                                                        </td>
                                                        <td>
                                                            <input type="number" name='fam_mmber_mobile[]'
                                                                maxlength="16" placeholder=''
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                class="form-control" Required />
                                                        </td>

                                                        <td><button id='add_family_row'
                                                                class='btn btn-primary pull-left'><i
                                                                    class='fas fa-plus'><i></button></td>
                                                    </tr>
                                                    <tr id='family_row1'></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <p>I do hereby declare that the above information furnished by me is true
                                                to the best my knowledge.

                                            </p>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Required>
                                            <label for="vehicle1"> I agree</label><br>

                                        </div>
                                        <input type="hidden" name="formtype" value="new_form">
                                        <hr>
                                        </hr>




                                        <div class="col-lg-12">
                                            <div class="text-center py-3">
                                                <input type="submit" class='btn btn-primary' name="submit"
                                                    value="Submit Details">
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
$("#Employee-Boarding-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form. 
    var form = $(this);

    $.ajax({
        type: "POST",
        url: './api/on_boarding_submit.php',
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {

            try {
                var resdata = JSON.parse(data);
                if (resdata[0].success) {
                    Swal.fire({
                        title: 'Record Submitted Successfully!',
                        text: '',
                        icon: 'success',
                        
                    })
                    // Reset the form after succeful submission
                    $("#Employee-Boarding-form")[0].reset();
                }else{
                    Swal.fire({
                    title: 'Failed to add new Employee!',
                    text: '',
                    icon: 'error',
                   
                })
                }
            } catch (error) {
                Swal.fire({
                    title: 'Failed to add new Employee!',
                    text: '',
                    icon: 'error',
                    timer: 50000
                })
                $("#Employee-Boarding-form")[0].reset();
            }



        }
    });

});
</script>
<script>
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

})
 $("#joiningdate").attr("min",new Date().toISOString().split("T")[0]);



</script>
</body>


</html>