<?php 
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

// Test to ensure that the values in the array equal the expected number
class ReceiptTest extends TestCase {
	public function testTotal() {
		$Receipt = new Receipt();
		$this->assertEquals(
			15,
			$Receipt->total([0,2,5,8]),
			'When summing the total should equal 15'
		);
	}
}
?>