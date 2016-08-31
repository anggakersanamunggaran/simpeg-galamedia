@extends('layouts.master')
@section('content')

<div class="row">



<div class="col-lg-12">




<h1>Data Master Eselon</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{{ Session::get('message') }}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>Nama Eselon</td>




<td>Level</td>





<td>Aksi</td>





</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('eselon/create') }}">Tambah Data Master Eselon</a>




<tbody>
    @foreach($eselon as $value)



<tr>


<td>{{ $value->nama_eselon }}</td>





<td>{{ $value->level }}</td>












            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
                <a class="btn btn-small btn-success" href="{{ URL('eselon/' . $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('eselon/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'eselon/' . $value->id, 'class' => 'pull-right']) !!}
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