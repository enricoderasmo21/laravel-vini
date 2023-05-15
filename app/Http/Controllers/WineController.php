<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {

        $wines = Wine::all();
        
        return view('home', compact('wines'));
    }
    
}
