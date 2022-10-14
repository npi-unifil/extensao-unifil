<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;


    public function alunos() {
        return $this->hasMany(Students::class, 'project_id', 'id');
    }



}
