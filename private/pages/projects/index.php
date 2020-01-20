<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/projects/projects.css")
                ->setTitle("Projects")
                ->addBody(PRIVATE_ROOT."pages/projects/projects.php")
                ->addBodyClass("imageBackground")
                ->getHtml();
?>