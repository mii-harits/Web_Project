<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\DB;

class DstnController extends Controller
{
    public function index()
    {
        // Ambil ringkasan resource utk section "Building STEM Literacy"
        $stemResources = Resource::where('category_stem', 'Building STEM Literacy')
            ->select(
                'category_resource',
                DB::raw('COUNT(*) as total_resources'),
                DB::raw('MIN(link) as link'),   // ambil salah satu link sebagai perwakilan (opsional)
                DB::raw('MIN(title) as title')  // ambil salah satu title utk alt gambar (opsional)
            )
            ->groupBy('category_resource')
            ->orderBy('category_resource')     // boleh diganti sesuai kebutuhan
            ->limit(8)                         // max 8 kategori
            ->get();

        // SECTION 2
        $learningResources = Resource::where('category_stem', 'STEM Learning Resources')
            ->select(
                'category_resource',
                DB::raw('COUNT(*) as total_resources'),
                DB::raw('MIN(link) as link'),
                DB::raw('MIN(title) as title')
            )
            ->groupBy('category_resource')
            ->orderBy('category_resource')
            ->limit(8)
            ->get();

        // SECTION 3
        $futureResources = Resource::where('category_stem', 'Building STEM Futures')
            ->select(
                'category_resource',
                DB::raw('COUNT(*) as total_resources'),
                DB::raw('MIN(link) as link'),
                DB::raw('MIN(title) as title')
            )
            ->groupBy('category_resource')
            ->orderBy('category_resource')
            ->limit(8)
            ->get();
           
        // SECTION 4
        $providerResources = Resource::where('category_stem', 'Featured STEM Providers')
            ->select(
                'category_resource',
                DB::raw('COUNT(*) as total_resources'),
                DB::raw('MIN(link) as link'),
                DB::raw('MIN(title) as title')
            )
            ->groupBy('category_resource')
            ->orderBy('category_resource')
            ->limit(8)
            ->get();

        return view('home', compact('stemResources', 'learningResources','futureResources', 'providerResources'));
    }

    public function showCategory(Request $request, $stem, $category)
    {
        // decode dari URL
        $stem     = urldecode($stem);
        $category = urldecode($category);

        // base query
        $query = Resource::where('category_stem', $stem)
            ->where('category_resource', $category);

        // filter & sort
        $search  = $request->input('q');
        $sort    = $request->input('sort', 'relevance');
        $perPage = (int) $request->input('per_page', 20);

        if (! in_array($perPage, [10, 20, 50, 100])) {
            $perPage = 20;
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        switch ($sort) {
            case 'newest':
                $query->orderByDesc('created_at');
                break;
            case 'oldest':
                $query->orderBy('created_at');
                break;
            case 'title':
                $query->orderBy('title');
                break;
            default: // relevance
                $query->orderByDesc('created_at');
        }

        // paginasi
        $resources = $query->paginate($perPage)->withQueryString();
        $totalResources = $resources->total();

        // cover image & deskripsi singkat koleksi
        $coverResource = Resource::where('category_stem', $stem)
            ->where('category_resource', $category)
            ->whereNotNull('image')
            ->first();

        $categoryDescription = $coverResource?->description;

        return view('resources.detailResources', [
            'stem'                => $stem,
            'category'            => $category,
            'resources'           => $resources,
            'totalResources'      => $totalResources,
            'coverResource'       => $coverResource,
            'categoryDescription' => $categoryDescription,
        ]);
    }
}
