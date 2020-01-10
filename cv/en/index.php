<?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path .= "/include/html.php";
    include($path);

    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("../style/cv.css")->addBody("cv.html")->getHtml();
?>