<?

namespace Solid\I\Streams\Right;

class DuplexStream implements IStreamReader, IStreamWriter {

	public function read() {
		return file_get_contents("php://input");
	}

	public function write($data) {
		echo $data;
	}

}

?>