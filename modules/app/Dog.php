<?php

class Dog {

	private $xPos;

	private $yPos;


	public function __construct($xPos = 0, $yPos = 0) {
		$this->xPos = $xPos;
		$this->yPos = $yPos;
	}

	public function move($xPos, $yPos) {
		$this->xPos += $xPos;
		$this->yPos += $yPos;
	}

	public function getXPos() {
		return $this->xPos;
	}

	public function getYPos() {
		return $this->yPos;
	}

	public function __toString()
	{
		return "Dog on position: [$this->xPos : $this->yPos]";
	}
}

?>