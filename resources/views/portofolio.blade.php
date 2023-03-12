@extends('layouts.layout-web')

@section('title', 'Portfolio')

@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>

                            @foreach ($categories as $category)
                                <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    @foreach ($categories as $category)
                        @foreach ($category->products as $product)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $category->id }}">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset($product->image_file_url) }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $product->caption }}</h4>
                                        <p>{{ $category->name }}</p>
                                        <div class="portfolio-links">
                                            <a href="{{ asset($product->image_file_url) }}" data-gallery="portfolioGallery"
                                                class="portfolio-lightbox" title="{{ $product->caption }}">
                                                <i class="bx bx-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@endsection
<!-- ======= Hero Section ======= -->
