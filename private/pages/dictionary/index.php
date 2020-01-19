<?php

$htmlBuilder = new HTMLBuilder();

$htmlBuilder->addStyle("/style/dictionary/dictionary.css")
            ->setTitle("Dictionary App")
            ->addScript("/script/dictionary/app.js",true)
            ->addBody("../private/pages/dictionary/dictionary.php")
            ->getHtml();
?>