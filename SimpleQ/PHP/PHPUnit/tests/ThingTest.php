<?php 
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Thing;

//This test is meant to fail.
class ThingTest extends TestCase {
	public function testTotal() {
		$Thing = new Thing();
		$this->assertEquals(
			15,
			$Thing->total([0,2,5,8]),
			'When summing the total should equal 15'
		);
	}
}
?>