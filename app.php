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
	
	public function getName() {
		return $this->_name;
	}
	
	public function getDescription() {
		return $this->_description;
	}
}

// file I/O
$filename = "data.json";
$handle = fopen($filename , "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

// parse JSON
$data = json_decode($contents);

// store data to application
foreach ($data as $rankData) {
	$rank = new Rank();
	$rank->setName($rankData->name);
	$rank->setDescription($rankData->description);
	
	// save it
	Store::push($rank);
}
?>