@extends('layouts.master')
@section('content')
{{--  */
use Carbon\Carbon;
  /* --}}
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Table Data Keluarga Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-success">{{ Session::get('message') }}</div>



@endif


<a class="btn btn-small btn-success" href="{{ URL('datakeluarga/create') }}">Tambah Data Keluarga Pegawai</a>


<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">



<thead>



<tr>


 <th width="50">No</th>









<td>Nama Pegawai</td>

<td>Jumlah Anggota Keluarga</td>


<td>Aksi</td>


















</tr>



</thead>


<br>

<tbody>

   {{--  */$no=1/* --}}
    @foreach($pegawais as $pegawai )


<tr>

 <td>{{$no}}</td>

<td>{{ $pegawai->pegawai->nama_pegawai }}</td>

<td>{{ $pegawai->jumlah_anggota }}</td>




            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
           <a class="btn btn-small btn-success" href="{{ URL('datakeluarga/' . $pegawai->id ) }}">Detail</a>

           {!! Form::open(['url' => 'datakeluarga/' . $pegawai->id, 'class' => 'pull-right']) !!}
               {!! Form::hidden('_method', 'DELETE') !!}
               {!! Form::button('Hapus Data', ['class' => 'btn btn-danger','data-toggle' => 'modal','data-target'=>'#confirmDelete']) !!}
           {!! Form::close() !!}

            @include('deleteform.modal')

</td>



</tr>
  {{--  */$no++/* --}}
@endforeach


</tbody>




</table>



</div>



</div>

  <script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                responsive: true
        });
    });
    </script>


@stop
