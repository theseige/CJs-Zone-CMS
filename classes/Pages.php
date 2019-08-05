<?php
class Pages
{

        
    public function setVars() 
    {
        $request_uri = $_SERVER['REQUEST_URI'];    
        return $request_uri;
    }
        
    public function loadHeader()
    {
            
    }
        
        
    public function pageFromDb()
    {
        $request_uri = Pages::setVars();
        include './includes/db/connect.php';
        $title = $pdo->prepare("SELECT title FROM pagedata WHERE slug='$request_uri'");
        $title->execute();
        $titleToUse = $title->fetchcolumn();
        include './includes/template/head.php';
        $page = $pdo->prepare("SELECT content FROM pagedata WHERE slug='$request_uri'");
        $page->execute();
        $pageResult = $page->fetchcolumn();
        echo $pageResult;
        include './includes/template/footer.php';
    }
        
}
