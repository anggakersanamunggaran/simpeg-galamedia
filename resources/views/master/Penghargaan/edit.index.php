@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $penghargaan->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($penghargaan, ['route' => ['penghargaan.update', $penghargaan->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_penghargaan', 'Nama Penghargaan') !!}
        {!! Form::text('nama_penghargaan', null, ['class' => 'form-control']) !!}
</div>



















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop