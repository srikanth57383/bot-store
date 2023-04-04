<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<head>

    <title>Forex form | IVEOND Bot Store</title>
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
                            <h4 class="mb-sm-0 font-size-18">FOREX </h4>

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">FOREX Elements</li>
                                </ol>
                            </div> -->
                            <a class="btn btn-primary" href="forex.php">Go back to forex</a>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> FORM</h4>

                            </div>
                            <?php
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `forex` where id='$id'";
                            $result = $link->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {

?>

                            <div class="card-body p-4">
                                <form id="forex-form">
                                    <div class="row">


                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Branch code<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                maxlength="11" minlength="2" name="Branchcode" value="<?php echo $row['branchcode'] ?>" Required>


                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">Account number<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="firstname"
                                                maxlength="12" name="CardNumber" value="<?php echo trim($row['cardnumber']) ?>" required
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                        <div class="mb-3 col-lg-2">
                                            <label for="firstname" class="form-label">Title<span
                                                    class='text-danger'>*</span></label>
                                            <select class="form-control" name="title"  Required>
                                                <option value="">Choose Title</option>
                                                <option value="Mr" <?php echo trim($row['title'])=='Mr' ? 'selected':''; ?>>Mr</option>
                                                <option value="Mrs" <?php echo trim($row['title'])=='Mrs'?'selected':''; ?>>Mrs</option>
                                                <option value="Ms" <?php echo trim($row['title'])=='Ms'?'selected':''; ?>>Ms</option>


                                            </select>
                                        </div>

                                        <div class="mb-3 col-lg-5">
                                            <label for="firstname" class="form-label">Client First Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="firstname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="ClientFirstName" value="<?php echo $row['first_name'] ?>" Required>
                                        </div>
                                        <div class="mb-3 col-lg-5">
                                            <label for="lastname" class="form-label">Last Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="lastname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="LastName" value="<?php echo $row['last_name'] ?>" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Mothers Name<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="lastname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="MothersName" value="<?php echo $row['mother_name'] ?>" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label"> Account Balance<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="account_balance"
                                                 maxlength="150" value="<?php echo $row['account_balance'] ?>"
                                                name="account_balance" Required>
                                        </div>
                                        
                                        <div class="mb-3 col-lg-3">
                                            <label for="lastname" class="form-label">Marital Status<span
                                                    class='text-danger'>*</span></label><br>
                                            <input type="radio" name="status" value="Married" <?php echo trim($row['status'])=='Married' ? 'checked':''; ?>  Required> Married
                                            /
                                            <input type="radio" name="status" value="Single" <?php echo trim($row['status'])=='Single' ? 'checked':''; ?> Required> Single<br>
                                        </div>
                                        <div class="mb-3 col-lg-3">
                                            <label for="lastname" class="form-label">Gender<span
                                                    class='text-danger'>*</span></label><br>
                                            <input type="radio" name="gender" value="Male" <?php echo trim($row['gender'])=='Male' ? 'checked':''; ?> Required> Male /
                                            <input type="radio" name="gender" value="Female" <?php echo trim($row['gender'])=='Female' ? 'checked':''; ?> Required> Female<br>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Nationality<span
                                                    class='text-danger'>*</span></label>

                                            <select class="form-select" name="nationality" id="nationality" data-nationality="<?php echo $row['nationality'] ?>" Required>
                                                <option value="AFGHAN">AFGHAN</option>
                                                <option value="ALBANIAN">ALBANIAN</option>
                                                <option value="ALGERIAN">ALGERIAN</option>
                                                <option value="AMERICAN">AMERICAN</option>
                                                <option value="ANDORRAN">ANDORRAN</option>
                                                <option value="ANGOLAN">ANGOLAN</option>
                                                <option value="ANTIGUANS">ANTIGUANS</option>
                                                <option value="ARGENTINEAN">ARGENTINEAN</option>
                                                <option value="ARMENIAN">ARMENIAN</option>
                                                <option value="AUSTRALIAN">AUSTRALIAN</option>
                                                <option value="AUSTRIAN">AUSTRIAN</option>
                                                <option value="AZERBAIJANI">AZERBAIJANI</option>
                                                <option value="BAHAMIAN">BAHAMIAN</option>
                                                <option value="BAHRAINI">BAHRAINI</option>
                                                <option value="BANGLADESHI">BANGLADESHI</option>
                                                <option value="BARBADIAN">BARBADIAN</option>
                                                <option value="BARBUDANS">BARBUDANS</option>
                                                <option value="BATSWANA">BATSWANA</option>
                                                <option value="BELARUSIAN">BELARUSIAN</option>
                                                <option value="BELGIAN">BELGIAN</option>
                                                <option value="BELIZEAN">BELIZEAN</option>
                                                <option value="BENINESE">BENINESE</option>
                                                <option value="BHUTANESE">BHUTANESE</option>
                                                <option value="BOLIVIAN">BOLIVIAN</option>
                                                <option value="BOSNIAN">BOSNIAN</option>
                                                <option value="BRAZILIAN">BRAZILIAN</option>
                                                <option value="BRITISH">BRITISH</option>
                                                <option value="BRUNEIAN">BRUNEIAN</option>
                                                <option value="BULGARIAN">BULGARIAN</option>
                                                <option value="BURKINABE">BURKINABE</option>
                                                <option value="BURMESE">BURMESE</option>
                                                <option value="BURUNDIAN">BURUNDIAN</option>
                                                <option value="CAMBODIAN">CAMBODIAN</option>
                                                <option value="CAMEROONIAN">CAMEROONIAN</option>
                                                <option value="CANADIAN">CANADIAN</option>
                                                <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                                                <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                                                <option value="CHADIAN">CHADIAN</option>
                                                <option value="CHILEAN">CHILEAN</option>
                                                <option value="CHINESE">CHINESE</option>
                                                <option value="COLOMBIAN">COLOMBIAN</option>
                                                <option value="COMORAN">COMORAN</option>
                                                <option value="CONGOLESE">CONGOLESE</option>
                                                <option value="COSTA RICAN">COSTA RICAN</option>
                                                <option value="CROATIAN">CROATIAN</option>
                                                <option value="CUBAN">CUBAN</option>
                                                <option value="CYPRIOT">CYPRIOT</option>
                                                <option value="CZECH">CZECH</option>
                                                <option value="DANISH">DANISH</option>
                                                <option value="DJIBOUTI">DJIBOUTI</option>
                                                <option value="DOMINICAN">DOMINICAN</option>
                                                <option value="DUTCH">DUTCH</option>
                                                <option value="EAST TIMORESE">EAST TIMORESE</option>
                                                <option value="ECUADOREAN">ECUADOREAN</option>
                                                <option value="EGYPTIAN">EGYPTIAN</option>
                                                <option value="EMIRIAN">EMIRIAN</option>
                                                <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                                                </option>
                                                <option value="ERITREAN">ERITREAN</option>
                                                <option value="ESTONIAN">ESTONIAN</option>
                                                <option value="ETHIOPIAN">ETHIOPIAN</option>
                                                <option value="FIJIAN">FIJIAN</option>
                                                <option value="FILIPINO">FILIPINO</option>
                                                <option value="FINNISH">FINNISH</option>
                                                <option value="FRENCH">FRENCH</option>
                                                <option value="GABONESE">GABONESE</option>
                                                <option value="GAMBIAN">GAMBIAN</option>
                                                <option value="GEORGIAN">GEORGIAN</option>
                                                <option value="GERMAN">GERMAN</option>
                                                <option value="GHANAIAN">GHANAIAN</option>
                                                <option value="GREEK">GREEK</option>
                                                <option value="GRENADIAN">GRENADIAN</option>
                                                <option value="GUATEMALAN">GUATEMALAN</option>
                                                <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                                                <option value="GUINEAN">GUINEAN</option>
                                                <option value="GUYANESE">GUYANESE</option>
                                                <option value="HAITIAN">HAITIAN</option>
                                                <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                                                <option value="HONDURAN">HONDURAN</option>
                                                <option value="HUNGARIAN">HUNGARIAN</option>
                                                <option value="ICELANDER">ICELANDER</option>
                                                <option value="INDIAN">INDIAN</option>
                                                <option value="INDONESIAN">INDONESIAN</option>
                                                <option value="IRANIAN">IRANIAN</option>
                                                <option value="IRAQI">IRAQI</option>
                                                <option value="IRISH">IRISH</option>
                                                <option value="ISRAESLI">ISRAELI</option>
                                                <option value="ITALIAN">ITALIAN</option>
                                                <option value="IVORIAN">IVORIAN</option>
                                                <option value="JAMAICAN">JAMAICAN</option>
                                                <option value="JAPANESE">JAPANESE</option>
                                                <option value="JORDANIAN">JORDANIAN</option>
                                                <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                                                <option value="KENYAN">KENYAN</option>
                                                <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                                                </option>
                                                <option value="KUWAITI">KUWAITI</option>
                                                <option value="KYRGYZ">KYRGYZ</option>
                                                <option value="LAOTIAN">LAOTIAN</option>
                                                <option value="LATVIAN">LATVIAN</option>
                                                <option value="LEBANESE">LEBANESE</option>
                                                <option value="LIBERIAN">LIBERIAN</option>
                                                <option value="LIBYAN">LIBYAN</option>
                                                <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                                                <option value="LITHUANIAN">LITHUANIAN</option>
                                                <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                                                <option value="MACEDONIAN">MACEDONIAN</option>
                                                <option value="MALAGASY">MALAGASY</option>
                                                <option value="MALAWIAN">MALAWIAN</option>
                                                <option value="MALAYSIAN">MALAYSIAN</option>
                                                <option value="MALDIVAN">MALDIVAN</option>
                                                <option value="MALIAN">MALIAN</option>
                                                <option value="MALTESE">MALTESE</option>
                                                <option value="MARSHALLESE">MARSHALLESE</option>
                                                <option value="MAURITANIAN">MAURITANIAN</option>
                                                <option value="MAURITIAN">MAURITIAN</option>
                                                <option value="MEXICAN">MEXICAN</option>
                                                <option value="MICRONESIAN">MICRONESIAN</option>
                                                <option value="MOLDOVAN">MOLDOVAN</option>
                                                <option value="MONACAN">MONACAN</option>
                                                <option value="MONGOLIAN">MONGOLIAN</option>
                                                <option value="MOROCCAN">MOROCCAN</option>
                                                <option value="MOSOTHO">MOSOTHO</option>
                                                <option value="MOTSWANA">MOTSWANA</option>
                                                <option value="MOZAMBICAN">MOZAMBICAN</option>
                                                <option value="NAMIBIAN">NAMIBIAN</option>
                                                <option value="NAURUAN">NAURUAN</option>
                                                <option value="NEPALESE">NEPALESE</option>
                                                <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                                                <option value="NI-VANUATU">NI-VANUATU</option>
                                                <option value="NICARAGUAN">NICARAGUAN</option>
                                                <option value="NIGERIEN">NIGERIEN</option>
                                                <option value="NORTH KOREAN">NORTH KOREAN</option>
                                                <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                                                <option value="NORWEGIAN">NORWEGIAN</option>
                                                <option value="OMANI">OMANI</option>
                                                <option value="PAKISTANI">PAKISTANI</option>
                                                <option value="PALAUAN">PALAUAN</option>
                                                <option value="PANAMANIAN">PANAMANIAN</option>
                                                <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                                                <option value="PARAGUAYAN">PARAGUAYAN</option>
                                                <option value="PERUVIAN">PERUVIAN</option>
                                                <option value="POLISH">POLISH</option>
                                                <option value="PORTUGUESE">PORTUGUESE</option>
                                                <option value="QATARI">QATARI</option>
                                                <option value="ROMANIAN">ROMANIAN</option>
                                                <option value="RUSSIAN">RUSSIAN</option>
                                                <option value="RWANDAN">RWANDAN</option>
                                                <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                                                <option value="SALVADORAN">SALVADORAN</option>
                                                <option value="SAMOAN">SAMOAN</option>
                                                <option value="SAN MARINESE">SAN MARINESE</option>
                                                <option value="SAO TOMEAN">SAO TOMEAN</option>
                                                <option value="SAUDI">SAUDI</option>
                                                <option value="SCOTTISH">SCOTTISH</option>
                                                <option value="SENEGALESE">SENEGALESE</option>
                                                <option value="SERBIAN">SERBIAN</option>
                                                <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                                                <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                                                <option value="SINGAPOREAN">SINGAPOREAN</option>
                                                <option value="SLOVAKIAN">SLOVAKIAN</option>
                                                <option value="SLOVENIAN">SLOVENIAN</option>
                                                <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                                                <option value="SOMALI">SOMALI</option>
                                                <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                                                <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                                                <option value="SPANISH">SPANISH</option>
                                                <option value="SRI LANKAN">SRI LANKAN</option>
                                                <option value="SUDANESE">SUDANESE</option>
                                                <option value="SURINAMER">SURINAMER</option>
                                                <option value="SWAZI">SWAZI</option>
                                                <option value="SWEDISH">SWEDISH</option>
                                                <option value="SWISS">SWISS</option>
                                                <option value="SYRIAN">SYRIAN</option>
                                                <option value="TAIWANESE">TAIWANESE</option>
                                                <option value="TAJIK">TAJIK</option>
                                                <option value="TANZANIAN">TANZANIAN</option>
                                                <option value="THAI">THAI</option>
                                                <option value="TOGOLESE">TOGOLESE</option>
                                                <option value="TONGAN">TONGAN</option>
                                                <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                                    TOBAGONIAN</option>
                                                <option value="TUNISIAN">TUNISIAN</option>
                                                <option value="TURKISH">TURKISH</option>
                                                <option value="TUVALUAN">TUVALUAN</option>
                                                <option value="UGANDAN">UGANDAN</option>
                                                <option value="UKRAINIAN">UKRAINIAN</option>
                                                <option value="URUGUAYAN">URUGUAYAN</option>
                                                <option value="UZBEKISTANI">Uzbekistani</option>
                                                <option value="VENEZUELAN">VENEZUELAN</option>
                                                <option value="VIETNAMESE">VIETNAMESE</option>
                                                <option value="WELSH">WELSH</option>
                                                <option value="YEMENITE">YEMENITE</option>
                                                <option value="ZAMBIAN">ZAMBIAN</option>
                                                <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="example-date-input" class="form-label">Date<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="date" value="" name="Date" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Card Issue Date<span
                                                    class='text-danger'>*</span></label>

                                            <input class="form-control" type="date" name="card_issue_date"
                                                value="" Required>
                                        </div>

                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Travel Type<span
                                                    class='text-danger'>*</span></label>
                                            <select class="form-select" name="Traveltype" Required>
                                            <option value="">Choose</option>
                                                <option value="Leisure">Leisure</option>
                                                <option value="Bussines">Business</option>
                                                <option value="Education">Education</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Other">Other</option>

                                            </select>

                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Card Expiry Date<span
                                                    class='text-danger'>*</span></label>

                                            <input class="form-control" type="date" name="TravelDate"
                                                value="" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label"> Pin Code <span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="lastname"
                                                maxlength="6" 
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="PinCode" value="<?php echo trim($row['pincode']) ?>" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label"> Mobile Number<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="number" placeholder="" id="lastname"
                                                maxlength="16" value="<?php echo trim($row['mobilephone']) ?>"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                name="MobilePhone" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Email Id <span
                                                    class='text-danger'>*</span></label>
                                            <input  class="form-control" type="email" value="<?php echo trim($row['emailid']) ?>" placeholder="" id=""
                                                name="EmailId"  Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Passport Number<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="lastname"
                                                maxlength="9" name="PasportNumber" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label"> Passport Expiry Date<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="date" value=""
                                                name="PasportExpiryDate" Required>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label"> Place passport issued<span
                                                    class='text-danger'>*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="lastname"
                                                onkeydown="return /[a-z\s]/i.test(event.key)" maxlength="150"
                                                name="Placepasportissued" Required>
                                        </div>
                                        
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">From Currency </label>
                                            <select class="form-select" name="ForeignCurrency" required
                                                id="fromCurrency">

                                                <option value="">Choose From Currency</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="GBP">GBP</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                                <option value="SGD">SGD</option>
                                                <option value="AED">AED</option>
                                                <option value="INR">INR</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">To Currency </label>
                                            <select class="form-select" name="tocurrency" required id="toCurrency">
                                                <option value="">Choose To Currency</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="GBP">GBP</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                                <option value="SGD">SGD</option>
                                                <option value="AED">AED</option>
                                                <option value="INR">INR</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Amount To Be be Loaded </label>
                                            <!-- <input class="form-control" type="number" placeholder="" id="amountToBeLoaded"
                                                name="AmoutToBebeLoaded" Required>  -->
                                              
                                            <div class="input-group">
                                                <div class="input-group-text" id="amountToLoadLabel"></div>
                                                <input class="form-control" type="number" placeholder=""
                                                    id="amountToBeLoaded" name="AmoutToBebeLoaded" maxlength="16" min="1"
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" Required>
                                            </div>

                                        </div>
                                        <div class="mb-3 col-lg-6">
                                                <label for="lastname" class="form-label">Charges applied</label>
                                                <!-- <input class="form-control" type="number" placeholder="" id="amountToBeLoaded"
                                                name="AmoutToBebeLoaded" Required>  -->

                                                <div class="input-group">
                                                    <div class="input-group-text" id="Chargesapplied"></div>
                                                    <input class="form-control" type="text" placeholder="" min="0"
                                                        id="chargesapplied" name="charges" Required>
                                                </div>

                                            </div>


                                            <div class="mb-3 col-lg-6">
                                                <label for="lastname" class="form-label">Total Amount After
                                                    deduction</label>
                                                <!-- <input class="form-control" type="number" placeholder="" id="amountToBeLoaded"
                                                name="AmoutToBebeLoaded" Required>  -->

                                                <div class="input-group">
                                                    <div class="input-group-text" id="totalafterdeductionlable"></div>
                                                    <input class="form-control" type="text" placeholder=""
                                                        id="totalafterdeduction" name="total_amount" min="0" Required> 
                                                </div>

                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="lastname" class="form-label">Amount Loaded</label>


                                                <div class="input-group">
                                                    <div class="input-group-text" id="amountLoadedlable"></div>
                                                    <input class="form-control" type="text" placeholder=""
                                                        id="amountLoaded" name="AmoutLoaded" min="0" Required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $id ;?>">
                                            <div class="col-lg-12">
                                                <div class="text-center py-3">
                                                    <input type="submit" class='btn btn-primary' name="submit"
                                                        value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <?php


                                }
                            }
                            $link->close();
                        ?>
                            
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
        $( document ).ready(function() {
            var nationality = $("#nationality").data('nationality')
            $("#nationality").val(nationality.trim()).change();
       });
 
