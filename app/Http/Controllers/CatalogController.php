<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Http\Requests\CatalogFormRequest;

class CatalogController extends Controller
{
	public function index() {
		$catalogs = Catalog::all();
		return view("admin.catalog.index")->with("catalogs", $catalogs);
	}

	public function create() {
	    return view("admin.catalog.create");
    }

    public function store(CatalogFormRequest $request) {
        $catalog = new Catalog();
        $catalog -> name = $request -> name;
        $catalog -> save();
        return redirect() -> route("admin.catalogs");
    }
}