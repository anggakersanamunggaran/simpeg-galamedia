@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $statusjabatan->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($statusjabatan, ['route' => ['statusjabatan.update', $statusjabatan->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_jabatan', 'Status Jabatan') !!}
        {!! Form::text('nama_jabatan', null, ['class' => 'form-control']) !!}
</div>




















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop