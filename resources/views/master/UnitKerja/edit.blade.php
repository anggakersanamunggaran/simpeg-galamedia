@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $unitkerja->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($unitkerja, ['route' => ['unitkerja.update', $unitkerja->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_unit_kerja', 'Nama Unit Kerja') !!}
        {!! Form::text('nama_unit_kerja', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('eselon', 'Eselon'}
        {!! Form::text('eselon', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('parent_unit', 'Nama Parent Unit') !!}
        {!! Form::text('parent_unit', null, ['class' => 'form-control']) !!}
</div>




















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop