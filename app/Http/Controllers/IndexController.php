<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Detail;

class IndexController extends Controller
{
    public function index ()
    {
        $carousels = Carousel::all();

        $details = Detail::all();

        return view ('tampilan.carousel',  compact('carousels'), compact('details'));
    }

        public function post($id)
    {
        $detail = Detail::find($id);

        return view('tampilan.detailproduct', compact('detail'));
    }
}
