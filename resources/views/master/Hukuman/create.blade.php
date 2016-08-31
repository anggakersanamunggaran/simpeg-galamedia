
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

{!! Form::open(['url' => 'hukuman']) !!}




<div class="form-group">
        {!! Form::label('nama_hukuman', 'Jenis Hukuman') !!}
        {!! Form::text('nama_hukuman', null, ['class' => 'form-control', 'placeholder' => 'Masukan Jenis Hukuman']) !!}
</div>















    {!! Form::submit('Buat Data Hukuman', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop