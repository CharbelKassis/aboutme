<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->setTitle("CV Français")
                ->addBody("../private/pages/cv/fr/cv.php")
                ->getHtml();
?>