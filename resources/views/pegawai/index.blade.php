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
                           Table Data Pegawai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-success">{{ Session::get('message') }}</div>



@endif




<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">



<thead>



<tr>


 <th width="50">No</th>

<td>NIK</td>







<td>Nama Pegawai</td>


<td>Golongan</td>




<td>Status Pegawai</td>





<td>Masa Kerja</td>


<td>Aksi</td>


















</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('pegawai/create') }}">Tambah Data Pegawai</a>
<br>

<tbody>

   {{--  */$no=1/* --}}
    @foreach($pegawais as $pegawai )


<tr>

 <td>{{$no}}</td>

<td>{{ $pegawai->nip }}</td>






<td>{{ $pegawai->nama_pegawai }}</td>





<td>{{ $pegawai->golongan->golongan}}</td>



<td>{{ $pegawai->statuspegawai->nama_status }}</td>


{{--  */
  $hari = Carbon::parse($pegawai->tanggal_pengangkatan)->format('d');
  $tahun = Carbon::parse($pegawai->tanggal_pengangkatan)->format('Y');
  $bulan = Carbon::parse($pegawai->tanggal_pengangkatan)->format('m');
  $waktu = Carbon::createFromDate($tahun,$bulan,$hari)->diff(Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')
    /* --}}
<td>{!! $waktu  !!}</td>















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>                   
						<a class="btn btn-small btn-success" href="{{ URL('pegawai/' . $pegawai->id) }}">Tampilkan Data</a>
							 <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench fa-fw"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                    	 <a href="#">

                           				 </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           <a class="btn btn-small btn-warning" href="{{ URL('pegawai/' . $pegawai->id . '/edit') }}">Ubah Data</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           {!! Form::open(['url' => 'pegawai/' . $pegawai->id, 'class' => 'pull-right']) !!}
						                   {!! Form::hidden('_method', 'DELETE') !!}
						                   {!! Form::button('Hapus Data', ['class' => 'btn btn-danger', 'data-toggle' => 'modal','data-target'=>'#confirmDelete']) !!}
						                   {!! Form::close() !!}

                                           @include('deleteform.modal')
                                        </a>
                                    </li>

                                </ul>
                            </div>




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
