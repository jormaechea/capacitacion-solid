<?

namespace Solid\O\Shapes\Wrong;

require(__DIR__. "/../../../../vendor/autoload.php");

echo "Calculator V1\n\n";

$square = new Square(10);

$areaCalculator = new AreaCalculatorV1();

echo "Square area is ". $areaCalculator->getArea($square) ."\n";

echo "\n---------------------\n\n";

echo "Calculator V2\n\n";

$rectangle = new Rectangle(10, 5);

$areaCalculator = new AreaCalculatorV2();

echo "Square area is ". $areaCalculator->getArea($square) ."\n";
echo "Rectangle area is ". $areaCalculator->getArea($rectangle) ."\n";

?>