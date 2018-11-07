<?

namespace Solid\I\Streams\Wrong;

class StdIn implements IStreamManager {

	public function read() {
		return file_get_contents("php://input");
	}

	public function write($data) {
		// You cannot write stdIn
	}

}

?>