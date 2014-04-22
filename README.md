# php-instagram-id

## About

Generates Instagram Shard ID by PHP.

ID Example : 1043515370016179697

## Reference

[Sharding & IDs at Instagram](http://instagram-engineering.tumblr.com/post/10853187575/sharding-ids-at-instagram)

## Requirements

- PHP (>= 5.3)
- APC or [APCu](https://github.com/krakjoe/apcu)
- [GMP](http://www.php.net/manual/en/gmp.installation.php)

## Usage

##### PHP Code (example.php in this dir)

~~~
<?php

require dirname(__FILE__) . '/InstagramID.php';

$instagram_id = new InstagramID();
echo 'Instagram ID (Int)     : ' . $instagram_id->getID() . "\n";
echo 'Instagram ID (String)  : ' . $instagram_id->getIDByString() . "\n";
echo 'Unix time (from Int)   : ' . InstagramID::getUnixtime($instagram_id->id) . "\n";
echo 'Unix time (from String): ' . InstagramID::getUnixtimeFromString($instagram_id->getIDByString()) . "\n";
echo 'time() function        : ' . time() . "\n";
~~~

##### Output (Run example.php in this dir)

~~~
Instagram ID (Int)     : 93357028499522560
Instagram ID (String)  : 6tZiq3fl9k
Unix time (from Int)   : 1398155125
Unix time (from String): 1398155125
time() function        : 1398155125
~~~

## Misc

Is it a genuine Instagram Shard ID generation?
Not sure, but check.php in this repo can support for this algo.