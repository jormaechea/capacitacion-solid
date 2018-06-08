<?

namespace Solid\L\Messages\Wrong;

class SimpleMessageStorage {

	private $messages = [];

	public function addMessage($message) {
		$this->messages[] = $message;
	}

	public function getAllMessages() {
		return $this->messages;
	}

}

?>