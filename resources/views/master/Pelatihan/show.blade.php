@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Pelatihan</h1>







<div class="jumbotron text-center">



<h2>{{ $pelatihan->id }}</h2>

			<strong>Nama Pelatihan :</strong> {{ $pelatihan->nama_pelatihan }}
			<strong>Level :</strong> {{ $pelatihan->level }}

        
          

        
</div>




</div>



</div>
	


@stop