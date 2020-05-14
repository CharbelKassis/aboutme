<?php
    $q = $_GET["q"];
    preg_match('/^(http(?:s)?\:\/\/).*/',$q,$matches);

    //make sure the query starts with http or https to prevent file_get_content from searching local files
    if($matches[1] !== "https://" && $matches[1] !== "http://")
        $q = "http://".$q;

    $html = file_get_contents($q);
    echo($html);
?>