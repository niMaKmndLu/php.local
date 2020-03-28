<?php

class db{
    public $table;

    public function find($id,$columns = null)
    {
        $columns = !is_null($columns) ? implode(',',$columns) : '*' ;
        echo "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }
}

