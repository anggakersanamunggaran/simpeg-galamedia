
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

{!! Form::open(['url' => 'unitkerja']) !!}




<div class="form-group">
        {!! Form::label('nama_unit_kerja', 'Nama Unit Kerja :') !!}
        {!! Form::text('nama_unit_kerja', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nama Unit Kerja']) !!}
</div>


<div class="form-group">
        {!! Form::label('eselon', 'Eselon :') !!}
        {!! Form::text('eselon', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nama Eselon']) !!}
</div>

<div class="form-group">
        {!! Form::label('parent_unit', 'Parent Unit :') !!}
        {!! Form::text('parent_unit', null, ['class' => 'form-control', 'placeholder' => 'Masukan Parent Unit']) !!}
</div>



















    {!! Form::submit('Buat Data Master Unit Kerja', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop