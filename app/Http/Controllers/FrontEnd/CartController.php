<?php
namespace App\Http\Controllers\FrontEnd;

use App\Catalog;
use App\Http\Controllers\Controller;
use DB;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller {

    public function __construct() { }

    public function addToCart($id, Request $request) {
        $product = DB::table('product')
                     ->where('product.id', '=', $id)
                     ->groupby('product.id')
                     ->get();
        $name    = $product[0]->name;
        $price   = $product[0]->price;
        //* ((100-$product[0]->sale)/100);
        //$image = $product[0]->imageName;
        Cart::add(['id' => $id, 'name' => $name, 'qty' => 1, 'price' => $price]);

        return redirect('/');
    }

    public function showCart() {
        $catalogs = Catalog::all();

        return view('cart')->with("catalogs", $catalogs);
    }
}