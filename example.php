<?php

require dirname(__FILE__) . '/InstagramID.php';

$instagram_id = new InstagramID();
echo 'Instagram ID (Int)     : ' . $instagram_id->getID() . "\n";
echo 'Instagram ID (String)  : ' . $instagram_id->getIDByString() . "\n";
echo 'Unix time (from Int)   : ' . InstagramID::getUnixtime($instagram_id->id) . "\n";
echo 'Unix time (from String): ' . InstagramID::getUnixtimeFromString($instagram_id->getIDByString()) . "\n";
echo 'time() function        : ' . time() . "\n";
