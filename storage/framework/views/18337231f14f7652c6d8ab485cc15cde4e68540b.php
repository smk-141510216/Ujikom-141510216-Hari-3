<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading"><center>Tambah User</center></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('pegawai.store')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('permission') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Permission</label>

                                <div class="col-md-6">
                                    <select id="permission" type="text" class="form-control" name="permission">
                                    <option value="">Pilih</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="HRD">HRD</option>
                                    </select>

                                    <?php if($errors->has('permission')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('permission')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
                <!-- /.col-lg-6 -->
                    <div class="col-md-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Tambah Pegawai</div>
                                <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                <table class="table">
                    <tr>
                    <td>
                    <div class="form-group<?php echo e($errors->has('nip') ? ' has-error' : ''); ?>">
                            <label for="nip" class="col-md-3 control-label">NIP</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" >

                                <?php if($errors->has('nip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr><td>
                        <div class="form-group<?php echo e($errors->has('id_jabatan') ? ' has-error' : ''); ?>">
                            <label for="id_jabatan" class="col-md-3 control-label">Jabatan</label>
                            <div class="col-md-6">
                                <select id="id_jabatan" type="text" class="form-control" name="id_jabatan" ">
                                    <option value="">Pilih</option>
                                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>

                                <?php if($errors->has('id_jabatan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_jabatan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td></tr>
                    <tr><td>
                        <div class="form-group<?php echo e($errors->has('id_golongan') ? ' has-error' : ''); ?>">
                            <label for="id_golongan" class="col-md-3 control-label">Golongan</label>
                            <div class="col-md-6">
                                <select id="id_golongan" type="text" class="form-control" name="id_golongan" >
                                <option value="">Pilih</option>
                                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                                    </select>
                                <?php if($errors->has('id_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td></tr>
                    <tr><td>
                        <div class="form-group<?php echo e($errors->has('foto') ? ' has-error' : ''); ?>">
                            <label for="foto" class="col-md-3 control-label">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" name="foto" >
                            
                                <?php if($errors->has('foto')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('foto')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td></tr>
                        </table>
                    </div>
                    <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                       </div>
                    </div>
                </div>
            </div>
            </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>