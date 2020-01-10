<?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path .= "/include/html.php";
    include($path);

    $htmlBuilder = new HTMLBuilder();
    $htmlBuilder->addStyle("./projects/style/projects.css")->addBody("projects.html")->getHtml();