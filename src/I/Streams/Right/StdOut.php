<?

namespace Solid\I\Streams\Right;

class StdOut implements IStreamReader {

	public function write() {
		echo $data;
	}

}

?>