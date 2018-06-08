<?

namespace Solid\D\Company\Right;

class BackendDeveloper implements IDeveloper {

	private $productivity;

	public function __construct($initialProductivity = 0) {
		$this->productivity = $initialProductivity;
	}

	public function work() {
		$this->productivity += 2;
	}

	public function getProductivity() {
		return $this->productivity;
	}

}

?>