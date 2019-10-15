
@extends('layouts.cliantapp')

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
      <h3>Our company information</h3>
      <hr>
      <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/7.jpg" class="img-responsive">
        <h4>We Create, Design and Make it Real</h4>
        <p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nulla risus, vel tincidunt
          turpis. Aliquam a nulla mi, placerat blandit eros. </p>
        <p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
      </div>
      <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="skill">
          <h2>Vision</h2>
          <p>“To be a globally competitive organization in sustainable land management”.</p>


            </div>
          </div>
          <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="skill">
                  <h2>Mission</h2>
                  <p>“To facilitate improvement of the livelihood of Kenyans through efficient land administration, equitable access, secure tenure and sustainable management of land resource”.</p>



                    </div>
                  </div>
                  <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="skill">
                          <h2>OBjectives</h2>
                          <p>
                                1. Ensure accessibility, equity and sustainable management of land resource for socio-economic development
                               <br /> 2. Strengthen institutional capacity for efficient and effective service delivery
                            </p>



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

