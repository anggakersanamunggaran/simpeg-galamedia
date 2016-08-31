@extends('layouts.master')
@section('content')

<?php
use Carbon\Carbon;
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Absen {{ $pegawai->nama_pegawai }} </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                               {{--  */
                                        $monthName = date("F", mktime(0, 0, 0, Carbon::now()->month, 10));
                                       /* --}}
                           Table Data Pegawai Per {!!  $monthName !!}
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">



<h1>Laporan Data Absen Dan Tunjangan</h1>

<h3>Uang Tunjangan {{ $pegawai->tunjangan_makan + $pegawai->tunjangan_transport }}</h3>

<p>Total Tunjangan :Rp {{ $count_total * ($pegawai->tunjangan_makan + $pegawai->tunjangan_transport) }}</p>

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-success">{{ Session::get('message') }}</div>



@endif



<a class="btn btn-small btn-success" href="{{ URL('tunjangan/' . $pegawai->id . '/create'  ) }}">Tambah Data Laporan Absen</a>


<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">



<thead>



<tr>











<td>Absen</td>

<td>Tanggal</td>

<td>Aksi</td>





</tr>



</thead>






<tbody>


<tr>

 @foreach($pegawai->kehadiran() as $value)
@if(Carbon::parse($value->pivot->tanggal_absen)->format('m') ===  Carbon::now()->format('m'))

<td>{!! $value->status_kehadiran !!}</td>

<td>{!! date('M j, Y ', strtotime($value->pivot->tanggal_absen))  !!}</td>
















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>


                <a class="btn btn-small btn-warning" href="{{ URL('tunjangan/' . $value->pivot->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'tunjangan/' . $value->pivot->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::button('Hapus Data', ['class' => 'btn btn-danger','data-toggle' => 'modal','data-target'=>'#confirmDelete']) !!}
                {!! Form::close() !!}

                 @include('deleteform.modal')
</td>



</tr>


@endif
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
