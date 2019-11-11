@extends('layouts.admin')

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title"> Administrators Available</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>NationalID</th>
              <th>Job Title</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @if (count($clerks) > 0)

                @foreach ( $clerks as $clerk)
                <tr>
                        <td>{{ $clerk->name }}</td>
                        <td>{{ $clerk->email }}</td>
                        <td>{{ $clerk->phone }}</td>
                        <td>{{ $clerk->nationalId }}</td>
                        <td>{{ $clerk->job_title }}</td>
                        <td> <a name="" id="" class="btn btn-warning" href="#" role="button"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a onclick="deleteUser()" class="btn btn-danger pl-2" href="#" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                    </td><form id="delete"  action="{{ route('clerks.destroy',$clerk->id) }}" method="post">
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
          var result = confirm("Are you sure you want to delete this clerk?")
          if(result){

              event.preventDefault();
              document.getElementById("delete").submit();
          }else{
              alert("Thank you for keeping clerk!!")
          }

        }

    </script>
@stop
