
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

{!! Form::open(['url' => 'golongan']) !!}




<div class="form-group">
        {!! Form::label('golongan', 'Golongan') !!}
        {!! Form::text('golongan', null, ['class' => 'form-control', 'placeholder' => 'Masukan Jenis Golongan']) !!}
</div>







<div class="form-group">
        {!! Form::label('level', 'Level') !!}
        {!! Form::select('level', [' ' => 'Select a Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('uraian', 'Uraian') !!}
        {!! Form::textarea('uraian', null, ['class' => 'form-control', 'placeholder' => 'Masukan Uraian']) !!}
</div>










    {!! Form::submit('Buat Data Golongan', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop