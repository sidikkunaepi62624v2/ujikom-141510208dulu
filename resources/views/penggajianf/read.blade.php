@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Rincian Gaji</div>
                    <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4"><br>
                                        <table class="table table-bordered"><td class="bg-success"><center>Photo</center></td></table><hr>
                                        <img src="{{asset('img/'.$penggajianv->tunjangan_pegawai->pegawai->photo.'')}}" width="Responsive" height="Responsive" class="img-rounded img-responsive" alt="Responsive image"><hr>
                                        <a href="{{url('Penggajian')}}" class="btn btn-success btn-block">Kembali</a>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <table class="table table-bordered"><td class="bg-success"><center>Data Diri Pegawai</center></td></table><hr>
                                        <label>NIP</label>
                                        <input type="text" name="nip" value="{{$penggajianv->tunjangan_pegawai->pegawai->nip}}" class="form-control" readonly><br>
                                        <label>Nama</label>
                                        <input type="text" name="name" value="{{$penggajianv->tunjangan_pegawai->pegawai->user->name}}" class="form-control" readonly><br>
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" value="{{$penggajianv->tunjangan_pegawai->tunjangan->jabatan->nama_jabatan}}" class="form-control" readonly><br>
                                        <label>Golongan</label>
                                        <input type="text" name="golongan" value="{{$penggajianv->tunjangan_pegawai->pegawai->golongan->nama_golongan}}" class="form-control" readonly>
                                        <hr>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <table class="table table-bordered"><td class="bg-success"><center>Rincian Gaji</center></td></table><hr>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Gaji Lembur</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
    </div>
</div>



        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Table Penggajian</div>
                    
                <div class="">
                    <div class="col-md-12">
                        
                        
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        
                        <div class="col-md-12">
                        <center>
                            <p></p>

                        <h3>{{$penggajianv->tunjangan_pegawai->pegawai->User->name}}</h3>
                        <h4>{{$penggajianv->tunjangan_pegawai->pegawai->nip}}</h4>
                        <b>@if($penggajianv->tanggal_pengambilan == ""&&$penggajianv->status_pengambilan == "0")
                            Belum Diambil
                        @elseif($penggajianv->tanggal_pengambilan == ""||$penggajianv->status_pengambilan == "0")
                            Belum Diambil
                        @else
                            Sudah Diambil / {{$penggajianv->tanggal_pengambilan}}
                        @endif</b>
                        <h5>Gaji Lembur  Rp.{{$penggajianv->jumlah_uang_lembur}} ,Gaji Pokok Rp.{{$penggajianv->gaji_pokok}} ,Tunjangan Rp.{{$penggajianv->tunjangan_pegawai->tunjangan->besaran_uang}} ,Total Gaji Rp.{{$penggajianv->total_gaji}}



                        </h5>
                        
                                <a class="btn btn-primary col-md-12" href="{{url('Penggajian')}}">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>
                </div>

            </div>
        </div>
        
@endsection