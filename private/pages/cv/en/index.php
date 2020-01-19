<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->addBody("../private/pages/cv/en/cv.php")
                ->getHtml();
?>