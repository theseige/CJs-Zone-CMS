<?php

    require __DIR__ . '/classes/Autoloader.php';
    
    $page = new Pages();
    $page::pageFromDb();
