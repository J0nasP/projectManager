<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //If this is not specified the Eloquebnt will assume 
    //the table name is the class name in plural "todos"
    protected $table = 'todo';
    /**
     * The primary key associated with the table
     * @var int
     */
    protected $primaryKey = 'TodoId';

    /**
     * @var int
     */
    protected $todoId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $isComplete;
}

