<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['curso_id','nome','data_nascimento', 'cep', 'logradouro', 'numero', 'bairro', 'cidade', 'estado'];


	public function curso()
	    {
	        return $this->belongsTo(\App\Curso::class);
	    }
}