@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $satuankerja->nama_satuan_kerja }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($satuankerja, ['route' => ['satuankerja.update', $satuankerja->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('satuan_kerja', 'Satuan Kerja') !!}
        {!! Form::text('satuan_kerja', null, ['class' => 'form-control']) !!}
</div>















<div class="form-group">
        {!! Form::label('parent_unit', 'Parent Unit') !!}
        {!! Form::select('parent_unit', [' ' => 'Select a Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>





    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop