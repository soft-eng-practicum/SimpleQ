<?php 

//Trying to get this test to work.
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\ReceiptMapper;

//This test is meant to fail.
class ReceiptMapperTest extends TestCase {
	public function testMapper() {
		$ReceiptMapper = new ReceiptMapper();
		$this->assertEquals(
			$mapper,
			$Receipt-> _construct(mapper),
			'When summing the total should equal 15'
		);
	}
}
?>