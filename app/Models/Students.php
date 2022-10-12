<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Students extends Model
{
    use HasFactory, Sortable;

    public $fillable = [ 'studentName', 'studentEmail', 'studentId'];

    public $sortable = ['studentName'];

    public function curso() {
        return $this->belongsTo(Courses::class);
    }

    public function projects() {
        return $this->belongsTo(Projects::class);
    }


    //Conexão com a tabela de Projetos //
    // public function projects(): HasMany {
    //     return $this->hasMany(Projects::class, 'students', 'studentsId');
    // }


}
