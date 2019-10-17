@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="lead">
                    <div class="card">
                        <div class="card-header">
                            Title deed : <strong>{{ $land->titleDeed }}</strong>

                        </div>
                        <div class="card-body">
                                <h5 class="card-title">
                            Plot Number : <strong>{{ $land->plotNumber }}</strong>
                            </h5>
                            <p class="card-text">
                                <div class="col-12 d-flex ">
                                    <div class="col-6">
                                        <ul class="list-group">
                                            <li class="list-group-item active">Land Profile</li>
                                            <li class="list-group-item " > Land Size : <strong> <em>{{ $land->width ." by ". $land->length }}</em> </strong>  </li>
                                            <li>
                                                    @if ($land->landprofile == null )

                                                    @else
                                                        <ul class="list-group">
                                                            <li class="list-group-item ">Status : {{ $land->landprofile->status }}</li>
                                                            <li class="list-group-item ">{{ $land->landprofile->encumbrance }}</li>
                                                        </ul>
                                                    @endif
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-6">
                                            <ul class="list-group">
                                                <li class="list-group-item active">Land Owner</li>
                                                <li class="list-group-item ">{{ $land->landowner->fname ." ".$land->landowner->lname  }}</li>
                                                <li class="list-group-item " >{{ "National ID : ". $land->landowner->nationalId }}</li>
                                                <li class="list-group-item " >{{ "Email : ". $land->landowner->email }}</li>
                                                <li class="list-group-item " >{{ "Phone : ". $land->landowner->phone }}</li>
                                            </ul>
                                        </div>

                                </div>
                            </p>

                        </div>
                        <div class="card-footer">
                            <div>
                                <a class=" btn btn-primary" href="/lands"> <i class="fa fa-fast-backward" aria-hidden="true"> Back </i> </a>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
@stop
