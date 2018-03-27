<?php namespace App\Http\Controllers;

use App\Curso;
use App\Professor;
use Barryvdh\DomPDF\Facade as PDF;

class PdfviewController extends Controller
{

    private $model;
    public function __construct(Curso $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data['model'] = $this->model->all();
        return PDF::loadView('pdfcurso', $data)
            ->stream();
    }

}