<?php

class Dog {

	private $xPos;

	private $yPos;


	public function __construct($xPos = 0, $yPos = 0) {
		if (is_numeric($xPos) && is_numeric($yPos)) {
			$this->xPos = $xPos;
			$this->yPos = $yPos;
		} else {
			throw new InvalidArgumentException("Invalid params");
		}
	}

	public function move($xPos, $yPos) {
		if (is_numeric($xPos) && is_numeric($yPos)) {
			$this->xPos += $xPos;
			$this->yPos += $yPos;
		} else {
			throw new InvalidArgumentException("Invalid params");
		}
	}

	public function getXPos() {
		return $this->xPos;
	}

	public function getYPos() {
		return $this->yPos;
	}

	public function __toString()
	{
		return "Dog on position: [$this->xPos : $this->yPos]<br>";
	}
}

?>