<?php

define('INSTAGRAM_ID_EPOCH', 1283758447); // change this to the latest Unix time.
define('INSTAGRAM_ID_MACHINE_ID', 1);
define('INSTAGRAM_ID_SEQ', 'seq');

class InstagramID {

	var $id;

	public function __construct() {
		$seq = apc_inc(INSTAGRAM_ID_SEQ);
		if (!($seq % 1024)) {
			apc_store(INSTAGRAM_ID_SEQ, 0);
			$seq = 0;
		}
		$this->id = (int) ((microtime(TRUE) - INSTAGRAM_ID_EPOCH ) * 1000) * 8388608 + (INSTAGRAM_ID_MACHINE_ID % 8192) * 1024 + $seq;
	}

	/**
	 * get Instagram ID
	 *
	 * @return type Integer
	 */
	function getID() {
		return $this->id;
	}

	/**
	 * get Unix time from Instagram ID
	 *
	 * @param InstagramID $insta_id
	 * @return type Integer
	 */
	static function getUnixtime(InstagramID $insta_id) {
		return (int) ($insta_id->id / 8388608000) + INSTAGRAM_ID_EPOCH;
	}

}


