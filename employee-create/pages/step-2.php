<?php
include('../layout/header.php');
?>

<p class="ms-3" style="font-weight: 500;">Step 2 of 3: Security & Credentials</p>
<div class="d-flex flex-grow-1 mb-3 border border-1 rounded-4 border-subtle shadow-sm">
    <?php include '../layout/sidebar.php'; ?>
    <div class="flex-grow-1 px-5 py-4 rounded-end-4" style="background-color: #D9D9D94D;">

        <!-- FORM ------------------------------------------------------------------------------------------------------>
        <form action="step-3.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <h5 class="fw-semibold fw-semibold fs-4 pt-2 mt-1 mb-4">Security & Credentials</h5>
                    <!-- LEFT SECTION ------------------------------------------------------------------------------------------------------------------------>
                    <div class="col-md-6 pe-5">

                        <div class="mb-3">
                            <h6 class="fw-semibold">Create your Credentials</h6>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control border border-1 border-dark" placeholder="JDelaCruz">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control border border-1 border-dark" placeholder="************">
                        </div>

                        <div class="mb-5">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control border border-1 border-dark" placeholder="************">
                        </div>
                        <!-- BUTTONS ------------------------------------------------------------------------------------------------------------------------------>
                        <div class="d-flex gap-3 mt-4">
                            <button type="submit" class="btn rounded-4 shadow-sm" style="background-color:#f7b748; width:120px;">Continue</button>
                            <button type="reset" class="btn btn-light border rounded-4 shadow-sm" style="width:120px;">Cancel</button>
                            <button type="button" class="btn btn-light border rounded-4 shadow-sm" style="width:120px;">Save Drafts</button>
                        </div>
                    </div>

                    <!-- RIGHT SECTION ------------------------------------------------------------------------------------------------------------------------>
                    <div class="col-md-6 px-5">
                        <div class="mb-3">
                            <h6 class="fw-semibold">Multi-Factor Authentication (MFA)</h6>
                        </div>

                        <div class="mb-3 d-flex align-items-end">
                            <div class="flex-grow-1 me-2">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control border border-1 border-dark" placeholder="+63 000 000 0000">
                            </div>
                            <button type="button" class="btn bg-dark ms-2 text-white rounded-4" style="background-color:#004d40; height:38px;">Send Code</button>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Code</label>
                            <div class="d-flex gap-2">
                                <input type="text" maxlength="1" class="form-control text-center border border-1 border-dark" style="width:50px;">
                                <input type="text" maxlength="1" class="form-control text-center border border-1 border-dark" style="width:50px;">
                                <input type="text" maxlength="1" class="form-control text-center border border-1 border-dark" style="width:50px;">
                                <input type="text" maxlength="1" class="form-control text-center border border-1 border-dark" style="width:50px;">
                            </div>
                        </div>

                        <div class="mt-2" style="font-size: 14px;">
                            <span>Didn’t receive the code? <a href="#" class="text-decoration-none fw-semibold text-dark">Resend Code</a></span><br>
                            <span>(You can request a new code in 30 seconds)</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
