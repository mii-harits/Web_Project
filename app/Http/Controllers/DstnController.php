<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class DstnController extends Controller
{
    public function index()
    {
        // Ambil resource untuk section "Building STEM Literacy", max 8 data
        $stemResources = Resource::where('category_stem', 'Building STEM Literacy')
            ->latest()          // opsional: urutkan dari yang terbaru
            ->limit(8)          // batasi 8 data
            ->get();

        // Hitung jumlah resource per category_resource
        $resourceCounts = Resource::where('category_stem', 'Building STEM Literacy')
            ->select('category_resource')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('category_resource')
            ->pluck('total', 'category_resource'); // hasil: ['Books' => 10, 'Modules' => 5, ...]

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

        return view('home', compact('stemResources', 'learningResources','futureResources', 'providerResources', 'resourceCounts', 'learningCounts', 'futureCounts', 'providerCounts'));
    }
}
