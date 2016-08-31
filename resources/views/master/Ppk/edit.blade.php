@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $ppk->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($ppk, ['route' => ['ppk.update', $ppk->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_ppk', 'Nama PPK') !!}
        {!! Form::text('nama_ppk', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('parents_satuan_kerja', 'Parent Satuan Kerja') !!}
        {!! Form::text('parents_satuan_kerja', null, ['class' => 'form-control']) !!}
</div>



















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop