<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/projects/projects.css")
                ->addBody("../private/pages/projects/projects.php")
                ->getHtml();
?>