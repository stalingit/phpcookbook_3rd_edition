<?php
// create a "numeric" array
$animals = array('ant', 'bee', 'cat', 'dog', 'elk', 'fox');
echo "<pre>";
array_splice($animals, 2, 2);
print_r($animals);
