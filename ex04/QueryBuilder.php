<?php

class QueryBuilder
{

    private $select = [];
    private $from;
    private $where = [];
    // Your code here


    public function select(...$args): QueryBuilder
    {
        $this->select = $args;
        return $this;
    }

    public function from($table, $alias): QueryBuilder
    {
        if ($alias){
            $this->from[$alias] = $table;
        } else {
            $this->from[] = [$table];
        }
        return $this;

    }

    public function where(...$args): QueryBuilder
    {
        $this->where[] = $args;
        return $this;
    }

    public function __toString()
    {
        $parts = ['SELECT'];
        if($this->select){
            $parts[] = join(',', $this->select);
        } else {
            $parts[] = '*';
        }
        $parts[] = ['FROM'];
        $parts[] = $this->createFrom();

        if ($this->where){
            $parts[] = 'WHERE';
            $parts[] = "(" . join(', ', $this->where) . ")";
        }

        return join(' ', $parts[]);

    }

    public function createFrom(): string{
        $from = [];
        foreach ($this)
    }
}