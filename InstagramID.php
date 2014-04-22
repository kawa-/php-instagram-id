<?php

define('INSTAGRAM_ID_EPOCH', 1387026100); // change this to the latest Unix time.
define('INSTAGRAM_ID_MACHINE_ID', 1); // change this as each machines.
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
	 * get Instagram ID by String
	 *
	 * @return type String
	 */
	function getIDByString() {
		return gmp_strval(gmp_init($this->id, 10), 62);
	}

	/**
	 * get Unix time from Instagram ID
	 *
	 * @param type $insta_id 64bit Integer
	 * @return type Integer
	 */
	static function getUnixtime($insta_id) {
		return (int) ((int) $insta_id / 8388608000) + INSTAGRAM_ID_EPOCH;
	}

	static function getUnixtimeFromString($insta_id_string) {
		$insta_id = gmp_strval(gmp_init($insta_id_string, 62), 10);
		return (int) ((int) $insta_id / 8388608000) + INSTAGRAM_ID_EPOCH;
	}

}

