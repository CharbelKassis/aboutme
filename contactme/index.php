<?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path .= "/include/html.php";
    include($path);

    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/contactme/contactme.css")
                ->addBody("contactme.html")
                ->getHtml();
?>