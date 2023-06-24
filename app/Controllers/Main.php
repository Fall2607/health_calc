<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $tittle = $this->getTittle();
        $data['tittle'] = $tittle;
        return view('templates/v_main', $data);
    }
}
