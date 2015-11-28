<?php

class FizzBuzzTest  extends PHPUnit_Framework_TestCase 
{
	public function testEnter1Return1()
	{
		$expected = 1;
		$result = FizzBuzz::recieve(1);
		$this->assertEquals($expected, $result);
	}
	public function testEnter3ReturnFizz()
	{
		$expected = "Fizz";
		$result = FizzBuzz::recieve(3);
		$this->assertEquals($expected,$result);
	}
	public function testEnter5ReturnBuzz()
	{
		$expected = "Buzz";
		$result = FizzBuzz::recieve(5);
		$this->assertEquals($expected,$result);
	}
	public function testEnter15ReturnFizzBuzz()
	{
		$expected = "FizzBuzz";
		$result = FizzBuzz::recieve(15);
		$this->assertEquals($expected,$result);
	}
	public function testEnter2Return2()
	{
		$expected = "2";
		$result = FizzBuzz::recieve(2);
		$this->assertEquals($expected,$result);
	}

}