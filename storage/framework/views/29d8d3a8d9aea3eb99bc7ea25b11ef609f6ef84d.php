  
	  <?php $__env->startSection('content'); ?>
	    <div class="col-xl-4 mt-5">
        <?php $__currentLoopData = $santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card p-3">
          <div class="card-body">
            <h1 class="card-title">Data Santri</h1>
            <form class="ml-3">
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($s->nama); ?>"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">ID</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($s->murojaah->where('jenis', 'wajib')->first()->status_hafalan); ?>"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Kelas</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($s->kelas); ?>"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($s->jk); ?>"></b>
                </div>
              </div>
              <?php if($s->murojaah->where('jenis', 'wajib')->first()->status_hafalan === 0): ?>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Status Kunjungan</label>
                <div class="col-sm-7">
                  <div class="badge-danger text-center p-2 mt-1">Tidak dapat dikunjungi</div>
                </div>
              </div>
              <?php endif; ?>
              
            </form>
            <!-- <a href="#" class="card-link btn btn-primary">Murojaah Santri</a>
            <a href="#" class="card-link btn btn-secondary">SPP Santri</a> -->
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>