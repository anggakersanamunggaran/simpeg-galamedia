@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Tampilkan Data Master Satuan Kerja</h1>







<div class="jumbotron text-center">



<h2>{{ $satuankerja->nama_satuan_kerja }}</h2>

			<strong>Parent Unit :</strong> {{ $satuankerja->parent_unit }}


        
</div>




</div>



</div>



@stop