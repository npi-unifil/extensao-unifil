<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}
