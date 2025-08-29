<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categorie::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|string|max:100',
            'description'=>'nullable|string'
        ]);
        $categorie=Categorie::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Categorie::find($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required|string|max:100',
            'designation'=>'nullable|string'
        ]);
        $categorie=Categorie::find($id);
        if(!$categorie){
            $categorie->update([
                'nom'=>$request->nom,
                'designation'=>$request->designation
            ]);
            return response()->json($categorie,201);

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
