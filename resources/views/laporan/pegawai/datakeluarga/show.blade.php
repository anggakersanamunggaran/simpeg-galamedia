@extends('layouts.master')
@section('content')

<?php
use Carbon\Carbon;
?>


<div class="row">



<div class="col-lg-12">





<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

							<h1>Detil Data Pegawai</h1>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Data Keluarga Pegawai</a>
                                </li>


                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                    <h4>Detail</h4>
                                    <div class="col-lg-10">
                                   <div class="col-md-3 col-lg-3">

                                    @if($pegawai->pegawai->foto)

                                        <img src="{!! asset('photo/' . $pegawai->pegawai->foto ) !!}" class="avatar img-circle" alt="avatar" height='100' width='100'>
                                    @else
                                      <img src="{!! asset('photo/avatar.png' ) !!}" class="avatar img-circle" alt="avatar" height='100' width='100'>
                                    @endif







                                   	</div>

                                    <form role="form">
                                        <fieldset disabled>
                                           <div class=" col-md-12 col-lg-12 ">
								                  <table class="table table-user-information">
								                    <tbody>

								                      <tr>
								                        <td>Nama Pegawai</td>
								                        <td>{!!  $pegawai->pegawai->nama_pegawai  !!}</td>
								                      </tr>
								                      </tr>
                                      </tr>
                                        <td>Status Marital</td>
                                        <td> {!!  $pegawai->pegawai->status_marital  !!} </td>
                                      </tr>
								                      <tr>
								                        <td>Jumlah Anggota Keluarga</td>
								                        <td>{!!  $pegawai->jumlah_anggota  !!}<td>
								                      </tr>
								                       </tr>
								                        <td>Usia</td>
								                        <td> {!!  $pegawai->pegawai->usia  !!} </td>
								                      </tr>
								                        <td>Tanggal Menikah</td>
								                        <td> {!!date('M j, Y', strtotime ($pegawai->tanggal_nikah))  !!} </td>
								                      </tr>

								                      </tr>
								                        <td>Tanggal Cerai / Meninggal</td>
								                        <td> {!!  $pegawai->tanggal_cerai_meninggal  !!} </td>
								                      </tr>

                                      <tr>
								                        <td>Nomor Telepon</td>
								                        <td>{!!  $pegawai->pegawai->nomor_telepon  !!}<br><br>555-4567-890(Mobile)
								                        </td>

								                      </tr>
                                      <tr>
                                        <td>Nama Anggota Keluarga</td>
                                        <td>
                                          <div class="form-group">
                                              {!! Form::textarea('$pegawai->nama_anggota_keluarga ', null, ['class' => 'form-control', 'placeholder' => $pegawai->nama_anggota_keluarga,'id'=>"disabledTextInput"]) !!}
                                          </div>

                                      </tr>
								                    </tbody>
								                  </table>
                                        </fieldset>
                                    </form>

                                 	</div>

                                </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->



@stop
