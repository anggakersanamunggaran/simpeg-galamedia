@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Jabatan</h1>







<div class="jumbotron text-center">



<h2>{{ $jabatan->id }}</h2>

			<strong>Jabatan :</strong> {{ $jabatan->nama_jabatan }}
			<strong>Level :</strong> {{ $jabatan->level }}

        
          

        
</div>




</div>



</div>



@stop