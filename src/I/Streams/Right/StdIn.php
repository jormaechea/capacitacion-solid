<?

namespace Solid\I\Streams\Right;

class StdIn implements IStreamReader {

	public function read() {
		return file_get_contents("php://input");
	}

}

?>