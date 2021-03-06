<?php
namespace sumollapi\Database;

interface DatabaseInterface
{


    public function query(string $query);

    public function bind($param, $value, $type = null);

    public function execute();

    public function hasMany();

    public function single();

    public function rowCount();

    public function lastInsertId();

    public function beginTransaction();

    public function endTransaction();

    public function rollBack();

    public function debugDumpParams();

}
