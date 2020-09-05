	  <?php $__env->startSection('content'); ?>
	    <div class="col-xl-10 mt-5">
          <div class="card p-3">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>Nama <?php echo e($d->jk); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>