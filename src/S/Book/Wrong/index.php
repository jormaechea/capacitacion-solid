<?

namespace Solid\S\Book\Wrong;

require(__DIR__. "/../../../../vendor/autoload.php");

$book = new Book("/path/to/the/book.ebook", "The best book", "John", "Doe");

echo "Author name: ". $book->getAuthorName() ."\n";

echo "Author initials: ". $book->getAuthorInitials() ."\n";

echo "First page:\n". $book->getFirstPageContent();

$book->output();

?>