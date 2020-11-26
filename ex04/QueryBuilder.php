<?php

class QueryBuilder
{
    private $select = [];
    private $from = [];
    private $where = [];
    // Your code here

    public function select(...$args): QueryBuilder
    {
        $this->select[] = $args;
        return $this;
    }

    public function from($table, $alias = false): QueryBuilder
    {
        if ($table AS $alias){
        $this->from = $table;
        }

        return $this;
    }

    public function where(...$args): QueryBuilder
    {
        $this->where[] = $args;
        return $this;
    }

    public function __toString(): QueryBuilder
    {
        return $this;
    }
}