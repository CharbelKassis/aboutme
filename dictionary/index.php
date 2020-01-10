<?php

$path = $_SERVER["DOCUMENT_ROOT"];
$path .= "/include/html.php";
include($path);

$htmlBuilder = new HTMLBuilder();

$htmlBuilder->addStyles(["./style/main.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"])
            ->addScript("./app.js",true)
            ->addBody("dictionary.html")
            ->getHtml();
?>