<?php
namespace DatabaseTesting\Tests\Persistence;

use DatabaseTesting\Db\MysqlAdapter;

abstract class DatabaseTestCase extends \PHPUnit_Extensions_Database_TestCase
{
    //instantiate adapter once per test
    static private $adapter = null;

    //instantiate pdo once for test clean-up/fixture load
    static private $pdo = null;

    //instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
    private $conn = null;

    final public function getAdapter()
    {
        if (self::$adapter == null)
        {
            self::$adapter = new MysqlAdapter( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS'] );
        }

        return self::$adapter;
    }

    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                $dbAdapter = $this->getAdapter();
                self::$pdo = $dbAdapter->getConnection();
            }
            $this->conn = $this->createDefaultDBConnection( self::$pdo );
        }

        return $this->conn;
    }
}