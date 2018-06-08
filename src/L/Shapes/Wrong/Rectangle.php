<?

namespace Solid\L\Shapes\Wrong;

class Rectangle {

	private $width;
	private $height;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}

	public function setWidth($width) {
		$this->width = $width;
	}

	public function setHeight($height) {
		$this->height = $height;
	}

	public function getArea() {
		return $this->width * $this->height;
	}

}

?>