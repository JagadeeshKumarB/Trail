<?php 

	$username="Jagadeesh";
 try{
	if($username==false){

		echo " Hello Jagadeesh How are you <br>";
	}
	else
	{
		throw new Exception("Enter the Correct Username ");
	}
}
	catch(Exception $e){

		echo $e->getMessage();
	}
	finally{
		 echo " <h1> Thank You </h1> ";
	}

?> 