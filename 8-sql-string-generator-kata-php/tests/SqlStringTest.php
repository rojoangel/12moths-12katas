<?php

use Kata\Sql;

class SqlStringTest extends \PHPUnit_Framework_TestCase {

    public function testSelect() {
        $columns = array("a", "b", "c");
        $tableName = "x";
        $sql = new Sql();
        $this->assertEquals("select a,b,c from x", $sql->select($tableName, $columns));
    }

    public function testSelectEmptyArray() {
        $columns = array();
        $tableName = "x";
        $sql = new Sql();
        $this->setExpectedException("InvalidArgumentException", "Columns are empty!");
        $sql->select($tableName, $columns);
    }

    public function testSelectWithNonArrayColumns() {
        $columns = "dummy";
        $tableName = "x";
        $sql = new Sql();
        $this->setExpectedException("InvalidArgumentException", "Columns are invalid!");
        $sql->select($tableName, $columns);
    }

    public function testSelectWithEmptyTableName() {
        $columns = array("a", "b", "c");
        $tableName = "";
        $sql = new Sql();
        $this->setExpectedException("InvalidArgumentException");
        $sql->select($tableName, $columns);
    }

    public function testSelectSimpleWhere() {
        $columns = array("a", "b", "c");
        $where = array(
          "a" => 'test'
        );
        $tableName = "x";
        $sql = new Sql();
        $this->assertEquals("select a,b,c from x where a = 'test'", $sql->select($tableName, $columns, $where));
    }

    public function testSelectWhereMultiple() {
        $columns = array("a", "b", "c");
        $where = array(
            "a" => 'test',
            "b" => 'Marques',
            "c" => 'Bartolo'
        );
        $tableName = "x";
        $sql = new Sql();
        $this->assertEquals("select a,b,c from x where a = 'test' and b = 'Marques' and c = 'Bartolo'",
            $sql->select($tableName, $columns, $where));
    }

}