<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome','data_nascimento'];
    protected $table = 'professor';

    public function cursos()
    {
        return $this->hasMany(\App\Curso::class);
    }
}