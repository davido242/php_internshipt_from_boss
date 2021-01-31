<!DOCTYPE html>
<html>
<head>
	<?php echo view('includes/header');?>
</head>
<body>
	<h2>Internship Questions and Answers from Boss</h2>
	

	<?php
	// class GoodBye{
	// 	public static function wizboy(){
	// 		echo "HelloLL Bruv!";
	// 		}
	// 		public function __construct(){
	// 			self::wizboy();
	// 		}
	// 	}

	// 	new Goodbye();

	// 	class ClassName {
 // 	 	public static $staticProp = "W3Schools";
	// }
	// echo ClassName::$staticProp;

	// class GrandPa{
	// 	public $name = "Mark Henry";
	// }
	// class Daddy extends GrandPa{
	// 	function displayGrandPaName(){
	// 		return $this->name;
	// 	}
	// }
	// $knower = new Daddy;
	// echo $knower->displayGrandPaName() . "<br />";
	// $anotherKnower = new GrandPa;
	// echo $anotherKnower->name;

	class Fruit{
		 public $name;
		 public $color;
		 public $number;
		function __construct($name, $color, $number){
			$this->name = $name;
			$this->color = $color;
			$this->number = $number;
		}
		function getName(){
			return $this->name;
		}		

		function getColor(){
			return $this->color;
		}

		function getNumber(){
			return $this->number;
		}
	}

	$callFruit = new Fruit(" ", "Green", 105);
	echo $callFruit->getName() . "<br />";
	echo $callFruit->getColor() . "<br />";
	echo $callFruit->getNumber();

	class Fruits{
		public $name;
		public $color;
		function __construct($name, $color){
			$this->name = $name;
			$this->color = $color;
		}
		function __destruct(){
			echo "The fruit is {$this->name} and the color is {$this->color}.";
		}
	}
	$callFruits = new Fruits("Plantain", "Blue");
	// $callFruits->


	class CheckOut{
		private $name = "Davido";
		public $village = "Nass-Eggon";
		// public function getDetails($name){
		// 	$this->name = $name;

		// }

		public function __construct(){
			echo "<br /> The constructor Ran Successfully......!";
		}
	}
	$toCallOut = new CheckOut;
	?>

<?php echo view('includes/footer');?>

</body>
</html>