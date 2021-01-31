<!DOCTYPE html>
<html>
<head>
	<?php echo view('includes/header');?>
</head>
<body>
	<h2>Internship Questions and Answers</h2>

	<?php

	echo "<center><b>Date: </b>Sunday, " . Date('M : d :  Y') . "<br /> </center>";

	// Practicals on PHP access modifiers


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

	// class Fruit{
	// 	 public $name;
	// 	 public $color;
	// 	 public $number;
	// 	function __construct($name, $color, $number){
	// 		$this->name = $name;
	// 		$this->color = $color;
	// 		$this->number = $number;
	// 	}
	// 	function getName(){
	// 		return $this->name;
	// 	}		

	// 	function getColor(){
	// 		return $this->color;
	// 	}

	// 	function getNumber(){
	// 		return $this->number;
	// 	}
	// }

	// $callFruit = new Fruit(" ", "Green", 105);
	// echo $callFruit->getName() . "<br />";
	// echo $callFruit->getColor() . "<br />";
	// echo $callFruit->getNumber();

	// class Fruits{
	// 	public $name;
	// 	public $color;
	// 	function __construct($name, $color){
	// 		$this->name = $name;
	// 		$this->color = $color;
	// 	}
	// 	function __destruct(){
	// 		echo "The fruit is {$this->name} and the color is {$this->color}.";
	// 	}
	// }
	// $callFruits = new Fruits("Plantain", "Blue");
	// // $callFruits->


	// class CheckOut{
	// 	private $name = "Davido";
	// 	public $village = "Nass-Eggon";
	// 	// public function getDetails($name){
	// 	// 	$this->name = $name;

	// 	// }

	// 	public function __construct(){
	// 		echo "<br /> The constructor Ran Successfully......!";
	// 	}
	// }
	// $toCallOut = new CheckOut;

	// class Transform{
	// 	public $name;
	// 	public $surname;
	// 	public $location;
	// 	public function __construct($name, $surname, $location){
	// 		$this->name = $name;
	// 		$this->surname = $surname;
	// 		$this->location = $location;
	// 	}
	// 	function getName(){
	// 		$this->name;
	// 	}
	// 	function getSName(){
	// 		$this->surname;
	// 	}		
	// 	function getLocation(){
	// 		$this->location;
	// 	}
	// }
	// $caller = new Transform("General MD", "Sarka", "Abuja, Nigeria");
	// echo "His Name is: $caller->name $caller->surname, <br /> He resides in $caller->location";


	// End of Practicals


// Internship Answer
	class Question{
		protected $id;
		protected $question_description;
		protected $correct_answer_ids;

		public function __construct($id, $question_description, $correct_answer_ids){
			$this->id = $id;
			$this->question_description = $question_description;
			$this->correct_answer_ids = $correct_answer_ids;

		}

		public function isCorrect_answer(Answer $answer){
			return $this->question_description;

		}

	}
	class Answer{
		protected $id;
		protected $answer_description;


	}
	?>

<?php echo view('includes/footer');?>

</body>
</html>