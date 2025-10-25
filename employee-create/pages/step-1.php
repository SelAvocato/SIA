<?php
include('../layout/header.php');
?>

<p class="ms-3" style="font-weight: 500;">Step 1 of 3: Customer Create Account</p>
<div class="d-flex flex-grow-1 mb-5 border border-1 rounded-4 border-subtle shadow-sm">
    <?php include '../layout/sidebar.php'; ?>
    <div class="flex-grow-1 px-5 py-4 rounded-end-4" style="background-color: #D9D9D94D;">

        <!-- FORM ------------------------------------------------------------------------------------------------------>
        <form action="step-2.php" method="post">

            <!-- PERSONAL DETAILS ------------------------------------------------------------------------------------------------------>
            <div class="mb-4 p-2">
                <h5 class="fw-semibold fs-4 mb-2">Personal Details</h5>
                <div class="row g-3">
                    <div class="col-md-4 mb-1">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control border border-1 border-dark" placeholder="Juan">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control border border-1 border-dark" placeholder="Andrade">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control border border-1 border-dark" placeholder="Dela Cruz">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Home Address (House No./Street/Bldg)</label>
                        <input type="text" name="home_address" class="form-control border border-1 border-dark" placeholder="Blk 1 Lot 1 Sinforosa Street">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Barangay</label>
                        <input type="text" name="barangay" class="form-control border border-1 border-dark" placeholder="Brgy. San Bartolome">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control border border-1 border-dark" placeholder="Quezon City">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Province</label>
                        <input type="text" name="province" class="form-control border border-1 border-dark" placeholder="Metro Manila">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select border border-1 border-dark">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control border border-1 border-dark">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Place of Birth</label>
                        <input type="text" name="pob" class="form-control border border-1 border-dark" placeholder="Quezon City">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Civil Status</label>
                        <select name="civil_status" class="form-select border border-1 border-dark">
                            <option selected>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Citizenship</label>
                        <input type="text" name="citizenship" class="form-control border border-1 border-dark" placeholder="Filipino">
                    </div>
                </div>
            </div>

            <!-- CONTACT DETAILS ------------------------------------------------------------------------------------------------------>
            <div class="mb-4">
                <h5 class="fw-semibold fs-4 pt-2 mb-2">Contact Details</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control border border-1 border-dark" placeholder="example@gmail.com">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="mobile" class="form-control border border-1 border-dark" placeholder="+63 912 345 6789">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Telephone Number</label>
                        <input type="text" name="telephone" class="form-control border border-1 border-dark" placeholder="02 0000 0000">
                    </div>
                </div>
            </div>

            <!-- FINANCIAL DETAILS ------------------------------------------------------------------------------------------------------>
            <div class="mb-5">
                <h5 class="fw-semibold fs-4 pt-2 mb-2">Financial Details</h5>
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Source of Funds</label>
                        <select name="source_of_funds" class="form-select border border-1 border-dark">
                            <option selected>Employment</option>
                            <option>Business</option>
                            <option>Remittance</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Employment Status</label>
                        <select name="employment_status" class="form-select border border-1 border-dark">
                            <option selected>Employed</option>
                            <option>Unemployed</option>
                            <option>Self-Employed</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Name of Employer</label>
                        <input type="text" name="employer" class="form-control border border-1 border-dark" placeholder="Richard Dean">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="employer_address" class="form-control border border-1 border-dark" placeholder="123 Bldg. Metro Manila">
                    </div>
                </div>
            </div>

            <!-- BUTTONS ------------------------------------------------------------------------------------------------------>
            <div class="ms-3 my-4 d-flex gap-3">
                <button type="submit" class="btn rounded-4 shadow-sm" style="background-color:#f7b748; width:120px;">Continue</button>
                <button type="reset" class="btn btn-light border rounded-4 shadow-sm" style="width:120px;">Cancel</button>
                <button type="button" class="btn btn-light border rounded-4 shadow-sm" style="width:120px;">Save Drafts</button>
            </div>
        </form>
    </div>
</div>