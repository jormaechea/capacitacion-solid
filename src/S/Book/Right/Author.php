<?

namespace Solid\S\Book\Right;

class Author {

	private $firstname;
	private $lastname;

	public function __construct($firstname, $lastname) {

		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}

	public function getName() {
		return sprintf("%s %s", $this->firstname, $this->lastname);
	}

	public function getInitials() {

		if(!preg_match_all("/\b\w/", $this->getName(), $matches)) {
			return "";
		}

		return implode(" ", array_map(function($initialLetter) {
			return $initialLetter .".";
		}, $matches[0]));
	}

}

?>