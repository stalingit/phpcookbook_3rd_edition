<?php
$array = array('one','two','three');

echo array_to_comma_string($array);
function array_to_comma_string($array) {
	echo $j = count($array);

    switch (count($array)) {
    case 0:
        return '';

    case 1:
        return reset($array);
    
    case 2:
        return join(' and ', $array);

    default:
        $last = array_pop($array);
        return join(', ', $array) . ", and $last";
    }
}
