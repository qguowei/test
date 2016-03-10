<?php

$time = time();

echo $time;
echo "<br/>";
$day = strtotime('+5 day',$time);
echo $day;
echo "<br/>";
echo date('Y-m-d H:i:s',$day);