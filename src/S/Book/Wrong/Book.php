<?

namespace Solid\S\Book\Wrong;

class Book {

	private $path;
	private $title;
	private $authorFirstname;
	private $authorLastname;

	public function __construct($path, $title, $authorFirstname, $authorLastname) {

		$this->path = $path;
		$this->title = $title;
		$this->authorFirstname = $authorFirstname;
		$this->authorLastname = $authorLastname;
	}

	public function getAuthorName() {
		return sprintf("%s %s", $this->authorFirstname, $this->authorLastname);
	}

	public function getAuthorInitials() {

		if(!preg_match_all("/\b\w/", $this->getAuthorName(), $matches)) {
			return "";
		}

		return implode(" ", array_map(function($initialLetter) {
			return $initialLetter .".";
		}, $matches[0]));
	}

	public function getFirstPageContent() {

		// Implementación de lectura del libro y manejo de páginas

		return "This is the first page of the book.\n";
	}

	public function output() {

		if(!$this->path || !is_readable($this->path)) {
			echo "Book could not be read.\n";
			return;
		}

		echo file_get_contents($this->path);
	}

}

?>