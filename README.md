# php-instagram-id

## About

Generates Instagram ID by PHP.

ID Example: 945668765721297920

## Reference

[Sharding & IDs at Instagram](http://instagram-engineering.tumblr.com/post/10853187575/sharding-ids-at-instagram)

## Requirements

- PHP (>= 5.3)
- APC or [APCu](https://github.com/krakjoe/apcu)

## Usage

##### PHP Code (example.php in this dir)

~~~
<?php

require dirname(__FILE__) . '/InstagramID.php';

$instagram_id = new InstagramID();
echo 'Instagram ID    : ' . $instagram_id->getID() . "\n";
echo 'Unix time       : ' . InstagramID::getUnixtime($instagram_id->id) . "\n";
echo 'time() function : ' . time() . "\n";

~~~

##### Output (Run example.php in this dir)

~~~
$ php example.php 
Instagram ID    : 945682658757706752
Unix time       : 1396492604
time() function : 1396492604
~~~
