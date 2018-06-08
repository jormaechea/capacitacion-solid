<?

namespace Solid\I\People\Wrong;

class UnemployedPerson implements IPerson {

	private $name;
	private $hungry = false;
	private $exhausted = false;

	public function setName($name) {
		$this->name = $name;
	}

	public function eat() {
		$this->hungry = false;
	}

	public function work() {
		// This person doesn't have a job ¯\_(ツ)_/¯
	}

	public function sleep() {

		if($this->exhausted) {
			sleep(1);
			$this->exhausted = false;
			$this->hungry = true;
		}
	}

}

?>