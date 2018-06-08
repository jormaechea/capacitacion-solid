<?

namespace Solid\L\Shapes\Right;

require("../../../../vendor/autoload.php");

$areaCalculator = new AreaCalculator();

$rectangle = new Rectangle(10, 5);

echo "Rectangle area is ". $areaCalculator->getArea($rectangle) ."\n";

// Ahora debemos agregar soporte a cuadrados, teniendo en cuenta que un Cuadrado es una forma (Shape)

?>