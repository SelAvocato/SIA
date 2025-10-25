<?php
include('../layout/header.php');
?>

<p class="ms-3" style="font-weight: 500;">Step 3 of 3: Review Your Information</p>
<div class="d-flex flex-grow-1 mb-5">
    <?php include '../layout/sidebar.php'; ?>
    <div class="flex-grow-1 py-4 px-5 rounded-end-4" style="background-color: #D9D9D94D;">

        <div class="container-fluid">
            <h5 class="fw-semibold fw-semibold fs-4 pt-2 mt-1 mb-4">Review Your Information</h5>
            <div class="bg-white p-4 rounded-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-semibold ps-3" style="font-size: 20px;">Personal Details</h6>
                    <button type="button" class="btn btn-light border d-flex align-items-center gap-2 px-3 py-1" style="font-size:14px;">
                        <a href="step-1.php" class="text-decoration-none text-dark"><i class="bi bi-pencil"></i> Edit</a> 
                    </button>
                </div>

                <!-- PERSONAL DETAILS ------------------------------------------------------------------------------------------>
                <div class="mb-4 ps-3">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <p class="mb-1">Full Name</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Juan Dela Cruz</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Home Address</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">29 Sinforosa st, Brgy. Nagkaisa, Metro Manila, Philippines</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Gender</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Male</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Date of Birth</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">January 1, 1997</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Place of Birth</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Quezon City</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Civil Status</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Single</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Citizenship</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Filipino</p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- CONTACT DETAILS ------------------------------------------------------------------------------------------>
                <div class="mb-4 ps-3">
                    <h6 class="fw-semibold">Contact Details</h6>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <p class="mb-1">Email Address</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">juandelacruz@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Contact Number</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">0912 345 6789</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Telephone Number</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">----</p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- FINANCIAL DETAILS ------------------------------------------------------------------------------------------>
                <div class="mb-3 ps-3">
                    <h6 class="fw-semibold">Financial Details</h6>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <p class="mb-1">Source of Funds</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Employment</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Employment Status</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Employed</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Name of Employer</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">Richard Dean</p>
                        </div>
                        <div class="col-md-4">
                            <p class="mb-1">Address</p>
                        </div>
                        <div class="col-md-8">
                            <p class="fw-semibold text-dark">123 Bldg. Metro Manila</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 ms-3">
                <!-- CHECKBOX ------------------------------------------------------------------------------------------>
                <div class="form-check mb-4">
                <input class="form-check-input border border-dark" type="checkbox" id="confirmCheck" required>
                <label class="form-check-label" for="confirmCheck" style="font-size:14px;">
                    I have reviewed and confirm that all the information provided is accurate and I agree to the Evergreen Bank’s
                    <a href="#" class="text-decoration-none text-dark fw-semibold">Terms and Conditions</a>.
                </label>
                </div>

                <!-- BUTTONS ------------------------------------------------------------------------------------------>
                <div class="d-flex gap-3">
                    <!-- CONFIRM BUTTON ------------------------------------------------------------------------------------------>
                    <button class="btn rounded-4" style="background-color:#F1B24A; width:120px;" data-bs-toggle="modal" data-bs-target="#accountSuccessModal" type="button">
                        Confirm
                    </button>

                    <button class="btn rounded-4 btn-light border" style="width:120px;" type="reset">
                        Cancel
                    </button>
                </div>

                <!-- SUBMITTED SUCCESSFULLY POP UP ---------------------------------------------------------------------->
                <div class="modal fade" id="accountSuccessModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content border-0 shadow " style="border-radius:15px;">
                            <div class="modal-body text-center bg-light p-5 rounded-4">
                                <h4 class="fw-bold mb-5">Account Created Successfully!</h4>
                                <div class="d-flex justify-content-center mb-5">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                                        style="background-color:#4CAF50; width:100px; height:100px;">
                                        <i class="bi bi-check-lg text-white" style="font-size:50px;"></i>
                                    </div>
                                </div>
                                <p class="mb-1 mb-2" style="font-size:14px;">Account Number</p>
                                <h6 class="fw-bold" style="margin-bottom: 35px">143824123098</h6>
                                <button class="btn rounded-4 px-4" style="background-color:#F1B24A;" data-bs-dismiss="modal">
                                    Back to Home
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap JS NEEDED FOR POP UP TO WORK ---------------------------------------------------------------------->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </div>
</div>
