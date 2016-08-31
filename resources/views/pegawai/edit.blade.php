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

{!! Form::model($pegawai, ['route' => ['pegawai.update', $pegawai->id], 'method' => 'PUT', 'files' => true]) !!}




<div class="form-group">
        {!! Form::label('nip', 'NIK') !!}
        {!! Form::number('nip', null, ['class' => 'form-control', 'placeholder' => 'Masukan NIK Pegawai']) !!}
</div>







<div class="form-group">
        {!! Form::label('nama_pegawai', 'Nama Pegawai') !!}
        {!! Form::text('nama_pegawai', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nama Pegawai']) !!}
</div>

<div class="form-group">
         {{ Form::label('id_golongan', 'Grade:') }}
                <select class="form-control" name="id_golongan" >
                    @foreach($golongan as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->golongan }}</option>
                    @endforeach

                </select>
</div>

<div class="form-group">
         {{ Form::label('id_status_jabatan', 'Status Jabatan:') }}
                <select class="form-control" name="id_status_jabatan" >
                    @foreach($statusjabatan as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->nama_jabatan }}</option>
                    @endforeach

                </select>
</div>

<div class="form-group">
         {{ Form::label('id_jabatan', 'Nama Jabatan:') }}
                <select class="form-control" name="id_jabatan" >
                    @foreach($jabatan as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->nama_jabatan }}</option>
                    @endforeach

                </select>
</div>



<div class="form-group">
         {{ Form::label('id_satuan_kerja', 'Bidang:') }}
                <select class="form-control" name="id_satuan_kerja" >
                    @foreach($satuan_kerja as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->nama_satuan_kerja }}</option>
                    @endforeach

                </select>
</div>










<div class="form-group">
         {!! Form::label('id_status_pegawai', 'Status Pegawai:') !!}
                <select class="form-control" name="id_status_pegawai" >
                    @foreach($statuspegawai as $tag)
                        <option value='{!! $tag->id !!}'>{!! $tag->nama_status !!}</option>
                    @endforeach

                </select>
</div>

<div class="form-group">
        {!! Form::label('gaji_pokok', 'Gaji Pokok Pegawai :') !!}
        {!! Form::number('gaji_pokok', null, ['class' => 'form-control', 'placeholder' => 'Input Gaji Pokok Pegawai']) !!}
</div>

<div class="form-group">
        {!! Form::label('tunjangan_makan', 'Tunjangan Makan :') !!}
        {!! Form::number('tunjangan_makan', null, ['class' => 'form-control', 'placeholder' => 'Input Tunjangan Makan']) !!}
</div>


<div class="form-group">
        {!! Form::label('tunjangan_transport', 'Tunjangan Transport :') !!}
        {!! Form::number('tunjangan_transport', null, ['class' => 'form-control', 'placeholder' => 'Input Tunjangan Transport']) !!}
</div>

<div class="form-group">
        {!! Form::label('no_kartu_pegawai', 'Nomor Kartu Pegawai') !!}
        {!! Form::text('no_kartu_pegawai', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nomor Kartu Pegawai']) !!}
</div>


 <div class="form-group">
        {!! Form::label('nomor_telepon', 'Nomor Telepon Pegawai :') !!}
        {!! Form::number('nomor_telepon', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nomor Telepon Pegawai']) !!}
</div>

<div class="form-group">
        {!! Form::label('email', 'Email Pegawai') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Masukan email pegawai']) !!}
</div>

<div class="form-group">
        {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'placeholder' => 'Masukan Tempat Lahir']) !!}
</div>


<div class="form-group">
        {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
        {!! Form::date('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Masukan Tanggal Lahir']) !!}
</div>


<div class="form-group">
        {!! Form::label('status_marital', 'Status Marital') !!}
        {!! Form::select('status_marital', array('Menikah'=>'Menikah' , 'Belum Menikah'=>'Belum Menikah' , 'Janda'=>'Janda' , 'Duda' =>'Duda')
        ,null, ['class' => 'form-control', 'placeholder'=>'Pilih Status']) !!}
</div>

<div class="form-group">
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin') !!}
        {!! Form::select('jenis_kelamin',
        array('Laki-Laki'=>'Laki-Laki' , 'Perempuan'=>'Perempuan') ,null, ['class' => 'form-control','placeholder'=>'Tentukan Jenis Kelamin']) !!}
</div>

<div class="form-group">
        {!! Form::label('agama', 'Agama') !!}
        {!! Form::select('agama', array('Islam'=>'Islam', 'Protestan'=>'Protestan','Katolik'=>'Katolik' ,'Hindu'=>'Hindu','Budha'=>'Budha' ,
        'Lainnya'=>'Lainnya' ), null, ['placeholder'=>'Pilih Agama', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('usia', 'Usia Pegawai') !!}
        {!! Form::number('usia', null, ['class' => 'form-control', 'placeholder' => 'Masukan usia pegawai']) !!}
</div>



<div class="form-group">
        {!! Form::label('tanggal_pengangkatan', 'Tanggal Pengangkatan Pegawai') !!}
        {!! Form::date('tanggal_pengangkatan', null, ['class' => 'form-control', 'placeholder' => 'Masukan Tanggal Pengangkatan Pegawai']) !!}
</div>

<div class="form-group">
        {!! Form::label('alamat', 'Alamat Pegawai') !!}
        {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Masukan alamat pegawai']) !!}
</div>


<div class="form-group">
        {!! Form::label('status_pegawai_pangkat', 'Status Pegawai Pangkat') !!}
        {!! Form::text('status_pegawai_pangkat', null, ['class' => 'form-control', 'placeholder' => 'Masukan Status Pegawai Pangkat']) !!}
</div>










<div class="form-group">
      {!! Form::label('featured_image', 'Featured Image :') !!}
      {!! Form::file('featured_image') !!}
</div>









    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop
