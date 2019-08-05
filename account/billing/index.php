<?php
    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/head.php';

    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /account/login/");
    exit;
}
?>

        <div class="row">
        <div class="col border"><p><a href="/account/billing/invoices/" class="btn">Invoices</a></p>
        </div>
        </div>
        
        
        <div class="row">
        <div class="col border"><p><a href="/account/" class="btn">Back to Client Control Panel</a></p>
        </div>
        </div>

    
<?php
require '/var/www/firepower.host/includes/template/footer.php';
