@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
                <div class=" lead">
                        <div class="card text-left">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title">All Land Infromation
                                <span>
                                    <form action="" class="d-flex" method="get">
                                        @csrf
                                         {{ csrf_field() }}

                                            <div class="form-group m-0">
                                                    <div class="input-group input-group--inline">
                                                        <div class="input-group-addon">
                                                            <i class="material-icons">search</i>
                                                        </div>
                                                        <input type="search" class="form-control" title="Please Use title deed number" name="search" placeholder="Search For specific land records">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary display-none d-inline hidden"><i class="fa fa-search-minus" aria-hidden="true">Search</i></button>
                                    </form>
                                </span>
                            </h4>
                            <p class="card-text">
                                    <table class="table table-light table-striped table-bordered">
                                            <thead class="">
                                                    <tr>
                                                            <th></th>
                                                            <th>Title Deed</th>
                                                            <th>Plot Number</th>
                                                            <th>size</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                            </thead>
                                            <tbody>


                                               @if (count($lands) > 0)
                                               @foreach ($lands as $key => $land)
                                               <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                       <td>{{ $land->titleDeed }}</td>
                                                       <td>{{ $land->plotNumber }}</td>
                                                       <td>{{ $land->width ." by ". $land->length }}</td>
                                                       <td> @if ($land->landprofile == null )

                                                            @else
                                                                {{ $land->landprofile->status }}
                                                            @endif
                                                        </td>
                                                       <td>
                                                           <a class=" btn btn-outline-primary-dark" href="/lands/{{ $land->id }}">View More</a>
                                                       </td>
                                                </tr>
                                               @endforeach
                                               @else
                                               <tr>
                                                   <td colspan="6" class=" h2 text-decoration-none text-danger">
                                                       No record found matching your search
                                                       <div class=" text text-info" >
                                                           Try Again
                                                       </div>
                                                   </td>
                                               </tr>

                                               @endif


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Title Deed</th>
                                                    <th>Plot Number</th>
                                                    <th>size</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                            </p>
                          </div>
                        </div>
                    </div>
        </div>
    </div>
@stop
