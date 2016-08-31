@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Golongan</h1>







<div class="jumbotron text-center">



<h2>{{ $golongan->golongan }}</h2>

			<strong>Level :</strong> {{ $golongan->level }}

        
            <strong>Uraian :</strong> {{ $golongan->uraian }}

        
</div>




</div>



</div>



@stop