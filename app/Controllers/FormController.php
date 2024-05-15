<?php

namespace App\Controllers;

class FormController extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('formulario');
        echo view('footer');
    }
}
