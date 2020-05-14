<?php
    $q = $_GET["q"];
    $html = file_get_contents($q);
    echo($html);
?>