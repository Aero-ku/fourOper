<?php
head('content-type:text/html;charset="utf-8"');
error_reporting(0);
    $dataArrays = $_Post['detailArr'];
    $arrayLength = count(dataArrays);
    $myfile = fopen("result.txt", "w") or die("Unable to open file!");
    for($x = 0; $x < $arrayLength; $x++){
        $txt= $dataArrays[$x]+"\n";
        fwrite($myfile, $txt);
    }
     fclose($myfile);
`