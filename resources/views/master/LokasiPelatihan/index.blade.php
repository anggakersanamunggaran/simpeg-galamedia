@extends('layouts.master')
@section('content')

<div class="row">



<div class="col-lg-12">




<h1>Data Master Lokasi Pelatihan</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{{ Session::get('message') }}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>ID</td>








<td>Nama Lokasi</td>


<td>Level</td>








<td>Aksi</td>


















</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('lokasipelatihan/create') }}">Tambah Master Lokasi Pelatihan</a>




<tbody>
    @foreach($lokasipelatihan as $value)



<tr>


<td>{{ $value->id }}</td>






<td>{{ $value->nama_pelatihan }}</td>



<td>{{ $value->level }}</td>















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
                <a class="btn btn-small btn-success" href="{{ URL('lokasipelatihan/' . $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('lokasipelatihan/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'lokasipelatihan/' . $value->id, 'class' => 'pull-right']) !!}
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