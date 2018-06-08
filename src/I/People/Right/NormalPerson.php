<?

namespace Solid\I\People\Right;

class NormalPerson implements IPerson, IEmployed {

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
		$this->exhausted = true;
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