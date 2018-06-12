<?php

class Circle {

	public $cx;
	public $cy;
	public $r;

	public $color;

	public function __construct($r){
		$this->cx = 0;
		$this->cy = 0;
		$this->r = $r;
		$this->color = 'black';


	}

	public function draw(){
		$svg = <<<TXT

		<circle cx="{$this->cx}" cy="{$this->cy}" r="{$this->r}" 
	fill="{$this->color}" />
TXT;
	return $svg;

	}

	function setPosition($cx, $cy){
		$this->cx = $cx;
		$this->cy = $cy;

	}

	function setColor($color) {
		$this->color = $color;
	}

}