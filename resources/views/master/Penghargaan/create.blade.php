
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

{!! Form::open(['url' => 'penghargaan']) !!}




<div class="form-group">
        {!! Form::label('nama_penghargaan', 'Jenis Penghargaan') !!}
        {!! Form::text('nama_penghargaan', null, ['class' => 'form-control', 'placeholder' => 'Masukan Jenis Penghargaan']) !!}
</div>


















    {!! Form::submit('Buat Data Master Penghargaan', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop