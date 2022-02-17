<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos =[
        "titulo"=> "Isdfgdfgsdsdffsgd 4"
        ];
        return view('welcome_message',$datos);

        $dato =[
            "title"=> "Iforgd 4"
            ];
            return view('welcome_message',$dato);
    }
    public function Normal(){
        return "Programación Web 2";
    }
    public function Otra(){
        return " Más programación Web";
    }
    public function Otranormal(){
        return view('Otranormal');
    }
}
