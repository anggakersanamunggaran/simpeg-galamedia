@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Lokasi Pelatihan</h1>







<div class="jumbotron text-center">



<h2>{{ $lokasipelatihan->id }}</h2>

			<strong>Lokasi Pelatihan :</strong> {{ $lokasipelatihan->nama_pelatihan }}
			<strong>Level :</strong> {{ $lokasipelatihan->level }}

        
          

        
</div>




</div>



</div>
	


@stop