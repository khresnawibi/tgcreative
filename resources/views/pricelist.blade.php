@extends('layouts.layout-web')

@section('title', 'Pricing')

@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Price List</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Price List</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup></sup>0<span></span></h4>
              <ul>
                <li>KONSULTASI</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/085733522632" class="btn-buy">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Prewedding</h3>
              <h4><sup></sup>500.000<span></span></h4>
              <ul>
                <li></li>
                <li>soft file</li>
                <li>foto & video</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/085733522632" class="btn-buy">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Wedding</h3>
              <h4><sup>1.500.000</sup><span></span></h4>
              <ul>
                <li>Dokumentasi mulai berjalannya acara s/d berakhirnya acara</li>
                <li>soft file</li>
                <li>foto & video</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/085733522632" class="btn-buy">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Wisuda</h3>
              <h4><sup></sup>50.000<span> / Orang</span></h4>
              <ul>
                <li>Hard file / Album (minimal order 20 anak)</li>
                <li>Foto & video</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/085733522632" class="btn-buy">Book Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    

  </main><!-- End #main -->

@endsection
<!-- ======= Hero Section ======= -->
