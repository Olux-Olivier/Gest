<?php

namespace App\Http\Controllers;

// use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   
    // formulaire produit
    public function register()
    {
        return view('registerProduct');
    }


    // enbregistrer un produit
    public function createProduct(Request $request){
        

        $product = Product::create([
            'product_name' =>$request->input('product_name'),
            'price' => $request->input('price'),
            'quantity_in_stock' => $request->input('quantity_in_stock'),
            'category_id' => $request->input('category'),
            'supplier_id' => $request->input('supplier'),
        ]);

        return redirect()->route('product')->with('success', "produit enregistré avec succés");
    }

    public function product()
    {
        $product = Product::all();
        return view('welcome',['product'=>$product]);
    }








    

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'quantity_in_stock' => 'required',
        ]);

            Product::create($data);
            $data->save();
            return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }
    public function article()
    {
        return view('create.newproduit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
