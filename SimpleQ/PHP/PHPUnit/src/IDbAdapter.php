<?php
namespace TDD;

interface IDbAdapter
{
    /*
     * Initialized the database connection
     * @param $dsn, $username, $password
     */
    public function __construct($dsn, $username, $password);

    /*
     * Inserts record into db
     * @param $table, array $bind
     * @return int
     */
    public function insert($table, $bind = array());

    /*
     * Update a record in db
     * @param $table, array $bind, array $where
     */
    public function update($table, $bind = array(), $where = array());

    /*
     * Delete record from db
     * @param $table, array $where
     */
    public function delete($table, $where = array());

    /*
     * Fetch all records
     * @param $statement, array $bind
     * @return array
     */
    public function fetchAll($statement, $bind = array());

    /*
     * Fetch 1 record
     * @param $statement, array $bind
     * @return array
     */
    public function fetchOne($statement, $bind = array());
}