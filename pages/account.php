<?php 
$pageTitle = "Account";
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container-fluid ">
    <div class="row">
        <!----------------------- LEFT SIDEBAR -------------------------------------------------------------------------------------> 
        <div class="col-md-5 col-lg-4 pt-5 px-5" style="background-color: #D9D9D94D;">
            <h4 class="fw-normal">Your <br></h4>
            <h4 class="fw-bold"> Accounts</h4>

            <!------------------- SEARCH BAR AND FILTER ---------------------------------------------------------------------------->
            <div class="d-flex align-items-center justify-content-between bg-light shadow-sm px-3 py-2 mb-4" style="max-width: 400px;">
                <div class="d-flex align-items-center flex-grow-1">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search" style="box-shadow: none;">
                    <i class="bi bi-search text-muted "></i>
                </div>
                <div class="vr mx-2 my-2"></div>

                <!--------------- FILTER BUTTON ------------------------------------------------------------------------------------>
                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sliders me-1 fs-5" style="transform:rotate(90deg);"></i>
                    <span class="ms-1 small">Filter</span>
                    </a>

                    <!----------- FILTER DROPDOWN  ---------------------------------------------------------------------------------->
                    <div class="dropdown-menu dropdown-menu-end p-3 shadow" style="width: 220px;">
                        <h6 class="fw-bold mb-2">Filter Accounts</h6>
                        <small class="fw-bold text-muted">By Account Type</small>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="savings">
                            <label class="form-check-label" for="savings">Savings Accounts</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checking">
                            <label class="form-check-label" for="checking">Checking Accounts</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="credit">
                            <label class="form-check-label" for="credit">Credit Cards</label>
                        </div>
                        <small class="fw-bold text-muted">By Account Status</small>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="active">
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="closed">
                            <label class="form-check-label" for="closed">Closed</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-success btn-sm rounded-pill px-3">Apply Filters</button>
                            <button class="btn btn-link btn-sm text-muted">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!------------------- SAVINGS ACCOUNTS ---------------------------------------------------------------------------------->
            <div class="mb-4">
                <h6 class="fw-normal ms-2">Savings Accounts</h6>
                <div class="card border-0 shadow-sm mb-2" style="background-color: #d6a3a341;">
                    <div class="card-body rounded position-relative">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-credit-card fs-2 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1 ms-3">Juan Dela Cruz</h6>
                                    <small class="text-muted d-block ms-3">143824123098</small>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">Available Balance</small>
                                <small class="text-muted">PHP 104,324.32</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">Current Balance</small>
                                <small class="text-muted">PHP 104,324.32</small>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!------------------- CHECKING ACCOUNT --------------------------------------------------------------------------------->
            <div class="mb-4">
                <h6 class="fw-normal ms-2">Checking Accounts</h6>
                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body rounded position-relative">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-credit-card-2-front fs-2 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1 ms-3">Juan Dela Cruz</h6>
                                    <small class="text-muted d-block ms-3">143824123098</small>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">Available Balance</small>
                                <small class="text-muted">PHP 104,324.32</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">Current Balance</small>
                                <small class="text-muted">PHP 104,324.32</small>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!------------------- CREDIT CARD -------------------------------------------------------------------------------------->
            <div class="mb-4">
                <h6 class="fw-normal ms-2">Credit Cards</h6>
                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body rounded position-relative">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-credit-card-fill fs-2 text-dark"></i>
                                <div>
                                    <h6 class="fw-bold mb-1 ms-3">Juan Dela Cruz</h6>
                                    <small class="text-muted d-block ms-3">143824123098</small>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <!---- PROGRESS BAR ------------------------------------------------------------------------------------>
                            <div class="progress mb-2" style="height: 8px; background-color: #e9ecef; border-radius: 10px;">
                                <div class="progress-bar" 
                                    role="progressbar" 
                                    style="width: 10.49%; background-color: #004d40; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">Available Credit</small>
                                <small class="text-muted">PHP 5,245 / 50,000 Limit</small>
                            </div>
                        </div>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!------------------- ADD ACCOUNT -------------------------------------------------------------------------------------->
            <button class="btn w-100 my-2" style="background-color: #F1B24A;">
                <i class="bi bi-plus-lg">   </i> Add Account
            </button>
        </div>

        <!----------------------- MAIN CONTENT ------------------------------------------------------------------------------------->
        <div class="col-md-7 col-lg-8 pt-5 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold mb-0 px-4">Juan Dela Cruz</h4>
                <small class="text-danger fw-semibold me-5">Last Updated: Just now</small>
            </div>
            
            <hr>

            <!------------------- ACCOUNT DETAILS ---------------------------------------------------------------------------------->
            <div class="card border-0 shadow-sm mb-4 px-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Account Details</h6>
                    <div class="row mb-4 d-flex">
                        <div class="col-md-3">
                            <p class="mb-0 text-muted">Account Number</p>
                            <p>143824123098</p>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-0 text-muted">Account Name</p>
                            <p>Juan Dela Cruz</p>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-0 text-muted">Account Type</p>
                            <p">Savings - Pesos</p>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-0 text-muted">Branch</p>
                            <p>BDO SM Fairview</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 text-muted"><p>Beginning Balance:</p></div> 
                        <div class="col-md-3"><p>PHP 105,000.00</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 text-muted"><p>Deposit/Credits:</p></div> 
                        <div class="col-md-3"><p>PHP 10,000.00</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 text-muted"><p>Withdrawal/Debits:</p></div> 
                        <div class="col-md-3"><p>PHP 5,000.00</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 text-muted"><p>Service Charges:</p></div> 
                        <div class="col-md-3"><p>PHP 280.00</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 text-muted"><p>Ending Balance:</p></div> 
                        <div class="col-md-3"><p>PHP 30,000.00</p></div>
                    </div>
                </div>
            </div>

            <!------------------- TRANSACTION HISTORY ------------------------------------------------------------------------------>
            <div class="card border-0 shadow-sm px-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold mb-2">Transaction History</h6>
                        <a href="#" class="text-success small me-4">View All</a>
                    </div>

                    <!----------- TRANSACTIONS ------------------------------------------------------------------------------------->
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center border rounded mb-4" style="background-color: #D9D9D94D;">
                            <div>
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <i class="bi bi-arrow-down-left text-success fs-2"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <strong>Bank Transfer</strong><br>
                                        <small class="text-muted">Transaction ID</small><br>
                                        <small>143824123098</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <span class="text-danger fw-semibold">-PHP 1,550.00</span><br>
                                <small class="text-muted">10 October 2025<br>10:57 PM</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border rounded mb-4" style="background-color: #D9D9D94D;">
                            <div>
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <i class="bi bi-arrow-up-right text-warning fs-2"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <strong>Bank Transfer</strong><br>
                                        <small class="text-muted">Transaction ID</small><br>
                                        <small>143824123098</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <span class="text-danger fw-semibold">-PHP 1,550.00</span><br>
                                <small class="text-muted">10 October 2025<br>10:57 PM</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border rounded mb-4" style="background-color: #D9D9D94D;">
                            <div>
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <i class="bi bi-arrow-up-right text-warning fs-2"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <strong>Bank Transfer</strong><br>
                                        <small class="text-muted">Transaction ID</small><br>
                                        <small>143824123098</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <span class="text-danger fw-semibold">-PHP 1,550.00</span><br>
                                <small class="text-muted">10 October 2025<br>10:57 PM</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border rounded mb-4" style="background-color: #D9D9D94D;">
                            <div>
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <i class="bi bi-arrow-down-left text-success fs-2"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <strong>Bank Transfer</strong><br>
                                        <small class="text-muted">Transaction ID</small><br>
                                        <small>143824123098</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <span class="text-danger fw-semibold">-PHP 1,550.00</span><br>
                                <small class="text-muted">10 October 2025<br>10:57 PM</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <small class="mt-4 ms-3 mb-2 text-muted">Last login: October 12, 2025, 10:45 AM</small>
    </div>
</div>
<?php include('../includes/footer.php'); ?>
