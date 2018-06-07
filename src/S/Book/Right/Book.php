<?

namespace Solid\S\Book\Right;

class Book {

	private $path;
	private $title;
	private $author;

	public function __construct($path, $title, Author $author) {
		$this->path = $path;
		$this->title = $title;
		$this->author = $author;
	}

	public function getPath() {
		return $this->path;
	}

	public function getAuthorName() {
		return $this->author->getName();
	}

	public function getAuthorInitials() {
		return $this->author->getInitials();
	}

}

?>