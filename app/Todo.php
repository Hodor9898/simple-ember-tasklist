<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    protected $fillable = ['status', 'title'];

    const STATUS_INCOMPLETE = 'incomplete';
    const STATUS_COMPLETE = 'complete';
}
