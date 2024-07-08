<?php

$file = explode("\n",file_get_contents("menu2.txt"));
array_pop($file);

$target = array();

foreach($file as $line)
 {
 $record = array();
 list($l,$r) = explode(",",$line); 

 $record['name'] = $l;
 $record['url'] = $r;
 array_push($target,$record);

//  $target[$l] = $r; 
 }
 
echo json_encode($target);

?>
