<?

namespace Solid\I\Streams\Wrong;

class StdOut implements IStreamManager {

	public function read() {
		// You cannot read stdOut
	}

	public function write($data) {
		echo $data;
	}

}

?>