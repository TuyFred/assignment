<?php
$jsonString = '{"name":"fred","age":23,"email":"fred@gmail.com"}';

// Decode as an associative array
$arrayData = json_decode($jsonString, true);

echo "Name: " . $arrayData['name'] . "<br>";
echo "Age: " . $arrayData['age'] . "<br>";
echo "Email: " . $arrayData['email'];
?>
