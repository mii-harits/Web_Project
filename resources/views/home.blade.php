@extends('layouts.index')

@section('index')
    <!-- HERO SECTION -->
    <section class="hero">
        <h1 class="hero-title">Explore STEM Learning Resources</h1>
        <p class="hero-subtitle">
            A curated collection of high-quality STEM teaching materials to support educators, students, and innovators around the world.
        </p>
    </section>

    <!-- SECTION 1 -->
    <div class="container">
        <div class="section-header">
            <h2>Building STEM Literacy</h2>
            <p>Resources designed to prepare educators for collaborating across the curriculum to build STEM literacy, interest, and engagement that will inspire students toward STEM college and careers.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($stemResources as $resource)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('resources.category', [
                            'stem'     => 'Building STEM Literacy',
                            'category' => $resource->category_resource
                        ]) }}"
                        class="text-decoration-none text-reset">
                        <div class="resource-card">
                            <img src="{{ asset('assets/logo_steam.png') }}"
                                 class="resource-img"
                                 alt="{{ $resource->title ?? $resource->category_resource }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->category_resource }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->total_resources }} resources
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 2 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>STEM Learning Resources</h2>
            <p>Find teaching materials that will help build interest in all students, regardless of their college or career pathway, to understand the role of STEM in their lives and to become informed citizens.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($learningResources as $resource)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('resources.category', [
                            'stem'     => 'STEM Learning Resources',
                            'category' => $resource->category_resource
                        ]) }}"
                        class="text-decoration-none text-reset">
                        <div class="resource-card">
                            <img src="{{ asset('assets/logo_steam.png') }}"
                                 class="resource-img"
                                 alt="{{ $resource->title ?? $resource->category_resource }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->category_resource }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->total_resources }} resources
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 3 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>Building STEM Futures</h2>
            <p>Whether you are preparing for college, pursuing a career in STEM, or want to engage in your local community as a citizen scientist, there are many ways to engage and learn.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($futureResources as $resource)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('resources.category', [
                            'stem'     => 'Building STEM Futures',
                            'category' => $resource->category_resource
                        ]) }}"
                        class="text-decoration-none text-reset">
                        <div class="resource-card">
                            <img src="{{ asset('assets/logo_steam.png') }}"
                                 class="resource-img"
                                 alt="{{ $resource->title ?? $resource->category_resource }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->category_resource }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->total_resources }} resources
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center">
                    Belum ada resource untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>

    <!-- MODERN DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION 4 -->
    <div class="container pb-5">
        <div class="section-header">
            <h2>Featured STEM Providers</h2>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($providerResources as $resource)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('resources.category', [
                            'stem'     => 'Featured STEM Providers',
                            'category' => $resource->category_resource
                        ]) }}"
                        class="text-decoration-none text-reset">
                        <div class="resource-card">
                            <img src="{{ asset('assets/logo_steam.png') }}"
                                 class="resource-img"
                                 alt="{{ $resource->title ?? $resource->category_resource }}">
                            <div class="p-3">
                                <div class="resource-title">
                                    {{ $resource->category_resource }}
                                </div>
                                <div class="resource-count">
                                    {{ $resource->total_resources }} resources
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center">
                    Belum ada provider untuk kategori ini.
                </p>
            @endforelse
        </div>
    </div>
@endsection
