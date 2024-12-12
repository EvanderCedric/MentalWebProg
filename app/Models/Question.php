<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
