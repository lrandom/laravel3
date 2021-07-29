<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        'answers' => 'array'
    ];

    public function section ()
    {
        return $this->belongsTo(Section::class);
    }
}
