<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="d-flex flex-column p-3" style="width: 260px; background-color: #D9D9D94D; min-height: calc(100vh - 56px);">
    <h5 class="fw-semibold mb-4">Transactions</h5>

    <a href="withdraw.php"
       class="btn w-100 text-start mb-2 d-flex align-items-center <?php echo ($current_page == 'withdraw.php') ? 'text-white' : 'text-dark'; ?>"
       style="background-color: <?php echo ($current_page == 'withdraw.php') ? '#003631' : '#ffffff'; ?>;">
        <i class="bi bi-wallet2 me-2"></i> Withdraw
    </a>

    <a href="deposit.php"
       class="btn w-100 text-start d-flex align-items-center <?php echo ($current_page == 'deposit.php') ? 'text-white' : 'text-dark'; ?>"
       style="background-color: <?php echo ($current_page == 'deposit.php') ? '#003631' : '#ffffff'; ?>;">
        <i class="bi bi-arrow-down-circle me-2"></i> Deposit
    </a>
</div>
