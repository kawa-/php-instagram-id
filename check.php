<?php

/*
 * comparison Instagram ID by two methods
 */

$epoch = 1273758447;
$shard_id = 7777; // under 8192
$seq = 7777777 % 1024;

$instagram_millisec = (int) ((microtime(TRUE) - $epoch) * 1000);

// 2^(64-41) = 8388608, 2^(64-41-13) = 1024
$id1 = $instagram_millisec * 8388608 + $shard_id * 1024 + $seq;

// generates by bin
$id2 = bindec(sprintf("%041b%013b%010b", $instagram_millisec, $shard_id, $seq));

// comparison
echo '=== Check if the generating method is right. If these IDs are same, it is OK. ===' . "\n\n";
echo 'Instagram ID1: ' . $id1 . "\n";
echo 'Instagram ID2: ' . $id2 . "\n";
echo 'PHP_INT_MAX  : ' . PHP_INT_MAX . "\n";