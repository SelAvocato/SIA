<?php 
$pageTitle = "Transaction History";
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container-fluid px-4 py-4" style="background-color: #f5f5f0; min-height: 100vh;">
    
    <!--------------------------- PAGE TITLE --------------------------------------------------------------------------------------->
    <h2 class="fw-bold mb-4" style="color: #003631;">Transaction History</h2>

    <!--------------------------- FILTERS SECTION ---------------------------------------------------------------------------------->
    <div class="row mb-4">
        
        <!----------------------- TRANSACTION TYPE FILTER -------------------------------------------------------------------------->
        <div class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text bg-white border-0">
                    <input class="form-check-input mt-0" type="checkbox" checked>
                </span>
                <select class="form-select border-0 bg-white">
                    <option selected>All Transaction Types</option>
                    <option>Bank Transfer</option>
                    <option>Deposit</option>
                    <option>Withdrawal</option>
                </select>
            </div>
        </div>

        <!----------------------- QUICK DATE FILTERS ------------------------------------------------------------------------------->
        <div class="col-lg-2">
            <button class="btn text-muted btn-light w-100 border-0">Last 30 Days</button>
        </div>
        <div class="col-lg-2">
            <button class="btn text-muted btn-light w-100 border-0">Last Month</button>
        </div>
        <div class="col-lg-1">
            <button class="btn text-muted btn-light w-100 border-0">0 Year</button>
        </div>

        <!----------------------- CUSTOM DATE RANGES -------------------------------------------------------------------------------->
        <div class="col-lg-2">
            <div class="input-group">
                <input type="text" class="form-control border-0 bg-white" placeholder="From Date">
                <span class="input-group-text bg-white border-0">
                    <i class="bi bi-calendar3"></i>
                </span>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="input-group">
                <input type="text" class="form-control border-0 bg-white" placeholder="To Date">
                <span class="input-group-text bg-white border-0">
                    <i class="bi bi-calendar3"></i>
                </span>
            </div>
        </div>
    </div>

    <!--------------------------- EXPORT BUTTON ------------------------------------------------------------------------------------>
    <div class="text-end mb-3">
        <a href="#" class="text-decoration-none fw-semibold" style="color: #003631;">Export to CSV/PDF</a>
    </div>

    <!--------------------------- TRANSACTION TABLE -------------------------------------------------------------------------------->
    <div class="card border-1 shadow-sm px-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0 table-borderless " style="border-collapse: separate; border-spacing: 0 12px;">
                    <thead class="bg-white">
                        <tr>
                            <th class="py-3 px-4 fw-semibold" style="color: #003631;">Status</th>
                            <th class="py-3 px-4 fw-semibold" style="color: #003631;">Transaction ID</th>
                            <th class="py-3 px-4 fw-semibold" style="color: #003631;">Transaction Type</th>
                            <th class="py-3 px-4 fw-semibold" style="color: #003631;">Date and Time</th>
                            <th class="py-3 px-4 fw-semibold text-end" style="color: #003631;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <!------- TRANSACTIONS ------------------------------------------------------------------------------------->
                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-up-right text-danger fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-danger rounded-end-4">
                                +PHP 1,550.00
                            </td>
                        </tr>

                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-down-left text-success fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-success rounded-end-4">
                                -PHP 1,550.00
                            </td>
                        </tr>
                        
                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-up-right text-danger fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-danger rounded-end-4">
                                +PHP 1,550.00
                            </td>
                        </tr>

                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-down-left text-success fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-success rounded-end-4">
                                -PHP 1,550.00
                            </td>
                        </tr>

                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-up-right text-danger fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-danger rounded-end-4">
                                +PHP 1,550.00
                            </td>
                        </tr>

                        <tr class="align-middle table-secondary mb-3">
                            <td class="px-4 my-3 rounded-start-4">
                                <i class="bi bi-arrow-down-left text-success fs-4"></i>
                            </td>
                            <td class="px-4">143824123098</td>
                            <td class="px-4">Bank Transfer</td>
                            <td class="px-4">10 October 2025, 10:57 AM</td>
                            <td class="px-4 text-end text-success rounded-end-4">
                                -PHP 1,550.00
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php include('../includes/footer.php'); ?>