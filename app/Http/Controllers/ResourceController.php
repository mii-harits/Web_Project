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
            'category_stem' => 'required|string|max:255',
            'category_resource' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $data = $request->only([
           'category_stem',
           'category_resource',
           'title',
           'description',
           'link'
        ]);

         if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');

            // Ganti karakter bermasalah
            $originalName = preg_replace('/[^A-Za-z0-9\-_\.]/', '_', $file->getClientOriginalName());
            $filename = time() . '_' . $originalName;

            // Tentukan folder tujuan
            $destinationPath = storage_path('app/public/resources');

            // Pastikan folder ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            // Pindahkan file ke folder storage
            $file->move($destinationPath, $filename);
        
            $data['image'] = $filename;
        }

        
        Resource::create($data);
        return Redirect()->route('stem')->with('success', 'Buku Berhasil Ditambahkan');
    }
}
