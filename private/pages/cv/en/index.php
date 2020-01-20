<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/cv/cv.css")
                ->setTitle("English CV")
                ->addBody(PRIVATE_ROOT."pages/cv/en/cv.php")
                ->getHtml();
?>