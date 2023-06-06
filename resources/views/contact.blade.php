@extends('layouts.layout-web')

@section('title', 'Contact')

@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Location</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Location</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div>
          <iframe style="border:0; width: 100%; height: 470px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=wonotirto&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe> <div class="mapouter"><div class="gmap_canvas"><iframe></iframe>
        </div>
      </div>
    </section><!-- End t Section -->
  </main><!-- End #main -->


@endsection
<!-- ======= Hero Section ======= -->
