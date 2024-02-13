<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class MainController extends Controller
{

    public function index() {

        $pizzas = Pizza :: all();

        return view('pages.index', compact('pizzas'));
    }
}
