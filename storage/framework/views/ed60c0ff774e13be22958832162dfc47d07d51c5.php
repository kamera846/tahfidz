	  
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
        <div class="col-xl-10 mt-5">
          <div class="card p-3">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <div class="row">
                    <a href="/manage/santri"><h2 class="mb-0">Murojaah Santri</h2></a>
                    </a>
                  </div>
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
                    <th scope="col" rowspan="3">Nama Santri</th>
                    <th scope="col" colspan="2">Murojaah</th>
                  </tr>
                  <tr>
                    <th scope="col">Tambahan</th>
                    <th scope="col">Wajib</th>
                  </tr>
                  <tr>
                    <th scope="col">(Juz/hal/ayat)</th>
                    <th scope="col">(Juz/hal/ayat)</th>
                  </tr>
                </thead>
                <?php $__currentLoopData = $data_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                  <tr>
                    <td>
                      <a href="/manage/murojaah/detail/<?php echo e($s->id); ?>"><?php echo e($s->nama); ?></a>
                    </td>
                    <td class="text-center">13/15/45 <span class="badge badge-success">Lancar</span></td>
                    <td class="text-center">12/20/183 <span class="badge badge-warning">Kurang Lancar</span></td>
                    <!-- <td>
                      <a href="/santri/hafalan/baru/<?php echo e($s->id); ?>" class="btn btn-primary btn-sm">Murojaah</a>
                      <a href="/manage/santri/delete/<?php echo e($s->id); ?>"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/santri/edit/<?php echo e($s->id); ?>"><i class="ni ni-curved-next text-primary"></i></a>
                    </td> -->
                  </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
          </div>
        </div>
      </div>

      <?php echo $__env->make('component.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
		    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>