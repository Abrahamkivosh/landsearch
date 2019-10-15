@extends('layouts.dashboard')

@section('content')
   <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                My land search History
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Title deed</th>
                            <th scope="col" class="text-center">Plot number</th>
                            <th scope="col" class="text-center">Size</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Owner</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($search) > 0 )

                        @foreach ($search as $key => $item)
                            <tr>
                            <th class="align-middle text-center" scope="row">{{ $key + 1 }}</th>
                            <td class="align-middle text-center">{{ $item ->titleDeed }}</td>
                            <td class="align-middle text-center">{{ $item->plotNumber }}</td>
                            <td class="align-middle text-center">{{ $item->width ." by ". $item->length }}</td>
                            <td class="align-middle text-center">
                                    @if ($item->landprofile == null )

                                    @else
                                        {{ $item->landprofile->status }}
                                    @endif
                            </td>
                            <td class="align-middle text-center">{{ $item->landowner->fname ." ". $item->landowner->lname}}</td>
                            <td class="align-middle text-center">
                                <a class=" btn btn-outline-primary" href="/history/{{ Auth()->User()->id }}/{{ $item->id }}">View More</a>
                            </td>
                        </tr>

                        @endforeach

                        @else

                        @endif


                    </tbody>
                </table>
            </div>


        </div>
    </div>


@stop
