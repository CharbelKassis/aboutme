<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/projects/projects.css")
                ->setTitle("Projects")
                ->addBody("../private/pages/projects/projects.php")
                ->getHtml();
?>