	  
	  <?php $__env->startSection('content'); ?>
		    <div class="col col-xl-6">
          <div class="card p-3">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Form Santri Baru</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="/manage/santri/create" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input placeholder="Nama Santri" id="nama" type="text" class="form-control" name="nama" value="<?php echo e(old('nama')); ?>" required autofocus>
                  </div>
                </div>

                <!-- <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input placeholder="Id Wali" id="id_wali" type="number" class="form-control" name="id_wali" value="<?php echo e(old('id_wali')); ?>" required>
                  </div>
                </div> -->

                <!-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input placeholder="Nama Wali Santri" id="nama_wali" type="text" class="form-control" name="nama_wali" value="<?php echo e(old('nama_wali')); ?>" required>
                  </div>
                </div> -->

                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="<?php echo e(old('kelas')); ?>" required>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    </div>
                    <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="<?php echo e(old('jk')); ?>" required>
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