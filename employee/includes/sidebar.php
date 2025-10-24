<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="d-flex flex-column px-5 pt-5 shadow-sm border border-1" style="width: 300px; background-color: #D9D9D94D; min-height: calc(100vh - 56px);">
    <h5 class="fw-bold mb-4 pt-5 fs-4 text-center">Transactions</h5>

    <a href="withdraw.php"
       class="btn w-75 mb-3 ms-4 border border-2 me-1 d-flex align-items-center shadow-sm"
       style="background-color: <?php echo ($current_page == 'withdraw.php') ? '#00363126' : '#ffffff'; ?>;">
        <i class="ms-2 me-2 py-1"><img src="..\..\img\withdraw-image.png" style="width: 22px;"></i> Withdraw
    </a>

    <a href="deposit.php"
       class="btn w-75 mb-3 ms-4 border border-2 me-1 d-flex align-items-center shadow-sm"
       style="background-color: <?php echo ($current_page == 'deposit.php') ? '#00363126' : '#ffffff'; ?>;">
        <i class="ms-2 me-2 py-1"><img src="..\..\img\deposit-image.png" style="width: 22px;"></i> Deposit
    </a>
</div>
