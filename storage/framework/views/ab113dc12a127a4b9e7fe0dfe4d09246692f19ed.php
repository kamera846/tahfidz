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
                  <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="/manage/wali">Manage Wali Santri</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--7">
      <div class="row justify-content-md-center">
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
                            <select id="jk" class="form-control" name="jk" value="<?php echo e(old('jk')); ?>" required>
                              <option value="">Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
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
      </div>
      <?php echo $__env->make('component.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
		    
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>