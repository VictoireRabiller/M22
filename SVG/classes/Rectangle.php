<?php

class Rectangle extends Shape {

		parent:: setPosition( $x, $y);
		parent:: setColor( $color);
		parent:: setOpacity( $opacity);

	// public $x;
	// public $y;

	public $width;
	public $height;

	// public $color;
	// public $opacity;

	public function __construct($width, $height){
		$this->x = 0;
		$this->y = 0;

		$this->color = 'black';
		$this->opacity = 1;

		$this->width = $width;
		$this->height = $height;

	}

	public function draw(){
		$svg = <<<TXT

		<rect x="{$this->x}" y="{$this->y}" width="{$this->width}" height="{$this->height}" opacity="{$this->opacity}" 
	fill="{$this->color}" />
TXT;
	return $svg;

	}

	// function setPosition($x, $y){
	// 	$this->x = $x;
	// 	$this->y = $y;

	// }

	// function setColor($color) {
	// 	$this->color = $color;
	// }

	// function setOpacity($opacity) {
	// 	$this->opacity = $opacity;
	// }



}