<?php
    $htmlBuilder = new HTMLBuilder();
    
    $htmlBuilder->addStyle("/style/contactme/contactme.css")
                ->addBody("../private/pages/contactme/contactme.php")
                ->getHtml();
?>