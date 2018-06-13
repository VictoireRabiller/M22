<?php

class Circle extends Shape {

	public $r;


	public function __construct($r){
		
		$this->r = $r;

	
	}

	public function draw(){
		$svg = <<<TXT

		<circle cx="{$this->x}" cy="{$this->y}" r="{$this->r}" opacity="{$this->opacity}" 
	fill="{$this->color}"  />
TXT;
	return $svg;

	}

	
}