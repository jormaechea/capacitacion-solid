<?

namespace Solid\S\Book\Right;

require(__DIR__. "/../../../../vendor/autoload.php");

$author = new Author("John", "Doe");

$book = new Book("/path/to/the/book.ebook", "The best book", $author);

echo "Author name: ". $book->getAuthorName() ."\n";

echo "Author initials: ". $book->getAuthorInitials() ."\n";

$reader = new Reader();
$reader->setBook($book);

echo "First page:\n". $reader->getFirstPageContent();

$reader->output();

?>