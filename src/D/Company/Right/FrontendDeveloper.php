<?

namespace Solid\D\Company\Right;

class FrontendDeveloper implements IDeveloper {

	private $productivity;

	public function __construct($initialProductivity = 0) {
		$this->productivity = $initialProductivity;
	}

	public function work() {
		$this->productivity++;
	}

	public function getProductivity() {
		return $this->productivity;
	}

}

?>