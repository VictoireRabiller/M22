<?php


class Avatar {

 	public $name;
 	public $hp;
 	public $armor;


 	function __construct($name, $hp, $armor){

 		$this->name = $name;
 		$this->hp = $hp;
 		$this->armor = $armor;

 	}


 	function hello() {
 		echo ("hello".$this->name."\n");
 	}


}

$avatar1 = new Avatar ("Rick", 12, 20);
$avatar2 = new Avatar ("Jenny", 15, 25);


$avatar1->hello();
$avatar2->hello();


