<?php
if (isset($_SESSION["error"])) {
    ?>    
    <div class="toast">
        <div class="toast-header">
            <strong class="mr-auto">Success</strong>
            <button type="button" class="close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body text-danger font-weight-bold">
            &#10060; <?= $_SESSION["error"] ?>
        </div>
    </div>
    <?php
    unset($_SESSION["error"]);
}
if (isset($_SESSION["msg"])) {
    ?>
    <div class="toast">
        <div class="toast-header">
            <strong class="mr-auto">Success</strong>
            <button type="button" class="close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body text-success font-weight-bold">
            &check; <?= $_SESSION["msg"] ?>
        </div>
    </div>
    <?php
    unset($_SESSION["msg"]);
}
?>

