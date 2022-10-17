<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //If this is not specified the Eloquebnt will assume 
    //the table name is the class name in plural "todos"
    protected $table = 'task';
    /**
     * The primary key associated with the table
     * @var int
     */
    protected $primaryKey = 'TaskId';

    protected $attributes = array(
        $taskId => $taskId,
        $name => $name,
        $toDos => $toDos
    );

    /**
     * @var int
     */
    protected $taskId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $toDos;

    

    public function todo(){
        return $this->hasMany(Todo::class);
    }
}

