<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Rincian Gaji</div>
                    <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4"><br>
                                        <table class="table table-bordered"><td class="bg-success"><center>Photo</center></td></table><hr>
                                        <img src="<?php echo e(asset('img/'.$penggajianv->tunjangan_pegawai->pegawai->photo.'')); ?>" width="Responsive" height="Responsive" class="img-rounded img-responsive" alt="Responsive image"><hr>
                                        <a href="<?php echo e(url('Penggajian')); ?>" class="btn btn-success btn-block">Kembali</a>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <table class="table table-bordered"><td class="bg-success"><center>Data Diri Pegawai</center></td></table><hr>
                                        <label>NIP</label>
                                        <input type="text" name="nip" value="<?php echo e($penggajianv->tunjangan_pegawai->pegawai->nip); ?>" class="form-control" readonly><br>
                                        <label>Nama</label>
                                        <input type="text" name="name" value="<?php echo e($penggajianv->tunjangan_pegawai->pegawai->user->name); ?>" class="form-control" readonly><br>
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" value="<?php echo e($penggajianv->tunjangan_pegawai->tunjangan->jabatan->nama_jabatan); ?>" class="form-control" readonly><br>
                                        <label>Golongan</label>
                                        <input type="text" name="golongan" value="<?php echo e($penggajianv->tunjangan_pegawai->pegawai->golongan->nama_golongan); ?>" class="form-control" readonly>
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

                        <h3><?php echo e($penggajianv->tunjangan_pegawai->pegawai->User->name); ?></h3>
                        <h4><?php echo e($penggajianv->tunjangan_pegawai->pegawai->nip); ?></h4>
                        <b><?php if($penggajianv->tanggal_pengambilan == ""&&$penggajianv->status_pengambilan == "0"): ?>
                            Belum Diambil
                        <?php elseif($penggajianv->tanggal_pengambilan == ""||$penggajianv->status_pengambilan == "0"): ?>
                            Belum Diambil
                        <?php else: ?>
                            Sudah Diambil / <?php echo e($penggajianv->tanggal_pengambilan); ?>

                        <?php endif; ?></b>
                        <h5>Gaji Lembur  Rp.<?php echo e($penggajianv->jumlah_uang_lembur); ?> ,Gaji Pokok Rp.<?php echo e($penggajianv->gaji_pokok); ?> ,Tunjangan Rp.<?php echo e($penggajianv->tunjangan_pegawai->tunjangan->besaran_uang); ?> ,Total Gaji Rp.<?php echo e($penggajianv->total_gaji); ?>




                        </h5>
                        
                                <a class="btn btn-primary col-md-12" href="<?php echo e(url('Penggajian')); ?>">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>
                </div>

            </div>
        </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>