<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $carousel = [
            "imagens" => 
            [
                [
                    "nome" => "Supino",
                    "url" => "img/carousel/img1.jpg"
                ], [ 
                    "nome" => "Rosca",
                    "url" => "img/carousel/img2.jpg"
                 ], [
                    "nome" => "Roscao",
                    "url" => "img/carousel/img3.jpg"
                ]
            ]
        ];
        return view("initial/inicio", $carousel);
    }
}
