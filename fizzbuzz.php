<?php

class FizzBuzz
{
	public static function recieve($num){
		$checkresult = "";

		if($num%3==0 && $num%5==0)
			$checkresult = "FizzBuzz";

		elseif($num % 3 == 0)
			$checkresult = "Fizz";
		
		elseif($num % 5 == 0)
			$checkresult = "Buzz";
		else
			$checkresult = $num;

			return $checkresult;
	}
}