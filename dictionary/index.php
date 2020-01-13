<?php

$path = $_SERVER["DOCUMENT_ROOT"];
$path .= "/include/html.php";
include($path);

$htmlBuilder = new HTMLBuilder();

$htmlBuilder->addStyle("/style/dictionary/dictionary.css")
            ->addScript("./app.js",true)
            ->addBody("dictionary.html")
            ->getHtml();
?>