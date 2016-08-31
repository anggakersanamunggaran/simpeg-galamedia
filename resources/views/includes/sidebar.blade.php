
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ URL('pegawai') }}"><i class="fa fa-dashboard fa-fw"></i> Data Pegawai</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL('golongan') !!}">Master Golongan</a>
                                </li>

                                <li>
                                    <a href="{!! URL('satuankerja') !!}">Master Satuan Kerja</a>
                                </li>


                                <li>
                                    <a href="{!! URL('jabatan') !!}">Master Jabatan</a>
                                </li>
                                <li>
                                    <a href="{!! URL('kehadiran') !!}">Master Kehadiran</a>
                                </li>


                                <li>
                                    <a href="{!! URL('statuspegawai') !!}">Master Status Pegawai</a>
                                </li>
                                <li>
                                    <a href="{!! URL('statusjabatan') !!}">Master Status Jabatan</a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Laporan Pegawai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL('laporanabsen') !!}">Laporan Absensi & Tunjangan</a>
                                </li>
                                <li>
                                    <a href="{!! URL('datakeluarga') !!}"> Laporan Data Keluarga Pegawai </a>
                                </li>
                                <li>
                                    <a href="{!! URL('') !!}">Laporan Pelatihan</a>
                                </li>
                              </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
