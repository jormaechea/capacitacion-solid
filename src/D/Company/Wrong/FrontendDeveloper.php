<?

namespace Solid\D\Company\Wrong;

class FrontendDeveloper {

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