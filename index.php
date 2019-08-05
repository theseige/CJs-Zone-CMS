<?php

    require '/var/www/cjs.zone/classes/Autoloader.php';
    
    $page = new Pages();
    $page::pageFromDb();
