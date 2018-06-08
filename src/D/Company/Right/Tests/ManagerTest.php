<?

namespace Solid\D\Company\Right\Tests;

use \PHPUnit\Framework\TestCase;

use \Solid\D\Company\Right\Manager;

class ManagerTest extends TestCase {

	public function testProductivity() {

		$manager = new Manager();

		$developer1 = $this->createMock("\Solid\D\Company\Right\IDeveloper");
		$developer1->method("getProductivity")
			->willReturn(1);

		$manager->addDeveloper($developer1);

		$developer2 = $this->createMock("\Solid\D\Company\Right\IDeveloper");
		$developer2->method("getProductivity")
			->willReturn(2);

		$manager->addDeveloper($developer2);

		$managerProductivity = $manager->getProductivity();

		$this->assertSame($managerProductivity, 3);
	}

}

?>