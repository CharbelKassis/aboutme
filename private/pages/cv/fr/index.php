<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->setTitle("CV Français")
                ->addBody(PRIVATE_ROOT."pages/cv/fr/cv.php")
                ->getHtml();
?>