<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
        $this->middleware(["permission:create produit"])->only(['store','create']);
        $this->middleware(["role:Admin,permission:update produit"])->only(['update','edit']);
        $this->middleware(["permission:delete produit"])->only(['destroy','delete']);
        $this->middleware(["permission:view produit"])->only(['index']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produit',['produits'=>Produit::all()]);
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
    public function store(ProduitRequest $request)
    {
        Produit::create([
            'designation'=> $request->designation,
            'description'=> $request->description,
            'prix'=>$request->prix
        ]);

        return back()->with("success","Produit ajoute avec succes");
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produit_edit',['produit'=>Produit::find($id)]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'description'=>'required|string',
                'designation'=> 'nullable|string|max:500',
                'prix'=>'numeric'
            ]
        );  

        $produit=Produit::find($id);
        $produit->update([
            'designation'=>$request->designation,
            'description'=>$request->description,
            'prix'=>$request->prix

        ]);
        return redirect()->route('produit')->with('succes','Modification effectue avec succes ');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit=Produit::find($id);
        $produit->delete();
        //
    }
}
