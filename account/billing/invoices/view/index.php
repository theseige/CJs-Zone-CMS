<?php
    require '/var/www/firepower.host/includes/db/connect.php';
    require '/var/www/firepower.host/includes/template/head.php';

    // Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /account/login/");
    exit;
}

    $sql = "SELECT id, user_id, username, email, name, address, city, state, zip, country, date, description, quantity, cost, tax, discounts, total FROM invoices WHERE user_id = :user_id";
if ($stmt = $pdo->prepare($sql)) {
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_STR);
    $user_id = $_SESSION["id"];
    if ($stmt->execute()) {
        if($stmt->rowCount() == 1) {
            if ($row = $stmt->fetch()) {
                           $id = $row["id"];
                $user_id = $row["user_id"];
                $username = $row["username"];
                $email = $row["email"];
                $name = $row["name"];
                $address = $row["address"];
                $city = $row["city"];
                $state = $row["state"];
                $zip = $row["zip"];
                $country = $row["country"];
                $date = $row["date"];
                $description = $row["description"];
                $quantity = $row["quantity"];
                $cost = $row["cost"];
                $tax = $row["tax"];
                $discounts = $row["discounts"];
                $total = $row["total"];
            }
        }
    }
}
?>
    <?php
    if(isset($id)) {
        ?>
    <div class="row border">
        <div class="col">
        Invoice ID: 
        <?php
        echo $id;
        ?>
        </div>
        <div class="col">
        Username: 
        <?php
        echo $username;
        ?>
        </div>
        <div class="col">
        Email: 
        <?php
        echo $email;
        ?>
        </div>
    </div>
    <div class="row border">
        <div class="col-4">
        Address: 
        <?php
        echo $address;
        ?>
        </div>
        <div class="col-4">
        City: 
        <?php
        echo $city;
        ?>
        </div>
        <div class="col-4">
        State: 
        <?php
        echo $state;
        ?>
        </div>
        <div class="col-4">
        Zip: 
        <?php
        echo $zip;
        ?>
        </div>
        <div class="col-4">
        Country: 
        <?php
        echo $country;
        ?>
        </div>
    </div>
    <div class="row border">
        <div class="col">
        Invoice Created Date: 
        <?php
        echo $date
        ?>
        </div>
        <div class="col">
        Description: 
        <?php
        echo $description;
        ?>
        </div>
        <div class="col">
        Quantity: 
        <?php
        echo $quantity;
        ?>
        </div>
    </div>
    <div class="row border">
        <div class="col">
        Cost: 
        <?php
        echo $cost;
        ?>
        </div>
        <div class="col">
        Tax: 
        <?php
        echo $tax;
        ?>
        </div>
        <?php if(isset($discount)) { ?>
        <div class="col">
        Discount: 
            <?php
            echo $discount;
            ?>
        </div>
            <?php
        }
        ?>
        <div class="col">
        Total: 
        <?php
        echo $total;
        ?>
        </div>
    </div>
        <?php
    } else {
        header("location: /account/billing/invoices/");
    }
    ?>


        <div class="row">
                <div class="col border"><a href="/account/billing/invoices/" class="btn">Back to Invoices</a></div>
                </div>

    
<?php
require '/var/www/firepower.host/includes/template/footer.php';
