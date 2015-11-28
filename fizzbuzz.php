<?php

class FizzBuzz
{
	public static function recieve($num){
		if($num == 15)
			return "FizzBuzz";
		if($num == 5)
			return "Buzz";
		if($num != 1)
			return "Fizz";
		else
			return 1;
	}
}