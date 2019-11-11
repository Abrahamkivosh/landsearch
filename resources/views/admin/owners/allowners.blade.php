@extends('layouts.admin')

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title">Land Owners Available</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Land Owned</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @if (count($owners) > 0)

                @foreach ( $owners as $owner)
                <tr>
                        <td>{{ $owner->fname }}</td>
                        <td>{{ $owner->lname }} </td>
                        <td>{{ $owner->email }}</td>
                        <td>{{ $owner->phone }}</td>
                        <td>{{ count($owner->lands) }}</td>
                        <td> <a name="" id="" class="btn btn-warning" href="#" role="button"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a name="" id="" class="btn btn-danger pl-2" href="#" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                      </tr>
                @endforeach

            @else

            @endif


            </tbody>
            <tfoot>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Land Owned</th>

            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
@stop
