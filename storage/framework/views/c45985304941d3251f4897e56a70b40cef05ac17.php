	  
	  <?php $__env->startSection('content'); ?>
		<div class="col-xl-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">List Santri</h3>
                </div>
                <form class="form-inline" action="/manage/santri/search" method="GET">
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
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <?php $__currentLoopData = $santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                  <tr>
                    <td><?php echo e($s->nama); ?></td>
                    <td><?php echo e($s->kelas); ?></td>
                    <td><?php echo e($s->jk); ?></td>
                    <td>
                      <a href="/manage/santri/delete/<?php echo e($s->id_santri); ?>"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/santri/edit/<?php echo e($s->id_santri); ?>"><i class="ni ni-curved-next text-primary"></i></a>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
          </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>