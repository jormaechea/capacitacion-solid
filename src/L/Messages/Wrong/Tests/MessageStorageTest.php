<?

namespace Solid\L\Message\Wrong\Tests;

use \PHPUnit\Framework\TestCase;

use \Solid\L\Messages\Wrong\SimpleMessageStorage;
use \Solid\L\Messages\Wrong\SingleMessageStorage;

class MessageStorageTest extends TestCase {

	public function testMessageFetch() {

		$messageStorage = new SimpleMessageStorage();
		$messageStorage->addMessage("Foo");
		$messageStorage->addMessage("Bar");
		$messageStorage->addMessage("Baz");

		$allMessages = $messageStorage->getAllMessages();

		$this->assertSame($allMessages, [
			"Foo",
			"Bar",
			"Baz"
		]);
	}

}

?>