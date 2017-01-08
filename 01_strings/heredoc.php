<?php

print <<< END
It's funny when signs say things like:
   Original "Root" Beer
   "Free" Gift
   Shoes cleaned while "you" wait
or have other misquoted words.
END;

$dwarves = 'dopey,sleepy,happy,grumpy';
$dwarf_array = explode(',',$dwarves);
echo "<pre>";
print_r($dwarf_array);