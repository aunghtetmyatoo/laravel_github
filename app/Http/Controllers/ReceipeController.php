<?php

namespace App\Http\Controllers;

use App\test;
use App\Receipe;
use App\Category;
use App\Mail\ReceipeStored;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReceipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $receipe = Receipe::where('author_id', auth()->id())->get();
        return view('home',compact('receipe'));
    }

    
    public function create()
    {
        $category = Category::all();
        return view('create', compact('category'));
    }

    
    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);
        
        Receipe::create($validatedData + ['author_id' => auth()->id()]);
        // Receipe::create([
        //     'name' => request()->name,
        //     'ingredients' => request()->ingredients,
        //     'category' => request()->category,
        // ]);

        

        return redirect('receipe');
    }

    
    public function show(Receipe $receipe)
    {
        // if($receipe->author_id !== auth()->id())
        // {
        //     abort(403);
        // }

        // dd($test);

        $this->authorize('view', $receipe);

        return view('show',compact('receipe'));
    }

    
    public function edit(Receipe $receipe)
    {
        $this->authorize('view', $receipe);
        $category = Category::all();
        return view('edit', compact('receipe','category'));
    }

    
    public function update(Receipe $receipe)
    {
        $this->authorize('view', $receipe);
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
        $this->authorize('view', $receipe);
        $receipe->delete();

        return redirect('receipe');
    }
}


