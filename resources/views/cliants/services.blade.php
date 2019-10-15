
@extends('layouts.cliantapp')

@section('content')
<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Services</li>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <h3>Company Services</h3>
      <hr>
      <div class="col-md-6">
        <img src="{{ asset('asset/images/services.jpeg') }}" class="img-responsive">
        <p>The Ministry has digitized over 3 million land records and also maintains a library full of the filed paper records for reference. We have records dating back to 1900, over 100 years old records are securely stored in both digital and paper records. We provide the online portal for land owners and buyers to carryout transactions such as search, transfer of ownership etc.</p>
      </div>

      <div class="col-md-6">
        <div class="media">
          <ul>
            <li>
              <div class="media-left">
                <i class="fa fa-pencil"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Land Registration Services</h4>
                <p>Registration of documents: Transfers, Charges.</p>
                    <P>Discharges, Succession, correction of names, mutations and partition, Power of attorney, Leases and Caution.</P>
                    <P>Issuance of Land Titles for all categories of land registered under the various land registration statutes;</P>
                    <P>Issuance of Land Titles Searches;</p>
                    <p>Determination of land boundary disputes;</p>
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-book"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Land Administration services</h4>
                <p>

                        Preparation and issuance of leases</p>
                        <p>Change of User</p>
                        <p>Processing and issuance of consents</p>
                        <p>Advice to the Public

                    </p>
              </div>
            </li>
            {{-- <li>
              <div class="media-left">
                <i class="fa fa-rocket"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Survey Services</h4>
                <p>

                        Survey of general boundaries.</p>
                        <p> Processing of mutations forms.</p>
                        <p> Resolution of boundary disputes</p>
                        <p> Rim amendment/deed plan preparation.</p>
                        <p>Sale of maps and National atlas

                    </p>
              </div>
            </li> --}}
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="sub-services">
    <div class="container">
      <div class="col-md-6">
        <div class="media">
          <ul>
            <li>
              <div class="media-left">
                <i class="fa fa-pencil"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Lands Valuation Services</h4>
                <p>Valuation for stamp duty purposes</p>
                <p>VAssessment of Rent for government leasing</p>
                <p>Determination of Disputed Rent</p>
                <p>Valuation of Government owned properties on foreign mission</p>
                <p>Valuation for rating</p>
              </div>
            </li>
            {{-- <li>
              <div class="media-left">
                <i class="fa fa-book"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Survey Services</h4>
                <p>

                        Survey of general boundaries.</p>
                        <p> Processing of mutations forms.</p>
                        <p> Resolution of boundary disputes</p>
                        <p> Rim amendment/deed plan preparation.</p>
                        <p>Sale of maps and National atlas

                    </p></p>
              </div>
            </li> --}}
            <li>
              <div class="media-left">
                <i class="fa fa-rocket"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Land Search</h4>
                <p>This service helps people to be aware of the land details before making a purchase of land</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <img src="images/4.jpg" class="img-responsive">
        <h4 class="media-heading">Survey Services</h4>
        <p>

                Survey of general boundaries.</<p>
                <p> Processing of mutations forms.</p>
                <p> Resolution of boundary disputes</p>
                <p> Rim amendment/deed plan preparation.</p>
                <p>Sale of maps and National atlas

            </p>
      </div>
    </div>
  </div>

@stop

