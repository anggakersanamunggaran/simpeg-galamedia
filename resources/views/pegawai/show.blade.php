@extends('layouts.master')
@section('content')

<?php
use Carbon\Carbon;
?>


<div class="row">



<div class="col-lg-12">


  @if (Session::has('message'))



  <div class="alert alert-warning">{{ Session::get('message') }}</div>



  @endif


<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

							<h1>Detil Data Pegawai</h1>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Data Pegawai</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Detail Pegawai</a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                    <h4>Data Pegawai</h4>
                                    <div class="col-lg-10">
                                   <div class="col-md-3 col-lg-3">
                                     @if($pegawai->foto)

                                         <img src="{!! asset('photo/' . $pegawai->foto ) !!}" class="avatar img-circle" alt="avatar" height='100' width='100'>
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
								                        <td>NIK :</td>
								                        <td>{!!  $pegawai->nip  !!}</td>
								                      </tr>
								                      <tr>
								                        <td>Nama Pegawai</td>
								                        <td>{!!  $pegawai->nama_pegawai  !!}</td>
								                      </tr>
								                      </tr>
								                        <tr>
								                        <td>Agama</td>
								                        <td>{!!  $pegawai->agama  !!}<td>
								                      </tr>

								                      </tr>
								                        <td>Status Marital</td>
								                        <td>
                                        {{--  if exist relation  --}}
                                        @if( count($pegawai->laporankeluargapegawai))
                                        <a  href="{{ URL('datakeluarga/' . $pegawai->laporankeluargapegawai->id   ) }}">  {!!  $pegawai->status_marital  !!}
                                        @else
                                          {!!  $pegawai->status_marital  !!}
                                          <br>
                                          laporan keluarga belum ada
                                          <a  href="{{ URL('datakeluarga/' . $pegawai->id .'/create'  ) }}"> Buat Laporan ?
                                        @endif
                                        </a>
                                        </td>
								                      </tr>
								                       </tr>
								                        <td>Usia</td>
								                        <td> {!!  $pegawai->usia  !!} </td>
								                      </tr>
								                        <td>Tanggal Lahir</td>
								                        <td> {!!date('M j, Y', strtotime ($pegawai->tanggal_lahir))  !!} </td>
								                      </tr>
								                       </tr>
								                        <td>Tempat Lahir</td>
								                        <td> {!!  $pegawai->tempat_lahir  !!} </td>
								                      </tr>
								                      </tr>


								                        <td>Jenis Kelamin</td>
								                        <td> {!!  $pegawai->jenis_kelamin  !!} </td>
								                      </tr>
								                        <tr>
								                        <td>Alamat</td>
								                        <td>{!!  $pegawai->alamat  !!}<td>
								                      </tr>
								                      <tr>
								                        <td>E-mail</td>
								                        <td><a href="mailto:".{!!  $pegawai->email  !!}.''>{!!  $pegawai->email  !!}</a></td>
								                      </tr>
								                        <td>Nomor Telepon</td>
								                        <td>{!!  $pegawai->nomor_telepon  !!}<br><br>555-4567-890(Mobile)
								                        </td>

								                      </tr>

								                    </tbody>
								                  </table>
                                        </fieldset>
                                    </form>

                                 	</div>

                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Detail Pegawai</h4>
                                    <div class="col-lg-10">
	                                   <div class="col-md-3 col-lg-3"></div>

                                    <form role="form">
                                        <fieldset disabled>
                                           <div class=" col-md-12 col-lg-12 ">
								                  <table class="table table-user-information">
								                    <tbody>
								                      <tr>
								                        <td>Bidang Kerja :</td>
								                        <td>{!!  $pegawai->satuankerja->nama_satuan_kerja  !!}</td>
								                      </tr>

								                      <tr>
								                        <td>Jabatan</td>
								                        <td>{!!  $pegawai->jabatan->nama_jabatan  !!}</td>
								                      </tr>
								                      </tr>

								                      <tr>
								                        <td>Grade :</td>
								                        <td>{!!  $pegawai->golongan->golongan  !!}</td>
								                     </tr>
                                    </tr>
								                        <td>T.U.M</td>

								                        <td> Rp{!!    number_format( $pegawai->tunjangan_makan, 2 , ',' , '.' )   !!} </td>
								                      </tr>
								                        <td>T.U.T</td>
								                        <td>  Rp{!!    number_format( $pegawai->tunjangan_transport, 2 , ',' , '.' )   !!} </td>
								                      </tr>
								                       </tr>
								                        <td>Gaji Pokok</td>
								                        <td>  Rp{!!    number_format( $pegawai->gaji_pokok, 2 , ',' , '.' )   !!} </td>
								                      </tr>
								                      </tr>


								                        <td>Tanggal Pengangkatan Pegawai</td>
								                        <td> {!!date('M j, Y', strtotime ($pegawai->tanggal_pengangkatan))  !!} </td>
								                      </tr>
								                        <tr>
								                        <td>Status Pegawai</td>
								                        <td>{!!  $pegawai->statuspegawai->nama_status  !!}<td>
								                      </tr>
								                      <tr>
								                        <td>Masa Kerja Hingga Sekarang</td>
								                            {{--  */
								                              $hari = Carbon::parse($pegawai->tanggal_pengangkatan)->format('d');
								                              $tahun = Carbon::parse($pegawai->tanggal_pengangkatan)->format('Y');
								                           	  $bulan = Carbon::parse($pegawai->tanggal_pengangkatan)->format('m');
								                              $waktu = Carbon::createFromDate($tahun,$bulan,$hari)->diff(Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')
								                                /* --}}
								                        <td>{!! $waktu  !!}</td>


								                    </tbody>
								                  </table>
                                        </fieldset>
                                    </form>

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
