<?php


class Human {

​

    public $firstname;

    public $lastname;

​

    function __construct($firstname, $lastname) {

        $this->firstname = $firstname;

        $this->lastname = $lastname;

    }

​

    function hello() {

        echo "Hello, je suis " . $this->firstname . "\n";

    }

​

}

​

$human1 = new Human('bob', 'Dalton');

$human2 = new Human('Jack', 'Dalton');

​

$human1->hello();

$human2->hello();

​

​

class Product {

​

    public $name;

    public $prixHT;

    public $stock;

​

    function __construct($name, $priceHT, $stock) {

        $this->name = $name;

        $this->priceHT = $priceHT;

        $this->stock = $stock;

    }

​

    function calculePriceTTC() {

        return $this->priceHT * 1.2;

    }

​

    function calculeValeurStock() {

        return $this->priceHT * $this->stock;

    }

​

}

​

$product1 = new Product('Biagnore', 10.20, 5);

$product2 = new Product('Douche', 50, 10);

​

echo "Porduit1 TTC" . $product1->calculePriceTTC() . PHP_EOL;

echo "Produit2 TTC" . $product2->calculePriceTTC() . PHP_EOL; 

​


class Animal {
	
	public $hp;
	public $armor;
	public $damage;

	function __construct($hp, $armor, $damage) {
		$this->hp = $hp;
		$this->armor = $armor;
		$this->damage = $damage;
	}

}

class Hero extends Animal {
	public $name;

	function __construct($hp, $armor, $damage, $name) {

		parent::__construct($hp, $armor, $damage);

		$this->name = $name;

	}

}

$animal = new Animal(10, 2, 3);


var_dump($animal);

$hero = new Hero(20, 10, 50, 'Thrud');

var_dump($hero);

