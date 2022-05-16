<?php 

	class Hello{


		var $name;
		var $age;

		public function __construct($name, $age){

			echo "Your name is  :" . $this->name = $name ." and Your age is : " . $this->age =$age  ."<br>";
		}

		public function disp(){

			echo "Thank You ";
		}
		public function __destruct(){
			echo $this->name;
		}
	}

		$o=new Hello("yaadav",21);
		 // echo $o->disp();
		 $s=new Hello("sanju",41);
		 $o->disp();
?> 