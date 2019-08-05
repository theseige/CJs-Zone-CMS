<?php

    spl_autoload_register(
        function ($class) {
            include '/var/www/firepower.host/classes/' . $class . '.php';
        }
    );
    
    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/head.php';

    
    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "Admin") {
        header("location: /account/login/");
        exit;
    }
        
    ?>
    <div class="content">
        <div class="row">
            <div class="col p-3">
            <h1>FirePower Admins</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <p>First thing is first! I need to build out the users section, billing section, services section and ticket section.</p>
            </div>
        </div>
        
        <div class="row border">
            <div class="col-12"><h2 class="text-center">Paypal Sandbox Accounts</h2></div>
            <div class="col-6">Username: admin-facilitator@firepower.email</div>
            <div class="col-6">Password: Only For CJ</div>
            <div class="col-6">Username: admin-buyer@firepower.email</div>
            <div class="col-6">Password: abcd1234</div>
        </div>
        </div>
        <div class="row border">
            <div class="col p-2">
            <a target="_blank" href="/order/sandbox/" class="btn btn-outline-dark">Checkout Test</a>
            </div>
        </div>
        <div class="row p-2 border">
            <div class="col"><a target="_blank" href="/phpmyadmin/" class="btn btn-outline-dark">PhpMyAdmin</a></div>
            <div class="col"><a href="/account/" class="btn btn-outline-dark">Back to My Account</a></div>
        </div>
    </div>
    <?php

    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/footer.php';
    
    ?>
