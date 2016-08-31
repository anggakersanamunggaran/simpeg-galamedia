@extends('layouts.master')
@section('content')

<div class="row">



<div class="col-lg-12">




<h1>Data Master Kehadiran</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{{ Session::get('message') }}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>ID</td>








<td>Status Kehadiran</td>








<td>Aksi</td>


















</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('kehadiran/create') }}">Tambah Data Kehadiran</a>




<tbody>
    @foreach($kehadiran as $value)



<tr>


<td>{{ $value->id }}</td>






<td>{{ $value->status_kehadiran}}</td>



















            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
                	

                <a class="btn btn-small btn-warning" href="{{ URL('kehadiran/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'kehadiran/' . $value->id, 'class' => 'pull-right']) !!}
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