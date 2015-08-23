<?php

namespace Kata;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Sql {

    public function select($tableName, $columns, $where = null) {
        $this->validateColumns($columns);
        $this->validateTableName($tableName);
        return "select ".
            $this->generateSqlColumns($columns) .
            " from $tableName" .
            $this->generateSqlWhere($where);
    }

    /**
     * @param $columns
     */
    public function validateColumns($columns)
    {
        if (empty($columns)) {
            throw new InvalidArgumentException('Columns are empty!');
        }

        if (!is_array($columns)) {
            throw new InvalidArgumentException('Columns are invalid!');
        }
    }

    /**
     * @param $tableName
     */
    public function validateTableName($tableName)
    {
        if (empty($tableName)) {
            throw new InvalidArgumentException('Table is empty!');
        }
    }

    /**
     * @param $where
     * @return string
     */
    public function generateSqlWhere($where)
    {
        $whereSentence = "";
        if (!empty($where)) {
            $sqlWord = " where ";
            foreach ($where as $key => $value) {
                $whereSentence = $whereSentence . $sqlWord . "$key = '$value'";
                $sqlWord = " and ";
            }
            return $whereSentence;
        }
        return $whereSentence;
    }

    /**
     * @param $columns
     * @return string
     */
    public function generateSqlColumns($columns)
    {
        return implode(',', $columns);
    }

}