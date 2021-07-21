<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    //cấu hình để xoá mềm (soft delete)

    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];
}
