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
                           Table Laporan Absen Pegawai
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

<td>Total Kehadiran Bulan ini</td>

<td>Total Tidak Masuk Bulan ini</td>

<td>Jabatan</td>

<td>Bidang Kerja</td>

<td>Grade</td>

<td>Masa Kerja</td>


<td>Aksi</td>


















</tr>



</thead>


<br>

<tbody>

   {{--  */$no=1/* --}}
    @foreach($pegawais as $pegawai )


<tr>

 <td>{{$no}}</td>

<td>{{ $pegawai->nip }}</td>






<td>{{ $pegawai->nama_pegawai }}</td>

{{--  */$tidakhadir=1/* --}}
{{--  */$totalhadir=1/* --}}
    @foreach($pegawai->kehadiran() as $hadir)

      @if(Carbon::parse($hadir->pivot->tanggal_absen)->format('m') ===  Carbon::now()->format('m'))
        @if($hadir->pivot->id_kehadiran === 1)
          {{--  */$kehadiran=$totalhadir/* --}}
          {{--  */$totalhadir++/* --}}
        @else
          {{--  */$ketidakhadiran=$tidakhadir/* --}}
          {{--  */$tidakhadir++/* --}}
        @endif
      @endif
    {{--  */$kehadiran/* --}}
    {{--  */$ketidakhadiran/* --}}
    @endforeach

<td>{{ $kehadiran }}</td>

<td>{{ $ketidakhadiran }}</td>

<td>{{ $pegawai->jabatan->nama_jabatan }}</td>

<td>{{ $pegawai->satuankerja->nama_satuan_kerja }}</td>

<td>{{ $pegawai->golongan->golongan }}</td>

{{--  */
  $hari = Carbon::parse($pegawai->tanggal_pengangkatan)->format('d');
  $tahun = Carbon::parse($pegawai->tanggal_pengangkatan)->format('Y');
  $bulan = Carbon::parse($pegawai->tanggal_pengangkatan)->format('m');
  $waktu = Carbon::createFromDate($tahun,$bulan,$hari)->diff(Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')
    /* --}}
<td>{!! $waktu  !!}</td>















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
           <a class="btn btn-small btn-success" href="{{ URL('tunjangan/' . $pegawai->id .'/index' ) }}">Lihat Absen Bulan ini</a>

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
