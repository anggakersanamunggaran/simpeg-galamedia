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

{!! Form::open(['url' => 'datakeluarga']) !!}





<div class="form-group">
         {{ Form::label('id_pegawai', 'Nama Pegawai :') }}
                <select class="form-control" name="id_pegawai" >
                      @foreach($pegawai as $tag)
                        @if($tag->status_marital ==="Belum Menikah")

                        @else
                            <option value='{{ $tag->id }}'>{{ $tag->nama_pegawai }}
                        (  {{ $tag->status_marital }} )</option>
                        @endif


                        @endforeach

                </select>

</div>



<div class="form-group">
        {!! Form::label('jumlah_anggota', 'Jumlah Anggota Keluarga') !!}
        {!! Form::number('jumlah_anggota', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Anggota Keluarga']) !!}
</div>

<div class="form-group">
        {!! Form::label('tanggal_nikah', 'Tanggal Menikah :') !!}
        {!! Form::date('tanggal_nikah', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Absensi']) !!}
</div>

<div class="form-group">
        {!! Form::label('tanggal_cerai_meninggal', 'Tanggal Cerai atau Meninggal :') !!}
        {!! Form::date('tanggal_cerai_meninggal', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Cerai Atau Meninggal']) !!}
</div>

<div class="form-group">
        {!! Form::label('nama_anggota_keluarga', 'Nama Anggota Kelaurga') !!}
        {!! Form::textarea('nama_anggota_keluarga', null, ['class' => 'form-control', 'placeholder' => 'Masukan Anggota Keluarga']) !!}
</div>











    {!! Form::submit('Buat Laporan Data Keluarga' , ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop
