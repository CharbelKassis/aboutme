<?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path .= "/include/html.php";
    include($path);

    $htmlBuilder = new HTMLBuilder();
    $htmlBuilder->addStyle("./style/projects.css")->addBody("projects.html")->getHtml();