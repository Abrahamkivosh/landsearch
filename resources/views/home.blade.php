@extends('layouts.dashboard')
@section('content')
   <div class="container-fluid">
            <div class="row font-1">
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"><i class="material-icons align-middle text-muted md-18 text-capitalize ">content_paste</i> Number of search</h5>
                        <div class="text-primary ml-auto">{{ count(Auth()->User()->lands)  }}</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"> Blogs avilable</h5>
                        <div class="text-primary ml-auto">129</div>
                        <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"> Past 30 Days</h5>
                        <div class="text-primary ml-auto">545</div>
                        <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                    </div>
                </div>
            </div>


            <div class=" border card">
                <div class=" bg-info card-header">
                    Land Search
                </div>
                <div class="card-body">
                    <form action="{{ route('searchLand') }}" method="get">
                        @csrf
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="">TITLE DEED</label>
                          <input type="text" name="titleDeed" id="" class="form-control" placeholder="Plot title deed" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Plot title deed number</small>
                        </div>
                        <div class=" form-group" >
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


                        <div class="card">
                            <div class="card-header bg-info">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="card-title ">Your land search results</div>
                                    </div>
                                    <div class="col-md-8 d-flex justify-content-md-end">
                                        <div class="dropdown mr-2">
                                            <button class="btn btn-white dropdown-toggle" type="button" id="sortOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">TitleDeed</a>
                                                <a class="dropdown-item" href="#">Plot Number</a>
                                                <a class="dropdown-item" href="#">Size</a>
                                            </div>
                                        </div>
                                        <div class="dropdown mr-4">
                                            <button class="btn btn-white dropdown-toggle" type="button" id="filterOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Filter
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="filterOrdersDropdown">
                                                <a class="dropdown-item" href="#">TitleDeed</a>
                                                <a class="dropdown-item" href="#">Plot Number</a>
                                                <a class="dropdown-item" href="#">Size</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table m-0 border-aqua table-striped ">
                                    <thead>
                                        <tr class="bg-fade">
                                            <th style="width: 130px;">Plot Number</th>
                                            <th style="width: 130px;">Title Deed</th>


                                            <th style="width: 140px;">Size</th>
                                            <th style="width: 100px">Status</th>
                                            <th style="width: 200px" >Land Owner</th>
                                            <th>Take Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @if (count($search) > 0)
                                        @foreach ($search as $item)
                                        <tr>
                                                <td class="align-middle">{{ $item->titleDeed }}</td>
                                                <td class="align-middle">
                                                        {{ $item->plotNumber }}

                                                </td>

                                                <td class="align-middle">
                                                    <a href="#"> {{ $item->width ." by ". $item->length }} </a>
                                                </td>
                                                <td class="align-middle">
                                                        @if ($item->landprofile == null )
                                                        "N/A"
                                                        @else
                                                            {{ $item->landprofile->status }}
                                                        @endif
                                                </td>
                                                <td class="align-middle">
                                                    <div class=" h3 text text-capitalize">{{ $item->landowner->fname ." ". $item->landowner->lname}}</div>
                                                </td>
                                                <td class="align-middle" style="width:40px">
                                                    <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons md-18 align-middle">more_vert</i>
                                                        </a>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="/history">
                                                            <i class="material-icons md-14 align-middle">assignment</i>
                                                            <span class="align-middle">View More</span>
                                                        </a>

                                                        <form action="{{ route('storeSearch',Auth()->User()->id) }}" class="dropdown-item" enctype="multipart/form-data" method="post">
                                                            @method("POST")
                                                            <i class="material-icons md-14 align-middle">content_copy</i>
                                                            @csrf
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="land_id" value="{{ $item->id }}">
                                                            <button type="submit"  class="align-middle display-none">Save search</button>
                                                        </form>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">
                                                            <i class="material-icons md-14 align-middle">delete</i>
                                                            <span class="align-middle">Delete</span>
                                                        </a>
                                                    </div>
                                                </td>
                                        </tr>

                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="3" class=" text text-info L1" >Please make a search</td>
                                        </tr>

                                        @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
