<?php
require_once '../../../modules/app/Dog.php';

class DogTest extends PHPUnit_Framework_TestCase
{

	public function testMoveXPos() {
		$oDog = new Dog(0,0);
		$oDog->move(2,0);
		$expected = 2;
		$this->assertEquals($expected, $oDog->getXPos());
	}

	public function testInvalidArgument() {
		$this->setExpectedException(InvalidArgumentException::class);
		$oDog = new Dog('invalid pos x','invalid pos y');
	}


}

?>