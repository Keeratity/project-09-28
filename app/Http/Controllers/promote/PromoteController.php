<?php

namespace App\Http\Controllers\promote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class PromoteController extends Controller
{

    public function index()
    {
        return view('promote.index');
    }

    public function menu()
    {
        return view(
            'promote.menu',
            [
                'products' => Product::all(),
            ]
        );
    }

    public function gallery()
    {
        return view('promote.gallery');
    }

    public function about()
    {
        return view('promote.about');
    }

    public function contact()
    {
        return view('promote.contact');
    }


}
