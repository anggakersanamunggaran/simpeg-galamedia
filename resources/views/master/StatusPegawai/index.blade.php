@extends('layouts.master')
@section('content')

<div class="row">



<div class="col-lg-12">




<h1>Data Master Status Pegawai</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{!! Session::get('message') !!}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>ID</td>








<td>Jenis Status Pegawai</td>











<td>Aksi</td>


















</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('statuspegawai/create') }}">Tambah Master Status Pegawai</a>




<tbody>
    @foreach($statuspegawai as $value)



<tr>


<td>{{ $value->id }}</td>






<td>{{ $value->nama_status }}</td>



















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
               

                <a class="btn btn-small btn-warning" href="{{ URL('statuspegawai/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'statuspegawai/' . $value->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

</td>



</tr>



    @endforeach
</tbody>



</table>




</div>



</div>



@stop