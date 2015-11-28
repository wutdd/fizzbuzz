<?php

class FizzBuzzTest  extends PHPUnit_Framework_TestCase 
{
	public function testEnter1Return1()
	{
		$expected = 1;
		$result = FizzBuzz::recieve(1);
		$this->assertEquals($expected, $result);
	}
}