@extends('layouts.dashboard')

@section('style')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/form.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('public/js/src/css/print-preview.css') }}" rel="stylesheet">
@stop


@section('content')
<div class="container">
    <div class="row">

<div id="form" class="card">
        <div class="card-header center text-center ">
            <title><h1>THE REPUBLIC OF KENYA</h1></title>
            <div><h2>THE LAND CONTROL ACT</h2></div>
            <div>No.3 of 2012 (Section 108)</div>
            <div>Cap. 300 Repealed</div>
            Header
        </div>
        <div class="card-body">
            <h5 class="card-title text-center text-capitalize ">CERTIFICATE  OF OFFICIAL SEARCH</h5><br />
            <p class="card-text">
                <div class=" d-flex row pl-3" >
                        <h3 class=" pr-2" >Title Number <strong>{{ $land->titleDeed }}</strong> </h3>
                        <h3 class=" pl-1">Plot Number <strong>{{ $land->plotNumber }}</strong> </h3>
                </div>
                <div>
                    <h3>Day of Search </h3>
                </div>
                <hr>
                <div class=" text text-black-50 L2 text-capitalize pb-4" >
                    were the subsisting entries on the register of the above mentioned title :
                </div>
                <div class=" blockquote page-content" >
                        <h2><strong>PART A - </strong> <em>PROPERTY SECTION (EASEMENT , ETC)</em> </h2>
                        <dl>
                            <dt><strong>Nature of the title</strong> </dt>
                            <dd>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Excepturi atque officia ipsam. Iste culpa maiores, totam maxime,
                                amet quos assumenda recusandae magni tempora quasi a qui ea.
                                Praesentium, officiis ut.</dd>
                        </dl>
                        <dt><strong>Approximate Area</strong></dt>
                        <dd><em>{{ $land->width ." by ". $land->length }}</em></dd>

                </div>
                <div>
                        <h2><strong>PART B - </strong> <em>PROPERTY SECTION </em> </h2>
                        <dl>
                                <dt>Name and Address of proprietor</dt>
                                <dd>
                                    <ul >
                                        <li >Full Name : {{ $land->landowner->fname ."  ".$land->landowner->lname }}</li>
                                        <li class=" d-flex" >
                                                <li class="pr-3" >Email : {{  $land->landowner->email }}</li>
                                                <li >Phone : {{  $land->landowner->phone }}</li>
                                        </li>
                                    </ul>
                                </dd>

                                <dt>Inhibition , Caution and restriction</dt>
                                <dd>

                                    @if ($land->landprofile == null )

                                    @else
                                        {{ $land->landprofile->status }}
                                    @endif

                                </dd>

                            </dl>


                </div>


                <div>
                        <h2><strong>PART C - </strong> <em>ENCUMBRANCES (LEASE , CHARGE ,ETC)</em> </h2>
                        <div>


                           @if ($land->landprofile == null )

                                    @else
                                        {{ $land->landprofile->encumbrance }}
                                    @endif

                        </div>

                </div>
            </p>
        </div>
        <div class="card-footer">
            <p>


                <button @click="printme" type="button" name="" id="print" class="btn btn-primary "> <i class="fa fa-print" aria-hidden="true">Print</i> </button>


                        {{-- <a href="/history/{{ $user->id }}/{{ $land->id }}/preview" id="print" class="btnprn"></a>
                            <button type="button"  class="btn btn-info">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true">
                   Generate</i>
                </button> --}}
                <a name="" id="" class="btn float-right btn-primary" href="/history/{{ Auth()->User()->id }}" role="button"> <i class="fa fa-backward" aria-hidden="true">  Back </i> </a>

            </p>
        </div>
    </div>
    </div>
</div>

@stop

@section('scripts')
    <script src="">
    </script>
@stop

