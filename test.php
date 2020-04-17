<?php
    include_once('convertLayer.php');
    include_once('writeFile.php');
    include_once('readFile.php');
    $arr = Read('test1.txt');
    // writeFile($arr, 'test1.txt');
    $data = covertLayer($arr);
    $layer1 = $data['layer1'];
    $layer2 = $data['layer2'];

    include_once('echoText.php');
    echoData($layer1, $layer2);
    echo "<pre>";
      print_r($layer1);
    echo "<pre>";
    echo "<pre>";
      print_r($layer2);
    echo "<pre>";
    writeFile($layer1, 'layer1.txt');
    writeFile($layer2, 'layer2.txt');

?>
