<?

namespace Solid\L\Messages\Wrong;

class SingleMessageStorage extends SimpleMessageStorage {

	private $message;

	public function addMessage($message) {
		$this->message = $message;
	}

	public function getAllMessages() {
		return $this->message;
	}

}

?>