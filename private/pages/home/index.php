<?php
    $htmlBuilder = new HTMLBuilder();
    $htmlBuilder->addStyle("/style/home/home.css")
                ->addBody("../private/pages/home/home.php")
                ->getHtml();
?>