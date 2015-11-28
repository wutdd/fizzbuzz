<?php

class FizzBuzz
{
	public static function recieve($num){
		$checkresult = "";

		if($num % 3 == 0)
			$checkresult .= "Fizz";
		
		if($num % 5 == 0)
			$checkresult .= "Buzz";

		if($checkresult == "")
			$checkresult = $num;

		return $checkresult;
	}
}