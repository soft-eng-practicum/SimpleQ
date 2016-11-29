<?php
namespace DatabaseTesting\Db;
use PDO, PDOException;

class MysqlAdapter implements IDbAdapter
{
    private $dsn;
    private $username;
    private $password;

    //PDO
    protected static $db = null;

    /*
     * Initialize MySql database connection class
     * @param $dsn, $username, $password
     */
    public function __construct($dsn, $username, $password)
    {
        $this -> dsn = $dsn;
        $this -> username = $username;
        $this -> password = $password;
    }

    /*
     * @return PDO
     */
    public function getConnection()
    {
        if (!self:: $db)
            self:: $db = new PDO($this->dsn, $this->username, $this->password);

        return self:: $db;
    }

    /*
     * Insert record into db
     * @param $table, array $bind
     * @return int
     */
    public function insert( $table, $bind = array() )
    {
        $db = $this->getConnection();
        $query = $db->prepare(
            "INSERT INTO `{$table}` (" . implode( ', ', array_keys( $bind ) ) . ") " .
            " VALUES ( :" . implode( ', :', array_keys( $bind ) ) . " )"
        );
        $query->execute( $bind );
        return $db->lastInsertId( $table );
    }

    /*
     * Update record in the database
     * @param $table, array $bind, array $where
     */
    public function update( $table, $bind = array(), $where = array() )
    {
        $db = $this->getConnection();
        $setValues = array();
        foreach( $bind as $column => $value )
            $setValues[] = $column . " = :" . $column;
        $whereValues = array();
        foreach( $where as $column => $value )
            $whereValues[] = $column . " = " . $db->quote( $value );
        $query = $db->prepare(
            "UPDATE `{$table}` SET " . implode( ', ', $setValues ) . " WHERE " . implode( ' AND ', $whereValues )
        );
        $query->execute( $bind );
    }

    /*
     * Delete recird from db
     * @param $table, array $where
     */
    public function delete( $table, $where = array() )
    {
        $db = $this->getConnection();
        $whereValues = array();
        foreach( $where as $column => $value )
            $whereValues[] = $column . " = :" . $column;
        $query = $db->prepare(
            "DELETE FROM `{$table}` WHERE " . implode( ' AND ', $whereValues )
        );
        $query->execute( $where );
    }

    /*
     * @param $statement, array $bind
     * @return array
     */
    public function fetchAll( $statement, $bind = array() )
    {
        return $this->select( $statement, $bind );
    }

    /*
     * @param $statement, array $bind
     * @return array
     */
    public function fetchOne( $statement, $bind = array() )
    {
        $rows = $this->select( $statement, $bind );
        if( count( $rows ) > 0 )
            return $rows[ 0 ];
        return null;
    }

    /*
     * Prepare & Execute select statement with binding values
     * @param $statement, array $bind
     * @return array
     * @throws \ezcDbHandlerNotFoundException
     */
    private function select( $statement, $bind = array() )
    {
        $db = $this->getConnection();
        $query = $db->prepare( $statement );
        $query->execute( $bind );
        return $query->fetchAll();
    }


}