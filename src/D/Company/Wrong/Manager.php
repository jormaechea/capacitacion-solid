<?

namespace Solid\D\Company\Wrong;

class Manager {

	private $developers = [];

	public function addDeveloper(FrontendDeveloper $developer) {
		$this->developers[] = $developer;
	}

	public function work() {
		array_map(function(FrontendDeveloper $developer) {
			$developer->word();
		}, $this->developers);
	}

	public function getProductivity() {
		return array_sum(array_map(function(FrontendDeveloper $developer) {
			return $developer->getProductivity();
		}, $this->developers));
	}

}

?>