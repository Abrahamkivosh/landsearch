
@extends('layouts.cliantapp')


@section('top')
@include('includes.homeslide')
@stop

@section('content')
<div class="feature">
    <div class="container">
      <div class="text-center">
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i class="fa fa-book"></i>
            <h2>Our History</h2>
            <p>The National Land Commission was established under Article 67 of the Constitution to handle land issues...</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-laptop"></i>
            <h2>Our Mandate</h2>
            <p>The main function of TLC is to manage public land on behalf of the Kiambu county government.</p>
          </div>
        </div>
        <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i class="fa fa-book"></i>
            <h2>Commissioners</h2>
            <p>National Land Commission is led by an able team of commissioners led by our Chairman Prof. Swazuri A. Muhammad.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-cloud"></i>
            <h2>Our Goal</h2>
            <p>Provide equitable services to our clients.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Services</h2>
        <img src="{{ ('asset/images/sear.jpg')}}" class="img-responsive" />
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2>Land Search Services</h2>
        </div><h4>
        <p>User registration</p>
            <p>Log in to the system</p>
        <p>Search for the land records using the correct credentials</p>
    <p>Print the land records pdf format</p></h4>
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2>Land Registration Services</h2>
        <p>

            <h4>Registration of documents:
                <p>Transfers, Charges.
                    Discharges, Succession, correction of names,
                     mutations and partition, Power of attorney, Leases and Caution.</p><br />
           <p> Issuance of Land Titles for all categories of land registered under the various land registration statutes;</p>
            <p>Issuance of Land Titles Searches;</p>
            <p> Determination of land boundary disputes;</p>
             <p>Preparation of provisional and replacement titles;</p>
            <p>Preparation and issuance of Certificates of Incorporation</p>
            <p>Assessment and stamping of instruments with the requisite Stamp Duty</p>
            <p>Inspection and control of Duty Franking Machines;</p>
            <p>Processing conversion of Titles from one land statute to another.</p></h4>


      </div>
    </div>
  </div>

  <div class="lates">
    <div class="container">
      <div class="text-center">
        <h2>Latest News</h2>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="{{ asset('asset/images/news.jpg') }}" class="img-responsive" />
        <h3>Avoid Land transactions outside the Ministry of Lands, CS Karoney tells Kenyans  </h3>
        <p>	Lands Cabinet Secretary, Farida Karoney has advised members of the public to seek Government services within the right offices.

            The CS noted that land owners had fallen victims of conmen and land brokers which has led to loss of property and land ownership documents.

            She said the Ministry of Lands is committed to cleaning the system to ensure services in all land registries across the country is being conducted in a transparent and efficient manner.
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <img src="{{ asset('asset/images/news2.jpg') }}" class="img-responsive" />
        <h3>Digitization of Records to ease property registration process, says Lands CS Karoney</h3>
        <p>	Lands Cabinet Secretary Farida Karoney has assured Kenyans that the ongoing digitization of records at the Ministry of Lands will ease property registration process.

            Karoney addressing a stakeholder’s forum at a Nairobi Hotel yesterday said all security measures of ensuring safety of the documents will be put in place and members of the public should trust the system.

            She noted that the Ministry of Lands started testing a process of making it easier to register land property in Nairobi County from 73 days to 12 days and the system has proved it is possible.
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <img src="{{ asset('asset/images/news3.jpg') }}" class="img-responsive" />
        <h3>Public NOtice</h3>
        <p>Nairobi Friday 26th October 2018… Inauguration of the Physical Planners Registration Board…The National Director of Physical Planning, Mr. Augustine Masinde last month opened the inaugural Physical Planners Registration Board workshop at a Nairobi hotel. The workshop drew planners from public and private sectors across the country.
        </p>
      </div>
    </div>
  </div>

  <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Our Partners</h2>
        <p> The Commission has collaborated with the Grassroots Organizations.

            Operating Together in Sisterhood (GROOTS) Kenya Chapter in its efforts to have communities safeguard their Public land resources.
            GROOTS-Kenya has already undertaken community led participatory GIS mapping of Public land in Thika Kiambu County </p>
      </div>

      <div class="partners">
        <ul>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ asset('asset/images/partners/partner1.png') }}"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{ asset('asset/images/partners/partner2.png') }}"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{ asset('asset/images/partners/partner3.png') }}"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{ asset('asset/images/partners/partner4.png') }}"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{ asset('asset/images/partners/partner5.png') }}"></a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#partner-->

  <section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="pull-left">
              <i class="fa fa-phone"></i>
            </div>
            <div class="media-body">
              <h2>Have a question or need consultation services?</h2>
              <p>We are just a phone call away. You can reach us via +254 000 00 00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

@stop
