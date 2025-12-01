<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\Redirect;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        return view('stem', compact('resources'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_stem' => 'required',
            'category_resource' => 'required',
            'title' => 'required',
        ]);

        Resource::create($request->all());

        return Redirect()->route('stem');
    }
}
