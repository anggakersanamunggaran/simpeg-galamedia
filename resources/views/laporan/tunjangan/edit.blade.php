@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {!! $pegawai->nama_pegawai !!}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model(tunjanganpegawai, ['route' => ['tunjangan.update', $laporanabsen->id], 'method' => 'PUT']) !!}




<div class="form-group">
         {{ Form::label('id_kehadiran', 'Status Kehadiran :') }}
                <select class="form-control" name="id_kehadiran" >
                    @foreach($kehadiran as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->status_kehadiran }}</option>
                    @endforeach

                </select>
</div>

<div class="form-group">
        {!! Form::label('tanggal_absen', 'Nama Pegawai') !!}
        {!! Form::date('tanggal_absen', null, ['class' => 'form-control', 'placeholder' => 'tanggal_absen']) !!}
</div>


    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop
