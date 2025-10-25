<?php 
$pageTitle = "Reciept";
include('../layout/header.php');
include('../layout/navbar.php');
?>

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5" style="background-color: #f8f8f4;">
        
        <!----------------------- NAME AND STATUS ---------------------------------------------------------------------------------->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <small class="text-muted d-block">Transferred to:</small>
                <h5 class="fw-bold" style="color: #003631;">Juan Dela Cruz</h5>
            </div>
            <div class="text-end">
                <small class="text-muted d-block">Status: 
                    <span class="ms-5" style="color: #01A809;">● Completed</span>
                </small>
                <small class="text-muted">Transaction ID: 
                    <span class="text-muted">24DDUX82947SDA2</span>
                </small>
            </div>
        </div>

        <!----------------------- TOTAL AMOUNT ------------------------------------------------------------------------------------->
        <div class="card border-0 mb-4 rounded-4" style="background-color: #D9D9D94D;">
            <div class="card-body">
                <p class="fw-bold mb-2">Total Amount Transferred:</p>
                <h2 class="fw-bold fs-1 ms-3 mb-0" style="color: #003631;">₱ 615.00</h2>
                <div class="d-flex justify-content-start mt-2 ms-3 text-muted">
                    <small>Service charge applied:</small>
                    <small class="ms-1">+15.00</small>
                </div>
            </div>
        </div>

        <!----------------------- DETAILS ------------------------------------------------------------------------------------------>
        <div class="mt-4 mb-2">
            <p class="fw-semibold mb-3 text-muted">Details:</p>

            <div class="d-flex justify-content-between mb-4">
                <small class="text-muted">Remaining Balance:</small>
                <small class="fs-6 text-muted" style="color: #003631;">₱24,698.93</small>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <small class="text-muted">Transferred From:</small>
                <div class="text-end">
                    <small class="fs-6 d-block" style="color: #003631;">Juan Dela Cruz</small>
                    <small class="text-muted">143824123098</small>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <small class="text-muted">Transferred To:</small>
                <div class="text-end">
                    <small class="fs-6 d-block" style="color: #003631;">Maria Allah Reviles</small>
                    <small class="text-muted">0967 572 7902</small>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <small class="text-muted">Message:</small>
                <small class="text-muted">None</small>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <small class="text-muted">Date and Time:</small>
                <small class="text-muted">October 21, 2025 – 5:30 PM</small>
            </div>
        </div>

        <!----------------------- PRINT AND CONFIRM BUTTON ----------------------------------------------------------------------------------->
        <div class="justify-content-between text-end mt-5">
            <button class="btn me-2" 
                    style="background-color: #bba27bff; border-radius: 8px;">
                Download Reciept
            </button>
            <button class="btn" 
                    style="background-color: #F1B24A; border-radius: 8px;">
                Confirm
            </button>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>
