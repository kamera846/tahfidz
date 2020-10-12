	  
	  <?php $__env->startSection('content'); ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Murojaah</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Content -->
    <div class="container-fluid mt--7">
      <div class="row justify-content-md-center">
        <div class="col-xl-12 mt-5">
        <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Data Murojaah Santri</h2>
                </div>
                  <form class="form-inline" action="/manage/murojaah/search" method="GET">
                    <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="<?php echo e(old('cari')); ?>">
                    <button class="btn btn-primary btn-sm mr-3" type="submit">Search</button>
                  </form>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                  <tr>
                    <th scope="col" colspan="2">Nama Santri</th>
                    <th scope="col">Minggu 1</th>
                    <th scope="col">Minggu 2</th>
                    <th scope="col">Minggu 3</th>
                    <th scope="col">Minggu 4</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row" rowspan="2">
                      <?php echo e($d->nama); ?>

                    </th>
                    <th class="text-center bg-secondary" scope="col">T</th>
                    <?php $__currentLoopData = $d->murojaah->where('jenis', 'tambahan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if( $t->status_hafalan === 0 ): ?>
                      <td class="text-center bg-danger" scope="col"><?php echo e($d->juz->juz_ke); ?>/<?php echo e($t->halaman); ?></td>
                      <?php else: ?>
                      <td class="text-center" scope="col"><?php echo e($d->juz->juz_ke); ?>/<?php echo e($t->halaman); ?></td>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th class="text-center bg-secondary" scope="col">M</th>
                    <?php $__currentLoopData = $d->murojaah->where('jenis', 'wajib'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if( $t->status_hafalan === 0 ): ?>
                      <td class="text-center bg-danger" scope="col"><?php echo e($d->juz->juz_ke); ?>/<?php echo e($w->halaman); ?></td>
                      <?php else: ?>
                      <td class="text-center" scope="col"><?php echo e($d->juz->juz_ke); ?>/<?php echo e($w->halaman); ?></td>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <?php echo $__env->make('component.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
		    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>