<?php
$counterFile = "counter.txt";

if (file_exists($counterFile)) {
    $count = intval(file_get_contents($counterFile));
} else {
    $count = 0;
}

$count++;
file_put_contents($counterFile, $count);

echo $count;
?>
