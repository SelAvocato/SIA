<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="d-flex flex-column px-5 pt-4 shadow-sm border border-1 rounded-start-4" style="min-width: 230px; background-color: #003631;">
    <div class="fw-semibold mb-2 mt-3" >
        <a href="step-1.php" class="text-decoration-none">
            <p style="color: <?php echo ($current_page == 'step-1.php') ? '#ffc107' : '#ffffffff'; ?>">1. Personal Details</p>
        </a>
    </div>
    <div class="fw-semibold mb-2" >
        <!-- <a href="step-2.php" class="text-decoration-none"> -->
            <p style="color: <?php echo ($current_page == 'step-2.php') ? '#ffc107' : '#ffffffff'; ?>">2. Security</p>
        <!-- </a> -->
    </div>
    <div class="fw-semibold mb-2" >
        <!-- <a href="step-3.php" class="text-decoration-none"> -->
            <p style="color: <?php echo ($current_page == 'step-3.php') ? '#ffc107' : '#ffffffff'; ?>">3. Review</p>
        <!-- </a> -->
    </div>
</div>
