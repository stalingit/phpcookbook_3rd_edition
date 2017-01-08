<?php
$states = array(1 => 'Delaware', 'Pennsylvania', 'New Jersey');
asort($states);
echo "<pre>";
print_r($states);
while (list($rank, $state) = each($states)) {
    print "$state was the #$rank state to join the United States\n";
}
