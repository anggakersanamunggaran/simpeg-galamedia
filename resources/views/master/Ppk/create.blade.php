
@extends('layouts.master')



@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Buat Data Baru</h1>




<!-- jika terjadi error, maka akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::open(['url' => 'ppk']) !!}




<div class="form-group">
        {!! Form::label('nama_ppk', 'Nama PPK') !!}
        {!! Form::text('nama_ppk', null, ['class' => 'form-control', 'placeholder' => 'Masukan Jenis PPK']) !!}
</div>

<div class="form-group">
        {!! Form::label('parents_satuan_kerja', 'Parent Satuan Kerja') !!}
        {!! Form::text('parents_satuan_kerja', null, ['class' => 'form-control', 'placeholder' => 'Masukan Parent Satuan Kerja']) !!}
</div>


















    {!! Form::submit('Buat Data Master PPK', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop