<!DOCTYPE html>
<html>
<head>
	<?php echo view('includes/header');?>
</head>
<body>
	<h2>Internship Question and Answer</h2>

	<?php

	echo "<center><b>Date: </b> " . Date('l, M : d :  Y') . "<br /> </center>";

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