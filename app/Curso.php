<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['professor_id', 'nome'];

    public function professor()
    {
        return $this->belongsTo(\App\Professor::class);
    }

    public function alunos()
    {
    	return $this->hasMany(\App\Aluno::class);
    }
}