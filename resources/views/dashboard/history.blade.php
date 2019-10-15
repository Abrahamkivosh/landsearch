@extends('layouts.dashboard')

@section('content')
    {{--  <div class="card">
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
                        <tr>
                            <th class="align-middle text-center" scope="row">1</th>
                            <td class="align-middle text-center">Steven</td>
                            <td class="align-middle text-center">Short</td>
                            <td class="align-middle text-center">@steve</td>
                            <td class="align-middle text-center">@steve</td>
                            <td class="align-middle text-center">@steve</td>
                            <td class="btn btn-info align-middle text-center">View More</td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>  --}}
@foreach ($landID as $land)
   0.0321 
@endforeach

@stop
