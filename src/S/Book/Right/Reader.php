<?

namespace Solid\S\Book\Right;

class Reader {

	private $book;

	public function setBook(Book $book) {
		$this->book = $book;
	}

	public function getFirstPageContent() {
		return "This is the first page of the book.\n";
	}

	public function output() {

		if(!$this->book->getPath() || !is_readable($this->book->getPath())) {
			echo "Book could not be read.\n";
			return;
		}

		echo file_get_contents($this->book->getPath());
	}

}

?>