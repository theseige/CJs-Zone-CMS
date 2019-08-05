<?php
    
    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/head.php';

    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /account/login/");
    exit;
}
if (!$_SESSION["role"] == "Admin" xor !$_SESSION["role"] == "Employee") {
    header("location: /account/login/");
    exit;
}
    
?>
    <p>First thing is first! I need to add a users section, billing section, services section and ticket section.</p>

    
        <p><a href="/account/" class="btn">Back to Client Control Panel</a></p>
    
    <?php
    
    require '/var/www/firepower.host/includes/template/footer.php';

    ?>
