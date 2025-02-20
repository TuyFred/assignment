<?php
$data = [
    "name" => "fred",
    "age" => 23,
    "email" => "fred@gmail.com"
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);
echo $jsonData;
?>
