<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addBody("../private/pages/404/404.php")
                ->setTitle("Page Not Found")
                ->getHtml();
?>