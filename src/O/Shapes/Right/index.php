<?

namespace Solid\O\Shapes\Right;

require("../../../../vendor/autoload.php");

$square = new Square(10);

$areaCalculator = new AreaCalculator();

echo "Square area is ". $areaCalculator->getArea($square) ."\n";

$rectangle = new Rectangle(10, 5);

echo "Rectangle area is ". $areaCalculator->getArea($rectangle) ."\n";

?>