<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class IndexController extends Controller
{
    public function index ()
    {
        $carousels = Carousel::all();

        return view ('tampilan.carousel',  compact('carousels'));
    }
}
