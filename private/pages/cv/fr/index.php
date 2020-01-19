<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->addBody("../private/pages/cv/fr/cv.php")
                ->getHtml();
?>