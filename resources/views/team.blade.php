@extends('layouts.layout-web')

@section('title', 'Team')

@section('main')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>TRI GUNTORO</h4>
                <span></span>
                <p>FOTOGRAFER</p>
                <div class="social">
                  <a href="https://www.instagram.com/tr.guntoro/"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>KHRESNA WIBI</h4>
                <span>VIDEOGRAFER</span>
                <p></p>
                <div class="social">
                  <a href="https://www.instagram.com/khresnawibi/"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>MOHANDES SANTIKO</h4>
                <span>EDITOR</span>
                <p> </p>
                <div class="social">
                  <a href="https://www.instagram.com/mohandes_san/"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

@endsection
<!-- ======= Hero Section ======= -->
