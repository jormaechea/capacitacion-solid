<?

namespace Solid\L\Messages\Wrong;

require(__DIR__. "/../../../../vendor/autoload.php");

$messageStorage = new SimpleMessageStorage();

$rectangle = new Rectangle(10, 5);

echo "Rectangle area is ". $areaCalculator->getArea($rectangle) ."\n";

// Ahora debemos agregar soporte a cuadrados, sabiendo que matemáticamente un cuadrado es un caso específico de rectángulos, donde todos sus lados son iguales

?>