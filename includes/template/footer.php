</div>
</body>
<footer>
<nav class="foot-nav">
    <ul class="footer-nav" role="menu">
        <li class="nav-item"><a class="nav-item-footer" href="/contact">Contact Us</a></li>
    </ul>
</nav>
<p>© <a href="https://firepower.host/">FirePower</a> 2019</p>
<script type="text/javascript" src="/includes/template/js/jq.js"></script>
<script type="text/javascript" src="/includes/template/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/includes/template/js/firescript.js"></script>

    <?php
    if(isset($_SESSION["role"])) {
        if ($_SESSION["role"] == "Admin") {
            echo "<h3> PHP List All Session Variables</h3>";
            foreach ($_SESSION as $key => $val) {
                echo $key.": ".$val."<br/>";
            }
        }
    }
    ?>

<?php
    require "/includes/template/js/analytics.js";
?>
</footer>
</html>
