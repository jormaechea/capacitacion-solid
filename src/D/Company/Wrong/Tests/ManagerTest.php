<?

namespace Solid\D\Company\Wrong\Tests;

use \PHPUnit\Framework\TestCase;

use \Solid\D\Company\Wrong\Manager;

class ManagerTest extends TestCase {

	public function testProductivity() {

		$manager = new Manager();

		$frontendDeveloper1 = $this->createMock("\Solid\D\Company\Wrong\FrontendDeveloper");
		$frontendDeveloper1->method("getProductivity")
			->willReturn(1);

		$manager->addDeveloper($frontendDeveloper1);

		$frontendDeveloper2 = $this->createMock("\Solid\D\Company\Wrong\FrontendDeveloper");
		$frontendDeveloper2->method("getProductivity")
			->willReturn(2);

		$manager->addDeveloper($frontendDeveloper2);

		$managerProductivity = $manager->getProductivity();

		$this->assertSame($managerProductivity, 3);
	}

}

?>