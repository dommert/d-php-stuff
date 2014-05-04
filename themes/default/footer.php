<h1>FOOTER</h1>
<?php
/*
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 5);
echo 'Page generated in '.$total_time.' seconds.';
*/
$end = microtime(true);
print "Page generated in ".round(($end - $start), 4)." seconds";
?>