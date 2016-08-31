@extends('layouts.master')

@section('content')

<div class="row">



<div class="col-lg-12">




<h1>Data Master Satuan Kerja</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{{ Session::get('message') }}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>Nama Satuan Kerja</td>




<td>Parent Unit</td>





<td>Aksi</td>





</tr>



</thead>

<a class="btn btn-small btn-success" href="{{ URL('satuankerja/create') }}">Tambah Data Master Satuan Kerja</a>




<tbody>
    @foreach($satuankerja as $value)



<tr>


<td>{{ $value->nama_satuan_kerja }}</td>





<td>{{ $value->parent_unit }}</td>












            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
                <a class="btn btn-small btn-success" href="{{ URL('satuankerja/' . $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('satuankerja/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'satuankerja/' . $value->id, 'class' => 'pull-right']) !!}
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