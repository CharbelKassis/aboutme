<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addBody(PRIVATE_ROOT."pages/404/404.php")
                ->setTitle("Page Not Found")
                ->getHtml();
?>