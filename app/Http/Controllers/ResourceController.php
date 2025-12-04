<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\Redirect;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(5); 
        return view('stem', compact('resources'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_stem' => 'required|string|max:255',
            'category_resource' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'string|url',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240'
        ]);

        $data = $request->only([
           'category_stem',
           'category_resource',
           'title',
           'link',
           'description'
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

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);
        return view('edit', compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);

        $data = $request->only([
            'category_stem',
            'category_resource',
            'title',
            'link',
            'description'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $originalName = preg_replace('/[^A-Za-z0-9\-_\.]/', '_', $file->getClientOriginalName());
            $filename = time() . '_' . $originalName;

            $destinationPath = storage_path('app/public/resources');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);

            if ($resource->image && file_exists($destinationPath . '/' . $resource->image))  {
                unlink($destinationPath . '/' . $resource->image);
            }

            $data['image'] = $filename;
        }

        $resource->update($data);

        return redirect()->route('stem')->with('success', 'Resource berhasil diperbarui');
        }

        public function destroy($id)
        {
            $resource = Resource::findOrFail($id);

            $path = storage_path('app/public/resources/' . $resource->image);
            if ($resource->image && file_exists($path)) {
                unlink($path);
            }

            $resource->delete();

            return redirect()->route('stem')->with('success', 'Resource berhasil dihapus');
        }
}
