<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/contactme/contactme.css")
                ->setTitle("Contact Me")
                ->addBody("../private/pages/contactme/contactme.php")
                ->getHtml();
?>