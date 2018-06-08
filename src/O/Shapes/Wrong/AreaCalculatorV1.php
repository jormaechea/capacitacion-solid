<?

namespace Solid\O\Shapes\Wrong;

class AreaCalculatorV1 {

	public function getArea(Square $square) {
		return $square->getSide() * 2;
	}

}

?>