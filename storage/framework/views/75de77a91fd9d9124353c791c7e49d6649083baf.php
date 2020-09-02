<!DOCTYPE html>
<html>
<?php echo $__env->make('templates.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
  <!-- Sidenav -->
  <?php echo $__env->make('admin.component.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php echo $__env->make('admin.component.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Page content -->
    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row justify-content-md-center mt-5">
    	<div class="col col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Form Update Data Santri</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="/manage/santri/update/<?php echo e($d->id_santri); ?>" method="post">
                
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>


                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input placeholder="Nama" id="nama" type="text" class="form-control" name="nama" value="<?php echo e($d->nama); ?>" required autofocus>
                    <?php if($errors->has('nama')): ?>
                      <div class="text-danger">
                        <?php echo e($errors->first('nama')); ?>

                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="<?php echo e($d->kelas); ?>" required>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-quran"></i></span>
                    </div>
                    <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="<?php echo e($d->jk); ?>" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success mt-4">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>