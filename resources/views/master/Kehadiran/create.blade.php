
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

{!! Form::open(['url' => 'kehadiran']) !!}






<div class="form-group">
        {!! Form::label('status_kehadiran', 'Status Kehadiran') !!}
        {!! Form::select('status_kehadiran', [' ' => 'Status Kehadiran', 'Hadir' => 'Hadir', 'Tidak Hadir' => 'Tidak Hadir'], null, ['class' => 'form-control']) !!}
</div>















    {!! Form::submit('Buat Data Kehadiran', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop