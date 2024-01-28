<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registerSupplier()
    {
        return view('registerSupplier');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createSupplier(Request $request)
    {
        $supplier = Supplier::create([
            'name' =>$request->input('name'),
            'contact' => $request->input('contact'),
        ]);

        return redirect()->route('supplier')->with('success', "Supplier enregistré avec succés");
    }


    public function supplier()
    {
        $supplier = Supplier::all();
        return view('supplier',['supplier'=>$supplier]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
