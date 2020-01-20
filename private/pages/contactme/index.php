<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/contactme/contactme.css")
                ->setTitle("Contact Me")
                ->addBody(PRIVATE_ROOT."pages/contactme/contactme.php")
                ->addBodyClass("imageBackground")
                ->getHtml();
?>