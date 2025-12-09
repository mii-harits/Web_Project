@extends('layouts.index')

@section('index')
    @php
        use Illuminate\Support\Str;
    @endphp

    <style>
        .detail-resources-page .collection-cover img {
            width: 100%;
            max-height: 260px;
            object-fit: cover;
            border-radius: 8px;
        }
        .detail-resources-page .collection-label {
            text-transform: uppercase;
            letter-spacing: .08em;
            font-size: .75rem;
            color: #6c757d;
        }
        .detail-resources-page .collection-title {
            font-size: 1.9rem;
            font-weight: 600;
        }
        .detail-resources-page .collection-count {
            font-weight: 500;
            color: #198754;
        }
        .detail-resources-page .filters-card {
            border: 1px solid #e3e6ef;
            border-radius: 8px;
            padding: 16px;
            background-color: #f8f9fa;
        }
        .detail-resources-page .filters-card h5 {
            font-size: 1rem;
            font-weight: 600;
        }
        .detail-resources-page .search-toolbar {
            border: 1px solid #e3e6ef;
            border-radius: 8px;
            padding: 12px 16px;
            background-color: #ffffff;
        }
        .detail-resources-page .resource-item-card {
            border: 1px solid #e3e6ef;
            border-radius: 8px;
            padding: 12px 16px;
            background-color: #ffffff;
        }
        .detail-resources-page .resource-item-card + .resource-item-card {
            margin-top: 10px;
        }
        .detail-resources-page .resource-link {
            color: #0d6efd;
            text-decoration: none;
        }
        .detail-resources-page .resource-link:hover {
            text-decoration: underline;
        }
        .detail-resources-page .resource-thumb img {
            width: 100%;
            border-radius: 6px;
        }
    </style>

    <div class="container my-4 detail-resources-page">
        {{-- HEADER KOLEKSI --}}
        <div class="row mb-4">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="collection-cover">
                        <img src="{{ asset('assets/logo_steam.png') }}"
                             alt="Logo">
                </div>
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <div class="collection-label mb-1">Collection</div>
                <h1 class="collection-title mb-2">{{ $category }}</h1>
                <div class="collection-count mb-2">
                    {{ number_format($totalResources) }} affiliated resources
                </div>
                @if ($categoryDescription)
                    <p class="text-muted mb-2">
                        {{ Str::limit(strip_tags($categoryDescription), 260) }}
                    </p>
                @endif
                <p class="text-muted small mb-0">
                    Category stem: <strong>{{ $stem }}</strong>
                </p>
            </div>
        </div>

        <div class="row">
            {{-- FILTER (KIRI) --}}
            <div class="col-md-3 mb-4">
                <div class="filters-card">
                    <h5 class="mb-3">Filter Resources</h5>
                    <p class="text-muted small">
                        Use search, per-page, and sort options to refine resources in this collection.
                    </p>
                    <hr>
                    <ul class="list-unstyled small text-muted mb-0">
                        <li class="mb-1">
                            <strong>Collection:</strong><br>
                            {{ $category }}
                        </li>
                        <li class="mb-1">
                            <strong>Category Stem:</strong><br>
                            {{ $stem }}
                        </li>
                    </ul>
                </div>
            </div>

            {{-- LIST RESOURCE (KANAN) --}}
            <div class="col-md-9">
                {{-- SEARCH & TOOLBAR --}}
                <form method="GET"
                      action="{{ route('resources.category', ['stem' => $stem, 'category' => $category]) }}"
                      class="search-toolbar mb-3">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <input type="text"
                                   name="q"
                                   class="form-control"
                                   placeholder="Enter your keyword(s) here"
                                   value="{{ request('q') }}">
                        </div>
                        <div class="col-4 col-md-5">
                            <select name="per_page"
                                    class="form-select"
                                    onchange="this.form.submit()">
                                @foreach ([10, 20, 50, 100] as $size)
                                    <option value="{{ $size }}"
                                        {{ (int) request('per_page', 20) === $size ? 'selected' : '' }}>
                                        {{ $size }} / page
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 col-md-2">
                            <button type="submit" class="btn btn-success w-100">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                {{-- LISTING --}}
                @forelse ($resources as $resource)
                    <div class="resource-item-card">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="resource-thumb">
                                    @if ($resource->image)
                                        <img src="{{ asset('storage/resources/' . $resource->image) }}"
                                             alt="{{ $resource->title }}">
                                    @else
                                        <img src="{{ asset('assets/logo_steam.png') }}"
                                             alt="{{ $resource->title }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h5 class="mb-1">
                                    @if ($resource->link)
                                        <a href="{{ $resource->link }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="resource-link">
                                            {{ $resource->title }}
                                        </a>
                                    @else
                                        {{ $resource->title }}
                                    @endif
                                </h5>
                                <p class="mb-2 text-muted small">
                                    {{ Str::limit(strip_tags($resource->description), 220) }}
                                </p>
                                <div class="resource-meta small text-muted d-flex flex-wrap gap-3">
                                    <span>
                                        Added:
                                        {{ optional($resource->created_at)->format('d M Y') }}
                                    </span>
                                    <span>
                                        Category Stem: {{ $resource->category_stem }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No resources found for this collection.</p>
                @endforelse

                {{-- PAGINATION --}}
                <div class="mt-3 d-flex justify-content-center">
                    {{ $resources->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
