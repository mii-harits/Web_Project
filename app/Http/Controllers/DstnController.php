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
            ->latest()
            ->limit(8)
            ->get();
        
        // Hitung jumlah resource per category_resource
        $learningCounts = Resource::where('category_stem', 'STEM Learning Resources')
            ->select('category_resource')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('category_resource')
            ->pluck('total', 'category_resource'); // hasil: ['Books' => 10, 'Modules' => 5, ...]

        // SECTION 3
        $futureResources = Resource::where('category_stem', 'Building STEM Futures')
            ->latest()
            ->limit(8)
            ->get();
        
        // Hitung jumlah resource per category_resource
        $futureCounts = Resource::where('category_stem', 'Building STEM Futures')
            ->select('category_resource')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('category_resource')
            ->pluck('total', 'category_resource'); // hasil: ['Books' => 10, 'Modules' => 5, ...]
           
        // SECTION 4
        $providerResources = Resource::where('category_stem', 'Featured STEM Providers')
            ->latest()
            ->limit(8)
            ->get();

        // Hitung jumlah resource per category_resource
        $providerCounts = Resource::where('category_stem', 'Featured STEM Providers')
            ->select('category_resource')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('category_resource')
            ->pluck('total', 'category_resource'); // hasil: ['Books' => 10, 'Modules' => 5, ...]

        return view('home', compact('stemResources', 'learningResources','futureResources', 'providerResources', 'learningCounts', 'futureCounts', 'providerCounts'));
    }
}
