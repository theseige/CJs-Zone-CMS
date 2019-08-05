<?php
    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/head.php';

    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /account/login/");
    exit;
}
?>

    <div class="page-header">
        <h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b></h1>
    </div>
    <p>
    Services will be arriving shortly. This is a new website which is being developed as fast but with the highest standards possible.
    </p>
    <p>
    Check out how fast our home page is <a target="_new" href="https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Ffirepower.host%2F&tab=desktop">at Google's PageSpeed tool!</a>
    </p>
    <div class="container">
    
    <div class="row border mx-auto my-2 p-2">
    <div class="col">
        <a href="/account/reset-password/" class="btn btn-outline-dark">Change Your Password</a>
    </div>
    
    
    <div class="col">
        <a href="/account/logout/" class="btn btn-outline-dark">Sign Out of Your Account</a>
    </div>
    </div>
    
    </div>
    
    <?php
    require '/var/www/firepower.host/includes/template/footer.php';

    ?>
