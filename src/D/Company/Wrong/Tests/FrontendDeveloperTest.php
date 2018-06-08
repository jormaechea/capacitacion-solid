<?

namespace Solid\D\Company\Wrong\Tests;

use \PHPUnit\Framework\TestCase;

use \Solid\D\Company\Wrong\FrontendDeveloper;

class FrontendDeveloperTest extends TestCase {

	public function testProductivity() {

		$developer = new FrontendDeveloper();

		$developerProductivity = $developer->getProductivity();
		$this->assertSame($developerProductivity, 0);

		$developer->work();
		$developerProductivity = $developer->getProductivity();
		$this->assertSame($developerProductivity, 1);

		$developer->work();
		$developer->work();
		$developerProductivity = $developer->getProductivity();
		$this->assertSame($developerProductivity, 3);
	}

}

?>