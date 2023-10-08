<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return inertia('Laptop/Index', [
            'laptops' => Laptop::all()
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Laptop/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $laptop = new Laptop();

        // $laptop->save();

        Laptop::create(
            // ...$request->all(),
            $request->validate([
                'brand' => 'required',
                'model' => 'required',
                'processor' => 'required',
                'ram' => 'required',
                'storage' => 'required',
                'graphics_card' => 'required',
                'condition' => 'required',
                'features' => 'required',
                'price' => 'required|integer|min:1|max:20000000'
            ])
        );

        return redirect()->route('laptop.index')
            ->with('success', 'Laptop created succesfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        return inertia('Laptop/Show', [
            'laptop' => $laptop
        ]);
    }

    // public function show(string $id)
    // {
    //     return inertia('Laptop/Index', [
    //         'laptops' => Laptop::find($id)
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        return inertia('Laptop/Edit', [
            'laptop' => $laptop
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
        $laptop->update(
            // ...$request->all(),
            $request->validate([
                'brand' => 'required',
                'model' => 'required',
                'processor' => 'required',
                'ram' => 'required',
                'storage' => 'required',
                'graphics_card' => 'required',
                'condition' => 'required',
                'features' => 'required',
                'price' => 'required|integer|min:1|max:20000000'
            ])
        );

        return redirect()->route('laptop.index')
            ->with('success', 'Laptop updated succesfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->back()
            ->with('success', 'Laptop deleted succesfully!');
    }
}
