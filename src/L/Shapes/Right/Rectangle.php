<?

namespace Solid\L\Shapes\Right;

class Rectangle implements Shape {

	private $width;
	private $height;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}

	public function getArea() {
		return $this->width * $this->height;
	}

}

?>