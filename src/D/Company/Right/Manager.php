<?

namespace Solid\D\Company\Right;

class Manager {

	private $developers = [];

	public function addDeveloper(IDeveloper $developer) {
		$this->developers[] = $developer;
	}

	public function work() {
		array_map(function(IDeveloper $developer) {
			$developer->word();
		}, $this->developers);
	}

	public function getProductivity() {
		return array_sum(array_map(function(IDeveloper $developer) {
			return $developer->getProductivity();
		}, $this->developers));
	}

}

?>