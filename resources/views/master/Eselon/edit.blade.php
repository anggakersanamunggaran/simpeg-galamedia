@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $eselon->nama_eselon }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($eselon, ['route' => ['eselon.update', $eselon->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama_eselon', 'Nama Eselon') !!}
        {!! Form::text('nama_eselon', null, ['class' => 'form-control']) !!}
</div>















<div class="form-group">
        {!! Form::label('level', 'Level') !!}
        {!! Form::select('level', [' ' => 'Select a Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>





    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop