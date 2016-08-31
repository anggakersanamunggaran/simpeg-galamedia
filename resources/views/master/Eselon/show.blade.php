@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Eselon</h1>







<div class="jumbotron text-center">



<h2>{{ $eselon->nama_eselon }}</h2>

			<strong>Level :</strong> {{ $eselon->level }}


        
</div>




</div>



</div>



@stop