// flatpickr('#datepicker-basic');

// Submit the form values
$("#forex-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form. 
    var form = $(this);
    $.ajax({
        type: "POST",
        url: './api/forex-submit.php',
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            Swal.fire({
                title: 'Record Submitted Successfully',
                text: '',
                icon: 'success',
                timer: 15000
            })
            // Reset the form after succeful submission
            $("#forex-form")[0].reset();
        }
    });

});


// on entering input currencies get the live conversion 
// amountToBeLoaded amountLoaded toCurrency fromCurrency
function chargesCalculation(amount) {
    if (amount <= 10000) {

        return (amount * 1) /100;

    } else if (amount > 10000) {

        return (amount * 2) /100;

    } else {
        return 0;
    }
}
$('#amountToBeLoaded').change(function() {
    var amountToBeLoaded = $('#amountToBeLoaded').val();
    var charges = chargesCalculation(amountToBeLoaded);

    $('#chargesapplied').val(charges);
    $('#totalafterdeduction').val(amountToBeLoaded - charges);

})

$('#fromCurrency, #toCurrency,#amountToBeLoaded').change(function() {
    var fromCurrency = $('#fromCurrency').val()
    var toCurrency = $('#toCurrency').val()
    var amountToBeLoaded = $('#amountToBeLoaded').val()
    var totalafterdeduction = $('#totalafterdeduction').val()

    $("#amountToLoadLabel").text(fromCurrency);
    $("#Chargesapplied").text(fromCurrency);           
    $("#totalafterdeductionlable").text(fromCurrency);
    $("#amountLoadedlable").text(toCurrency);



    if (fromCurrency && toCurrency && amountToBeLoaded && totalafterdeduction) {
        if (fromCurrency !== toCurrency) {
            var myHeaders = new Headers();
            myHeaders.append("apikey", "a69TbH6u2SS2z8MZy1UYUQDb3PHwBbYA");

            var requestOptions = {
                method: 'GET',
                redirect: 'follow',
                headers: myHeaders
            };

            fetch("https://api.apilayer.com/currency_data/live?source=" + fromCurrency + "&currencies=" +
                    toCurrency, requestOptions)
                .then(response => response.json())
                .then(result => {
                    var key = fromCurrency + toCurrency;
                    $('#amountLoaded').val((result.quotes[key] * totalafterdeduction).toFixed(2))
                })
                .catch(error => console.log('error', error));
        }
    }
})
const selectElments = document.querySelectorAll("select");
const optionElments = document.querySelectorAll("option");
const fromCurrency = document.querySelector("#fromCurrency");
const toCurrency = document.querySelector("#toCurrency");

//fromCurrency toCurrency

selectElments.forEach((ele) => {
  ele.addEventListener("change", ({ target }) => {
     optionElments.forEach((option) => option.removeAttribute("disabled"));
    if (target.id === "fromCurrency") {
      toCurrency[target.selectedIndex].setAttribute("disabled", true);
    } else {
      fromCurrency[target.selectedIndex].setAttribute("disabled", true);
    }
  });
});
</script>
</body>


</html>