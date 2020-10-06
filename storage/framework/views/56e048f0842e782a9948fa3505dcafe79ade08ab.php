	  <?php $__env->startSection('content'); ?>
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
                  <li class="breadcrumb-item active" aria-current="page">Wali Santri</li>
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
                    <h2 class="mb-0">Data Wali Santri</h2>
                    <a href="/manage/wali/new_data" class="btn btn-sm btn-success ml-3">New
                    </a>
                  </div>
                </div>
                
                <form class="form-inline" action="/manage/wali/search" method="GET">
                  <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="<?php echo e(old('cari')); ?>">
                  <button class="btn btn-primary btn-sm mr-3" type="submit">Search</button>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Email Wali</th>
                    <th scope="col">Nama Wali Santri</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($d->user->email); ?></td>
                    <td><?php echo e($d->nama); ?></td>
                    <td>
                      <a href="/manage/wali/edit/<?php echo e($d->id); ?>" class="btn btn-primary btn-sm">Update</a>
                      <a href="/manage/wali/delete/<?php echo e($d->user->id); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
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