<?php

//Generic DB testing
namespace TDD\Test;
require dirname( dirname(__FILE__) ) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\ItemsTable;
use \PDO;

class ItemsTableTest extends TestCase {

	// Method to set up a PDO connection
	public function setUp() {
		$this->PDO = $this->getConnection();
		$this->createTable();
		$this->populateTable();

		$this->ItemsTable = new ItemsTable($this->PDO);
	}

	// Method to destroy the ItemsTable and PDO.
	public function tearDown() {
		unset($this->ItemsTable);
		unset($this->PDO);
	}
	
	// Method to test that the id is correct for the following values.
	public function testFindForId() {
		$id = 1;

		$result = $this->ItemsTable->findForId($id);
		$this->assertInternalType(
			'array',
			$result,
			'The result should always be an array.'
		);
		$this->assertEquals(
			$id,
			$result['id'],
			'The id key/value of the result for id should be equal to the id.'
		);
		$this->assertEquals(
			'Candy',
			$result['firstName'],
			'The id key/value of the result for firstName should be equal to `Candy`.'
		);
		$this->assertEquals(
			'Crush',
			$result['lastName'],
			'The id key/value of the result for lastName should be equal to `Crush`.'
		);
		$this->assertEquals(
			'Stripper',
			$result['occupation'],
			'The id key/value of the result for occupation should be equal to `Stripper`.'
		);
		$this->assertEquals(
			'1924 Sucka Drive',
			$result['address'],
			'The id key/value of the result for address should be equal to `1924 Sucka Drive`.'
		);
		
	}

	public function testFindForIdMock() {
		$id = 1;

		$PDOStatement = $this->getMockBuilder('\PDOStatement')
			->setMethods(['execute', 'fetch'])
			->getMock();

		$PDOStatement->expects($this->once())
			->method('execute')
			->with([$id])
			->will($this->returnSelf());
		$PDOStatement->expects($this->once())
			->method('fetch')
			->with($this->anything())
			->will($this->returnValue('canary'));

		$PDO = $this->getMockBuilder('\PDO')
			->setMethods(['prepare'])
			->disableOriginalConstructor()
			->getMock();

		$PDO->expects($this->once())
			->method('prepare')
			->with($this->stringContains('SELECT * FROM'))
			->willReturn($PDOStatement);

		$ItemsTable = new ItemsTable($PDO);

		$output = $ItemsTable->findForId($id);

		$this->assertEquals(
			'canary',
			$output,
			'The output for the mocked instance of the PDO and PDOStatment should produce the string `canary`.'
		);
	}
	

	protected function getConnection() {
		return new PDO('sqlite::memory:');
	}

	// Creating a table that holds values for id, firstName, lastName, address, and occupation
	protected function createTable() {
		$query = "
		CREATE TABLE `items` (
			`id`	INTEGER,
			`firstName`	TEXT,
			`lastName`	TEXT,
			`address`	TEXT,
			'occupation' TEXT,
			PRIMARY KEY(`id`)
		);
		";
		$this->PDO->query($query);
	}

	// Filling the table with following values
	protected function populateTable() {
		$query = "
		INSERT INTO `items` VALUES (1, 'Candy', 'Crush', '1924 Sucka Drive', 'Stripper');
		INSERT INTO `items` VALUES (2, 'John', 'Smith', '9999 The Way', 'Unemployeed');
		";
		$this->PDO->query($query);
	}
}