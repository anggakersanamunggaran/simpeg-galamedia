
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

{!! Form::open(['url' => 'statuspegawai']) !!}




<div class="form-group">
        {!! Form::label('nama_status', 'Status Pegawai') !!}
        {!! Form::text('nama_status', null, ['class' => 'form-control', 'placeholder' => 'Masukan Status Pegawai']) !!}
</div>




















    {!! Form::submit('Buat Data Master Status Pegawai', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop