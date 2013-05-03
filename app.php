<?php
abstract class Store {
	public static $data;
	
	public static function getData() {
		return self::$data;
	}
	
	public static function push(Rank $rank) {
		self::$data[] = $rank;
	}
}

class Rank {
	protected $_name;
	protected $_description;
	
	public function setName($name) {
		$this->_name = $name;
	}
	
	public function setDescription($description) {
		$this->_description = $description;
	}
}

// file I/O
$handle = fopen("data.json" , "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

?>