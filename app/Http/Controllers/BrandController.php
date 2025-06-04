<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'brand_name' => 'required|string|max:255|unique:brands,brand_name',
            'brand_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $brand = new \App\Models\Brand();
        $brand->brand_name = \Illuminate\Support\Str::lower($request->input('brand_name'));

        if ($request->hasFile('brand_logo')) {
            $logoPath = $request->file('brand_logo')->store('logos', 'public');
            $brand->brand_logo = $logoPath;
        }

        $brand->save();

        return response()->json($brand, 200);
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
        //
    }
}
