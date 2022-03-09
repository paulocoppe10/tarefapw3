<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('principal');        
        echo view('template/footer');
    }

public function page($page='principal'){
        echo view('template/header');
        echo view($page);        
        echo view('template/footer');   
    }
}
