@extends('layouts.layout-web')

@section('title', 'Home')

@section('main')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome To <span>TG CREATIVE</span></h2>
                            <p class="animate__animated animate__fadeInUp">Sebuah usaha jasa yang bergerak di bidang
                                layanan fotografi dan videografi. Kami membangun usaha ini tidak semata-mata untuk
                                mencari materi (harga termurah di Blitar) <br> Fokus tujuan kami memberikan karya
                                terbaik kepada klien kami dibiang fotografi</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Fotografi</h2>
                            <p class="animate__animated animate__fadeInUp"> </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Videografi</h2>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>TG Creative Photography & Videography</h2>
                        <h3>Kami bertujuan untuk menjadikan momen terindah Anda agar tidak lekang oleh waktu.</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            TG Creative menyediakan jasa fotografi dengan keahlian dalam pre-wedding dan wedding scene.
                            Berbasis di Blitar. Dan kami membawa kehangatan dan sifat halus itu ke dalam bidikan kami.
                        </p>

                        <p class="fst">
                            Kami yakin foto pernikahan memiliki nilai yang sangat tinggi untuk sebuah warisan. Ini
                            menelusuri kembali ke masa ketika dua orang bersatu dalam satu simpul. Ini menyimpan sejarah
                            kolektif yang diturunkan dari satu generasi ke generasi berikutnya. Untuk memancarkan
                            nostalgia manis dalam satu pernikahan, kami mendekati gaya kami dengan sentuhan klasik dan
                            lembut. Kami memahami momen spesial Anda perlu diperlakukan dengan sangat anggun untuk
                            menunjukkan keindahan yang melewati masa-masa berharga itu.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

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
