<?php
// Type string
$firstname = "Julien";


echo 'La variable $firstname contient '.$firstname.' et elle est de type '.gettype($firstname);

// Type integer
$age = 39;

echo $age.' est un '.gettype($age);

// Type float
$price = 12.99;

echo $price.' est un '.gettype($age);

// Type boolean
$itIsTrue = true;
$itIsFalse = false;

echo $itIsTrue.', '.$itIsFalse.' sont des '.gettype($itIsTrue);

// Type null
$itIsNull = null;

echo $itIsNull.' est de type '.gettype($itIsNull);


?>