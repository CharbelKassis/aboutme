<?php
    include_once "config.php";
    include_once "lib/HTMLBuilder.php";
    include_once "urlHandler.php";

    if(isset($_GET["url"])) 
        $url = $_GET["url"];
    else
        $url = "";

    $url = rtrim($url,'/');
    $url = filter_var($url,FILTER_SANITIZE_URL);
    $url = array_filter(explode("/",$url));
    
    new UrlHandler($url);
?>