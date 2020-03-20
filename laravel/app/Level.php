<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name', 'about'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
