
@extends('layouts.admin')
@section('page')
<section class="content-header">
        <h1>
          Land Detials
          <small>All Land</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
@endsection

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title">Land Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class=" text-center table table-bordered table-striped">
            <thead>
            <tr>
              <th>Title deed</th>
              <th>Plot number</th>
              <th>Land Size</th>
              <th>Owner</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>


            @if (count($land)>0)
                @foreach ($land as $la)
                <tr class=" text-center" >
                        <td>{{ $la->titleDeed }}</td>
                        <td>{{ $la->plotNumber }}
                        </td>
                        <td>{{ $la->width ." by ".$la->length }}</td>
                        <td>{{ $la->landowner->fname }}</td>
                        <td>{{ $la->status }}</td>
                </tr>
                @endforeach
            @else

            @endif


            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
    </div>

    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
            $(function () {
              $('#example1').DataTable()
              $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
              })
            })
          </script>

 @stop

