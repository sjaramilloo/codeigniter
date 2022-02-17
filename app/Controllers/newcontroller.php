<?php

namespace App\Controllers;

class newcontroller extends BaseController
{
    public function index()
    {
        echo view('nuevo/header');
        echo view('nuevo/inicio');
        echo view('nuevo/footer');
    }
    public function catalogo(){
        echo view('nuevo/header');
        echo view ('nuevo/menu');
        echo view ('nuevo/catalogo');
        echo view('nuevo/footer');
    }
    public function menu(){
        $vista =
         view('nuevo/header').
         view ('nuevo/menu').
         view ('nuevo/catalogo').
         view('nuevo/footer');
         return $vista;
    }

}
?>  