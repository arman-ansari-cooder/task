<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SimpleController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function indexValidate(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
        ]);
        Category::create([
            'category' => $validated['category'],
        ]);
        return back()->with('success', 'Category has been validated and saved successfully!');
    }
    
}
