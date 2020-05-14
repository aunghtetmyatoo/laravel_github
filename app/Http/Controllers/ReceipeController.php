<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipe;

class ReceipeController extends Controller
{
    public function index()
    {
        $data = Receipe::all();
        return view('home',compact('data'));
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);
        
        Receipe::create($validatedData);
        // Receipe::create([
        //     'name' => request()->name,
        //     'ingredients' => request()->ingredients,
        //     'category' => request()->category,
        // ]);

        return redirect('receipe');
    }

    
    public function show(Receipe $receipe)
    {
        return view('show',compact('receipe'));
    }

    
    public function edit(Receipe $receipe)
    {
        return view('edit', compact('receipe'));
    }

    
    public function update(Receipe $receipe)
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);
        
        $receipe->update($validatedData);

        // $receipe->name = request()->name;
        // $receipe->ingredients = request()->ingredients;
        // $receipe->category = request()->category;
        // $receipe->save();

        return redirect('receipe');
    }

    
    public function destroy(Receipe $receipe)
    {
        $receipe->delete();

        return redirect('receipe');
    }
}


