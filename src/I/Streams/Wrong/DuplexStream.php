<?

namespace Solid\I\Streams\Wrong;

class DuplexStream implements IStreamManager {

	public function read() {
		return file_get_contents("php://input");
	}

	public function write($data) {
		echo $data;
	}

}

?>