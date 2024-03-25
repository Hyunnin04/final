<?php

namespace App\Http\Controllers;

use App\Models\create_product; // If you're using any models, make sure to import them as well.
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store()
    {
        create_product::create([
            'name' => request('name'),
            'type' => request('type'),
            'price' => request('price'),
        ]);

        return redirect('/product');
    }
    public function view()
    {
      $view=create_product::all();

      return view('product.index', [
        'view'=> $view,
      ]);
    }
   
}

