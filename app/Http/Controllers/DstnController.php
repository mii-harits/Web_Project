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

        // SECTION 2
        $learningResources = Resource::where('category_stem', 'STEM Learning Resources')
            ->latest()
            ->limit(8)
            ->get();

        // SECTION 3
        $futureResources = Resource::where('category_stem', 'Building STEM Futures')
            ->latest()
            ->limit(8)
            ->get();
            
        // SECTION 4
        $providerResources = Resource::where('category_stem', 'Featured STEM Providers')
            ->latest()
            ->limit(8)
            ->get();
        return view('home', compact('stemResources', 'learningResources','futureResources', 'providerResources'));
    }
}
