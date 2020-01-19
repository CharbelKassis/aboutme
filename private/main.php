<?php
    include_once "config.php";
    include_once "lib/HTMLBuilder.php";
    
    if(isset($_GET["url"])) {
        $url = rtrim($_GET["url"],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $phpFile = "../private/pages/$url/index.php";

        if(file_exists($phpFile))
            include($phpFile);
        else {
            http_response_code(404);
            include("pages/404/index.php");
        }
            
    }

    //If no url is passed then the main page is called
    else {
        include("pages/home/index.php");
    }
?>