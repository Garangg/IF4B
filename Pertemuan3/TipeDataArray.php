<?php

$data = array("mannga", "jeruk", "pisang");
var_dump($data);
echo $data[0] .PHP_EOL;
echo $data[1] .PHP_EOL;
echo $data[2] .PHP_EOL;

foreach($data as $buah){
    echo "Nama Buah : " . $buah .PHP_EOL;
}

?>