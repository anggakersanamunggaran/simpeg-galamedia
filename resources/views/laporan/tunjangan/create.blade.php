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

{!! Form::open(['url' => 'tunjangan']) !!}





<div class="form-group">
         {{ Form::label('id_pegawai', 'Nama Pegawai :') }}
                <select class="form-control" name="id_pegawai" >

                        <option value='{{ $pegawai->id }}'>{{ $pegawai->nama_pegawai }}</option>


                </select>
</div>




<div class="form-group">
         {{ Form::label('id_kehadiran', 'Status Kehadiran :') }}
                <select class="form-control" name="id_kehadiran" >
                    @foreach($kehadiran as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->status_kehadiran }}</option>
                    @endforeach

                </select>
</div>

<div class="form-group">
        {!! Form::label('tanggal_absen', 'Tanggal Absen :') !!}
        {!! Form::date('tanggal_absen', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Absensi']) !!}
</div>









    {!! Form::submit('Buat Laporan Tunjangan' , ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop
