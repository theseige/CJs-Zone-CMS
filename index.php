<?php

    require $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';
    
    $page = new Pages();
    $page::pageFromDb();
