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
                  <li class="breadcrumb-item"><a href="/manage/juz">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Hafalan Santri</li>
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
                    <a href="/manage/santri"><h2 class="mb-0">Data Hafalan Juz Santri</h2></a>
                    <!-- <a href="/manage/santri/new_data" class="btn btn-sm btn-success ml-3">New
                    </a> -->
                  </div>
                </div>
                
                <form class="form-inline" action="/manage/juz/search" method="GET">
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
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Hafalan Juz</th>
                    <th scope="col">Progress</th>
                    <!-- <th scope="col">Opsi</th> -->
                  </tr>
                </thead>
                <?php $__currentLoopData = $santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                  <tr>
                    <td><?php echo e($s->nama); ?></td>
                    <td class="text-center"><?php echo e($s->kelas); ?></td>
                    <td class="text-center">Juz <?php echo e($s->juz->juz_ke); ?></td>
                    <!-- <td>
                    <a href="/santri/hafalan/baru/<?php echo e($s->id); ?>" class="btn btn-primary btn-sm">Murojaah</a>
                      <a href="/manage/santri/delete/<?php echo e($s->id); ?>"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/santri/edit/<?php echo e($s->id); ?>"><i class="ni ni-curved-next text-primary"></i></a>
                    </td> -->
                    <td class="text-center">
                      <div class="d-flex align-items-center row">
                        <span class="col-md-2"><?php echo e($s->murojaah->halaman); ?>/20</span>
                        <div class="col-md-9">
                          <div class="progress">
                            <?php if( $s->murojaah->halaman <= 2 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%; background-color: #ff0000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 4 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color: #ff0000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 6 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%; background-color: #ff0000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 8 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color: #ff8000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 10 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: #ff8000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 12 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; background-color: #ff8000;"></div>
                            <?php elseif( $s->murojaah->halaman <= 14 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #ffff00;"></div>
                            <?php elseif( $s->murojaah->halaman <= 16 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color: #ffff00;"></div>
                            <?php elseif( $s->murojaah->halaman <= 18 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #ffff00;"></div>
                            <?php elseif( $s->murojaah->halaman <= 20 ): ?>
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color: #00ff80;"></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </td>
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