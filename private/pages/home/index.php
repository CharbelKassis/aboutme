<?php
    $htmlBuilder = new HTMLBuilder();
    $htmlBuilder->addStyle("/style/home/home.css")
                ->setTitle("Charbel Kassis")
                ->addBody("../private/pages/home/home.php")
                ->getHtml();
?>