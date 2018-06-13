<?php

class Canvas{
	protected $shapes = [];

	function addShape(Shape $shape){
		//permet de passer que la classe Shape
		$this->shapes[] = $shape;
	}


	function addShapes(array $shapes){
		//permet de passer que la classe Shape
		$this->shapes = array_merge($this->shapes, $shapes);
	}

	public function draw(){
		$svg = "<svg>";

		foreach ($this->shapes as $shape) {
			$svg .=$shape->draw();
		}


		$svg .= "</svg>";
		return $svg;
	}



}