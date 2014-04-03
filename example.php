<?php

require dirname(__FILE__) . '/InstagramID.php';

$instagram_id = new InstagramID();
echo 'Instagram ID    : ' . $instagram_id->getID() . "\n";
echo 'Unix time       : ' . InstagramID::getUnixtime($instagram_id) . "\n";
echo 'time() function : ' . time() . "\n";

