<?

namespace Solid\O\Shapes\Wrong;

class AreaCalculatorV2 {

	public function getArea($shape) {

		if($shape instanceof Square) {
			return $shape->getSide() * 2;
		}


		if($shape instanceof Rectangle) {
			return $shape->getWidth() * $shape->getHeight();
		}

		throw new \Exception("Shape not recognized.\n");
	}

}

?>