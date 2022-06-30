<?php

namespace App\Http\Controllers\From;

use App\Models\Product;
use App\Models\Material;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use App\Rules\StrongPassword;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ProductFromRequest;

class CreateController extends Controller
{
    protected $products = 'product';
    public function index()
    {
        // Insert Data in one to many reletionship

        // $product = Product::with('materials')->find(1);
        // $product->materials()->attach([
        //     1 => ['material_qry' => 20],
        //     2 => ['material_qry' => 5],
        //     3 => ['material_qry' => 19],
        // ]);



        // // $material = Material::with('products')->find(1);
        // $material->products()->attach([
        //     2 => ['material_qry' => 20],
        //     4 => ['material_qry' => 5],
        //     5 => ['material_qry' => 19],
        // ]);


        // Fetch(view) Data in one to many reletionship
        // $product = Product::with('materials')->get();

        // $data = [
        //     'products' => Product::with('materials')->get(),
        //     'materials' => Material::with('products')->get()
        // ];

        // return view('backend.pages.practrice.product', $data);



        $products = Product::with('brand')->get();

        // dd($products);
        return view('backend.pages.practrice.product', compact('products'));
    }

    public function create()
    {
        $data = [
            'title' => 'About Us',
            'page_title' => 'About Us',
        ];
        return view('backend.pages.practrice.create', $data);
    }



    public function store(ProductFromRequest $request)
    {
        // dd($request->all());   // dd= did dai

        $data = $request->validated();
        // dd($data);
        $result = DB::table('product')->insert($data);


        if ($result) {
            session()->flash('success', 'Data Store Successfull');
        } else {
            session()->flash('error', 'Data Store Faild');
        }

        return back();
    }
}
