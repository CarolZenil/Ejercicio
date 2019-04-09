<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'idEmployee';

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', '%'.$name.'%');
    }
}
