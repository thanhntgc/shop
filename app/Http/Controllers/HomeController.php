<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();

        foreach ($catalogs as $catalog) {
            $catalogId         = $catalog->id;
            $products          = Product::where('catalog_id', $catalogId)->inRandomOrder()->get();
            $catalog->products = $products;
        }

        return view('home')->with("catalogs", $catalogs);
    }
}
