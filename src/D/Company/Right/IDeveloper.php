<?

namespace Solid\D\Company\Right;

interface IDeveloper {

	public function __construct($initialProductivity = 0);

	public function work();

	public function getProductivity();

}

?>