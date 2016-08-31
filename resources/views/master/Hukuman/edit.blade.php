@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $hukuman->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($hukuman, ['route' => ['hukuman.update', $hukuman->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_hukuman', 'Hukuman') !!}
        {!! Form::text('nama_hukuman', null, ['class' => 'form-control']) !!}
</div>


















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop