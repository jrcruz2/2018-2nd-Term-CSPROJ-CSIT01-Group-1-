<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRecord extends Model
{
    protected $fillable = [
        'section', 'grade_level', 'subject',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
