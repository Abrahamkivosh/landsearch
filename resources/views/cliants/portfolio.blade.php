
@extends('layouts.cliantapp')

@section('content')
<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Portfolio</li>
      </div>
    </div>
  </div>

  <section id="portfolio">
    <div class="container">
      <div class="center">
        <p>Programmes and Projects</p>
      </div>

      <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
        {{-- <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li> --}}
      </ul>
      <!--/#portfolio-filter-->
    </div>
    <div class="container">
      <div class="">
        <div class="portfolio-items">
          <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port1.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">National Titling Programme:</a></h3>
                  <p>The programme incorporates physical planning, preliminary survey,
                      determination of rights and interest in land, survey of individual plots,
                      publication of maps and issuance of title deeds. </p>
                  <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port2.jpeg') }}"  alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">The gendered politics of land ownership</a></h3>
                  <p>One of the fundamental resources that is essential for the development and sustenance of people in Africa is land.</p>
                  <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port3.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">National Land Information Management System:</a></h3>
                  <p>The Ministry has embarked on an ambitious program of re-engineering
                      business with a view of providing efficient and timely service. </p>
                  <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port4.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Land Adjudication Programme: </a></h3>
                  <p>To date, 2,057 adjudication sections, comprising 3,215,992 parcels and covering 8,711,449.85 Hectares have been finalized countrywide since independence..</p>
                  <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port5.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Modernization of Land Registries: </a></h3>
                  <p>TThis entail construction, renovation/refurbishment and equipping of land registries to ensure security of records.</p>
                  <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port6.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port7.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Settlement of poor landless: </a></h3>
                  <p>This entails regularization of squatter schemes and purchase of farms through Land
                      Settlement Fund to settle squatters, displaced persons and forest evictees.
                      </p>
                  <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="{{ asset('asset/images/port8.jpeg') }}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Digitization of Land Registries: </a></h3>
                  <p>he Ministry commenced on a program of automation and digitization of the land registries across
                      the country since 2014/2015 financial year with a view to ensure efficient and effective service
                       delivery that will lead to enhanced access to information, increased customer confidence,
                       reduced business timelines and enhanced revenue collection. </p>
                  <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->

@stop
