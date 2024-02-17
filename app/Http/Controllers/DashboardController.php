<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // logica
        $users = [
                [
                    'name' => 'Juan',
                    'age' => '32'
                ],
                [
                    'name' => 'Mark',
                    'age' => '21'
                ],
                [
                    'name' => 'Tony',
                    'age' => '55'
                ],
                [
                    'name' => 'Vik',
                    'age' => '18'
                ],
                [
                    'name'=> 'Ana',
                    'age' => '17'
                ]
            ];
        //ritorno e passaggio dati alla vista
        return view(
            'dashboard',
            ['users'=>$users]
        );
    }
}
