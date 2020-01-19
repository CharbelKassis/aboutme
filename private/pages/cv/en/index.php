<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->setTitle("English CV")
                ->addBody("../private/pages/cv/en/cv.php")
                ->getHtml();
?>