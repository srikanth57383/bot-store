<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Credit memo form | IVEOND Bot Store</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
     <!-- datepicker css -->
     <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
</head>

<?php include 'layouts/body.php'; ?>
<style>
    h4{
        colour:blue
    }
    </style>

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
                            <h4 class="mb-sm-0 font-size-18">Credit Memo Elements</h4>

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">creditmemo Elements</li>
                                </ol>
                            </div> -->
                            <a  class="btn btn-primary" href="Credit-memo.php">Go back to credit memo</a>

                        </div>
                    </div>
                </div>
                <!-------Client Name, Email, Billing Address, Credit Memo Date,

Table : Sno, Product/Service, Description, Qty,Rate, Amount, Sales Tax

Message Displayed on Credit Mem-------->
                
                <!-- end page title -->
<?php 
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();
?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Credit Memo</h4>
                                
                            </div>
                            <div class="card-body p-4">
                            <form id="creditmemo-form"> 
                                <div class="row">
                                    
                                            <div class="mb-3 col-lg-3">
                                                <label for="firstname" class="form-label">Number<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" placeholder="AB0205" maxlength="10"  id="firstname" name="number" value="<?php echo "CM$uniqueId"; ?>" Required>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                               
                                            </div>
                                            <div class="mb-3 col-lg-3">
                                                <label for="firstname" class="form-label">Date<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="date" placeholder=""  name="date" Required>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <h5 class="blue">Bill From</h5>
                                               
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                            <h5>Bill To</h5>
                                                
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="BillingAddress" class="form-label">Bill From Company Name:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" value="Trade Center" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150" placeholder="" id="mobile" name="from_company_name" Required readonly>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="CreditMemoDat" class="form-label">Bill To Customer  Name:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150" placeholder="" id="Email ID" name="to_customer_name" Required>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="TableSno" class="form-label">Bill From Company Address:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" value="Financial District, Gacchibowli, Telangana - 500022" placeholder="" id="Account Transit from" name="from_company_address" Required readonly>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                      
                                            
                                            <div class="mb-3 col-lg-6">
                                                <label for="ProductServicer" class="form-label">Bill To Customer Address:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" placeholder="" id="Branch Number" name="to_customer_address" Required>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Description" class="form-label">Bill From Company Phone No: <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="number" value="9988465735" maxlength="16" placeholder='' oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="" id="Currency Converting from" name="from_company_phone" Required readonly>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Qty" class="form-label"> Bill To Customer  Phone No:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="number" maxlength="16" placeholder='' oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="" id="Currency Converting To" name="to_customer_phone" Required>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Qty" class="form-label"> Bill To Company Email:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="email" value="cs-reply@tradecenter.com" maxlength="16" placeholder='' placeholder="" id="Currency Converting To" name="comp_mail" Required readonly>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Qty" class="form-label"> Bill To Customer Email:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="email" maxlength="16" placeholder=''  placeholder="" id="Currency Converting To" name="cust_mail" Required>
                                            </div>
                                            <hr></hr>
                                            <div class="mb-3 col-lg-12">
                                               <h4>Other details</h4>
                                            </div>
                                           
                                            <div class="mb-3 col-lg-4">
                                                <label for="Sales Tax" class="form-label">Invoice <span class='text-danger'>*</span> </label> 
                                                <input class="form-control" type="text" placeholder="" id="Account Transit  To" name="invoice" maxlength="10" Required>
                                            </div>
                                            <div class="mb-3 col-lg-4">
                                                <label for="ProductServicer" class="form-label">Order <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="number" maxlength="16" placeholder='' oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="" id="Branch Number" maxlength="10" name="order" Required>
                                            </div>
                                            <div class="mb-3 col-lg-4">
                                                <label for="Description" class="form-label">Sales Person :<span class='text-danger'>*</span> </label>
                                                <input class="form-control" type="text" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150" placeholder="" id="Currency Converting from" name="sales_person" Required>
                                            </div>
                                            <div class="mb-3 col-lg-4">
                                                <label for="Rate" class="form-label">Payment Term:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" placeholder="" maxlength="150"  id="Amount" name="payment_term" Required>
                                            </div>
                                            <div class="mb-3 col-lg-4">
                                                <label for="Rate" class="form-label">Shipping Date:<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="date" placeholder=""   name="shipping_date" Required>
                                            </div>
                                            <div class="mb-3 col-lg-12">
                                            <table class="table table-bordered table-hover"  id="tab_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th class="text-center">
                                                        Product<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                        Description / Comments<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                        Unit Price<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                        Quantity<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                        Sales Tax<span class='text-danger'>*</span>
                                                        </th>
                                                        <th class="text-center">
                                                        Total
                                                        </th>
                                                        
                                                        <th>Add/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id='addr0' > 
                                                        <td>1</td>
                                                        <td>
                                                            <input type="text" name='product[]'
                                                                placeholder='' maxlength="150"
                                                                class="form-control" Required/>
                                                        </td>
                                                        <td>
                                                            <input type="text" name='description[]'
                                                                placeholder='' maxlength="150"
                                                                class="form-control" Required/>
                                                        </td>
                                                        <td>
                                                            <input type="number" name=' unitprice[]'
                                                                placeholder='' class="form-control" Required id="unitPrice"/>
                                                        </td>
                                                        <td>
                                                            <input type="number" name='quantity[]'
                                                                placeholder=''
                                                                class="form-control" Required id="quantity"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" name='tax[]'
                                                                placeholder='' maxlength="150"
                                                                class="form-control" Required/>
                                                        </td>
                                                        <td>
                                                            <input type="number" name='total[]'
                                                                placeholder='' class="form-control" id="totalAmount"/>
                                                        </td>
                                                        
                                                        <td><button id='add_rowc' class='btn btn-primary pull-left'><i
                                                                    class='fas fa-plus'><i></button></td>
                                                    </tr>
                                                    <tr id='addr1'></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                                <label for="CreditMemoDat" class="form-label">Authorized By <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150" placeholder="" id="" name="authorized_by" Required>
                                       </div>
                                       <div class="mb-3 col-lg-6">
                                                <label for="CreditMemoDat" class="form-label">Name and Designation  <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150" placeholder="" id="" name="designation" Required>
                                       </div>

                                            
                                            
                                        
                                    <div class="col-lg-12">
                                        <div class="text-center py-3">
                                        <input type="submit" class='btn btn-primary' name="submit" value="Submit">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                           <p> Message Displayed on Credit Mem<p>
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
$("#creditmemo-form").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form. 
var form = $(this); 
$.ajax({
    type: "POST",
    url: './api/creditmemo-submit.php',
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
        Swal.fire(
        {
            title: 'Record Submitted Successfully',
            text: '',
            icon: 'success',
            timer: 50000           
        }       
    )
    // Reset the form after succeful submission
    $("#creditmemo-form")[0].reset();
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
$(document).on('change','#unitPrice,#quantity',function(){
     var rowId = $(this).closest('tr').attr('id');
     var unitPrice = $("#"+rowId+" #unitPrice").val();
     var quantity = $("#"+rowId+" #quantity").val();
   
     var totalAmount = unitPrice * quantity;
     $("#"+rowId+" #totalAmount").val(totalAmount);
          
})

});
</script>
</body>


</html>