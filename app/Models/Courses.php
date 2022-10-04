<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;


    public function alunos(): HasMany {
        return $this->hasMany(Students::class, 'course_id', 'id');
    }
}
