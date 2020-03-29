<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['theme', 'description', 'file', 'level', 'userid' ];

    public function level(){
        return $this->belongsTo(Level::class);
    }


}
