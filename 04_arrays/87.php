<?php
$colors = array('Red', 'White', 'Blue');
$cities = array('Boston', 'New York', 'Chicago');

array_multisort($colors, $cities);
echo "<pre>";
print_r($colors);
print_r($cities);
