<?php include '../includes/header.php'; ?>

<div class="d-flex flex-grow-1">
    <?php include '../includes/sidebar.php'; ?>
    <div class="flex-grow-1 bg-white p-5" >
        <div class="rounded-4 border border-1 px-5 py-3 shadow-sm mx-auto" style="max-width: 900px; background-color: #D9D9D94D;" >
            <h4 class="fw-semibold mb-4">Withdraw</h4>
            <hr class="w-100">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Account Number</label>
                        <input type="text" class="form-control bg-light border-0">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Transaction Date</label>
                        <input type="text" class="form-control bg-light border-0" value="default Date and Time" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control bg-light border-0">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Current Balance</label>
                        <input type="text" class="form-control bg-light border-0" value="default Balance" readonly>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Withdraw Amount</label>
                    <input type="text" class="form-control bg-light border-0">
                </div>
                <div class="d-flex">
                    <button class="btn text-white me-2 px-4" style="background-color: #f4a32b;">Submit</button>
                    <button class="btn btn-outline-secondary px-4">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
