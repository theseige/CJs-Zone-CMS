<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/db/connect.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/template/head.php';

    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /account/login/");
    exit;
}
?>

    <div class="row border">
        <div class="col-12"><h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b></h1></div>
        <div class="col-12"><p>Thanks for trying out my user system. Not much here yet! This is a new website which is being developed as fast but with the highest standards possible.</p></div>
    </div>
	    
    <div class="row border mx-auto my-2 p-2">
    <div class="col">
        <a href="/account/reset-password/" class="btn btn-outline-dark">Change Your Password</a>
    </div>
    
    
    <div class="col">
        <a href="/account/logout/" class="btn btn-outline-dark">Sign Out of Your Account</a>
    </div>
    </div>
        
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/template/footer.php';
