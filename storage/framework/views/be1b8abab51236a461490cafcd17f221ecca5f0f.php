	  <?php $__env->startSection('content'); ?>
		<div class="col col-xl-6">
          <div class="card p-3">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Buat Data Wali Baru</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="/manage/wali/create" method="post">
                <?php echo e(csrf_field()); ?>

                
                <div class="form-group mb-2">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    </div>
                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>

                <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input placeholder="Nama Wali Santri" id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
                  </div>
                </div>
                
                <div class="form-row mb-0">
                    <div class="form-group mb-2 col-md-6">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                            </div>
                            <input placeholder="Nomer Telp" id="no_telp" type="number" class="form-control" name="no_telp" value="<?php echo e(old('no_telp')); ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                            </div>
                            <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="<?php echo e(old('jk')); ?>" required>
                        </div>
                    </div>
                </div>
                

                <!-- <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input placeholder="Nama Wali Santri" id="nama_wali" type="text" class="form-control" name="nama_wali" value="<?php echo e(old('nama_wali')); ?>" required>
                  </div>
                </div> -->

                <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                    </div>
                    <input placeholder="Alamat" id="alamat" type="text" class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>" required>
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-success mt-4">Simpan</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>