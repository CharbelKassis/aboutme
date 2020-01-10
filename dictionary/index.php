<?php

$path = $_SERVER["DOCUMENT_ROOT"];
$path .= "/include/html.php";
include($path);

$htmlBuilder = new HTMLBuilder();

$htmlBuilder->addStyles(["./dictionary/style/main.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"])
            ->addScript("./dictionary/app.js",true)
            ->addBody("dictionary.html")
            ->getHtml();
?>