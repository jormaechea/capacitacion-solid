<?

namespace Solid\O\Shapes\Right;

class Square implements Shape {

	private $side;

	public function __construct($side) {
		$this->side = $side;
	}

	public function getArea() {
		return $this->side * 2;
	}

}

?>