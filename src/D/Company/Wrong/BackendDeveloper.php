<?

namespace Solid\D\Company\Wrong;

class BackendDeveloper {

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