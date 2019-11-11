@extends('layouts.admin')

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title"> clients Available</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Client Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>KRA PIN</th>
              <th>Search Made</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @if (count($clients) > 0)

                @foreach ( $clients as $client)
                <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->krapin }}</td>
                        <td class=" text text-bold" >{{ count($client->lands) }}</td>
                        <td> <a name="" id="" class="btn btn-warning" href="#" role="button"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a onclick="deleteUser()" class="btn btn-danger pl-2" href="#" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                    </td><form id="delete"  action="{{ route('clients.destroy',$client->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            {{ csrf_field() }}
                        </form>
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

      <script>
        function deleteUser(){
          var result = confirm("Are you sure you want to delete this Client?")
          if(result){

              event.preventDefault();
              document.getElementById("delete").submit();
          }else{
              alert("Thank you for keeping client!!")
          }

        }

    </script>
@stop
