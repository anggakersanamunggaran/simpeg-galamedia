@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $kehadiran->id }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($kehadiran, ['route' => ['kehadiran.update', $kehadiran->id], 'method' => 'PUT']) !!}





<div class="form-group">
        {!! Form::label('status_kehadiran', 'Status Kehadiran') !!}
        {!! Form::select('status_kehadiran', [' ' => 'Status Kehadiran', 'Hadir' => 'Hadir', 'Tidak Hadir' => 'Tidak Hadir'], null, ['class' => 'form-control']) !!}
</div>


















    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop