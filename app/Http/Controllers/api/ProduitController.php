<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Produit::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>'required|string|max:255',
            'description'=>'required|string',
            'prix'=>'required|numeric'
        ]);
        $produit = Produit::create($request->all());
        return response()->json($produit,201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Produit::find($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->json();
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit=Produit::find($id);
        if (!$produit){
            $produit->delete();
            return response()->json();
        }
        


        //
    }
}
