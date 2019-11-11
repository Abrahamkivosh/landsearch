
@extends('layouts.cliantapp')

@section('top')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(asset/LAND/about.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">Welcome To <span>Thika Land Information System</span></h2>
                  <p class="animation animated-item-2"></p>We facilitate improvement of Kenyans livelihood through efficient administration, equitable access, secure tenure and sustainable management of Land resources</p>
                  {{-- <a class="btn-slide animation animated-item-3" href="/services">Read More</a> --}}
                </div>
              </div>

              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="{{ asset('asset/LAND/download(1).jpg') }}" class="img-responsive">
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>

@stop

@section('content')
<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>About Us</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
      <h3>Thika Land Ministry</h3>
      <hr>
      <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="{{ asset('asset/images/port1.jpeg') }}" class="img-responsive">
        <h4>The Land Portal Foundation believes access to information is crucial to
            achieve good land governance and to secure land rights for vulnerable people.
            We help partners to create and disseminate land governance data and information
            through linked and open data technologies.<h4>
        <p>The Ministry is headquartered at Ardhi House in community.
            This is where all National Lands matters and other concerns are handled.
            <p>The Ministry has digitized over 3 million land records and also maintains a library
                full of the filed paper records for reference. We have records dating back to 1900,</h4>
                 over 100 years old records are securely stored in both digital and paper records.</p>
                  We provide the online portal for land owners and buyers to carryout transactions
                  such as search, transfer of ownership etc.</p></h4>
      </div>
      <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="skill">
          <h2>Vision</h2>
          <p><h4>“To be a globally competitive organization in sustainable land management”.</h4></p>


            </div>
          </div>
          <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="skill">
                  <h2>Mission</h2>
                  <p><h4>“To facilitate improvement of the livelihood of Kenyans through efficient land administration, equitable access, secure tenure and sustainable management of land resource”.</h4></p>



                    </div>
                  </div>
                  <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="skill"><h4>
                          <h2>OBjectives</h2>
                          <p><h4>
                                1. Ensure accessibility, equity and sustainable management of land resource for socio-economic development
                               <br /> 2. Strengthen institutional capacity for efficient and effective service delivery
                            </h4></p>
                        </h4>
                            </div>
                          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="our-team">
    <div class="container">
      <h3>Our Team</h3>
      <div class="text-center">
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="{{ asset('asset/images/face.jpeg') }}" alt="">
          <h4>name</h4>
          <p>M Cabinet Secretary<br />

                Ministry of Lands and Physical Planning

                </p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <img src="{{ asset('asset/images/face.jpeg') }}"alt="">
          <h4>name</h4>
          <p>Chief Administrative Secretary<br />

                Ministry of Lands & Physical Planning,
                </p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
          <img src="{{ asset('asset/images/face.jpeg') }}"alt="">
          <h4>name</h4>
          <p> Principal Secretary<br />

                Ministry of Lands & Physical Planning,</p>
        </div>
      </div>
    </div>
  </div>
@stop

