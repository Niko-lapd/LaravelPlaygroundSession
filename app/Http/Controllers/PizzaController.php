<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
 public function index(){
    
    $pizzas = Pizza::where('name', 'hawaiian')->get();

    return view('pizzas', [
        'pizzas' => $pizzas,
    ]);
 }   
}
