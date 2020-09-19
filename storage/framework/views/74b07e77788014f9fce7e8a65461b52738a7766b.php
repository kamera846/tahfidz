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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/manage/murojaah">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Murojaah</li>
                  <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
            <div class="card-body">
              <h1 class="mb-0">Detail Murojaah Santri</h1>
              <br>
              <form class="ml-3">
                  <div class="form-group row mb-1">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($data_santri->nama); ?>"></b>
                      </div>
                  </div>
                  <div class="form-group row mb-1">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-10">
                      <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?php echo e($data_santri->kelas); ?>"></b>
                      </div>
                  </div>
              </form>
              <br>
              <br>

              <h2>Murojaah</h2>
              <br>
              <div class="card bg-secondary p-2">
                <div class="card-header row">
                  <h3># Wajib</h3>
                  <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#murojaahWajib">New</button>
                </div>

                <!-- Modal Murojaah Tambahan -->
                <div class="modal fade" id="murojaahWajib" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="murojaahWajibLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="murojaahWajibLabel">Buat Murojaah Wajib Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" action="/manage/murojaah/wajib/create/<?php echo e($data_santri->id); ?>" method="post">
                          <?php echo e(csrf_field()); ?>


                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                              </div>
                              <input placeholder="Juz ke-" id="juz" type="number" class="form-control" name="juz" value="<?php echo e(old('juz')); ?>" required autofocus>
                            </div>
                          </div>

                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                              </div>
                              <input placeholder="Nomor Halaman" id="halaman" type="number" class="form-control" name="halaman" value="<?php echo e(old('halaman')); ?>" required>
                            </div>
                          </div>

                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                              </div>
                              <input placeholder="Jumlah Hafalan" id="jumlah_hafalan" type="text" class="form-control" name="jumlah_hafalan" value="<?php echo e(old('jumlah_hafalan')); ?>" required>
                            </div>
                          </div>

                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                              </div>
                              <input placeholder="Status Hafalan" id="status_hafalan" type="text" class="form-control" name="status_hafalan" value="<?php echo e(old('status_hafalan')); ?>" required autofocus>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Simpan</button>
                      </div> -->
                    </div>
                  </div>
                </div>
                
                <!-- Table Data Murojaah Wajib -->
                <div>
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Juz</th>
                        <th scope="col">Halaman</th>
                        <th scope="col">Jumlah Hafalan</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_murojaah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if( $data->jenis === 'wajib' ): ?>
                      <tr>
                        <td><?php echo e($data->created_at->format('d M Y')); ?></td>
                        <td><?php echo e($data->juz); ?></td>
                        <td><?php echo e($data->halaman); ?></td>
                        <td><?php echo e($data->jumlah_hafalan); ?></td>
                        <td>
                          <?php if( $data->status_hafalan === 1): ?>
                            <span class="badge badge-success">Lancar</span>
                          <?php else: ?>
                            <span class="badge badge-warning">Kurang Lancar</span>
                          <?php endif; ?>
                        </td>
                      </tr>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                
              </div>
              
              <br>
              <br>

              <div class="card bg-secondary p-2">
                <div class="card-header row">
                  <h3># Tambahan</h3>
                  <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#murojaahTambahan">New</button>
                </div>

                <!-- Modal Murojaah Tambahan -->
                <div class="modal fade" id="murojaahTambahan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="murojaahTambahanLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="murojaahTambahanLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" action="/manage/santri/create" method="post">
                          <?php echo e(csrf_field()); ?>

                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                              </div>
                              <input placeholder="Nama Santri" id="nama" type="text" class="form-control" name="nama" value="<?php echo e(old('nama')); ?>" required autofocus>
                            </div>
                          </div>

                          <!-- <div class="form-group mb-3">
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

                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                              </div>
                              <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="<?php echo e(old('kelas')); ?>" required>
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                              </div>
                              <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="<?php echo e(old('jk')); ?>" required>
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                              </div>
                              <input placeholder="Nama Lengkap Wali" id="nama_wali" type="text" class="form-control" name="nama_wali" value="<?php echo e(old('nama_wali')); ?>" required>
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Table Data Murojahh Tambahan -->
                <div>
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Juz</th>
                        <th scope="col">Halaman</th>
                        <th scope="col">Jumlah Hafalan</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_murojaah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if( $data->jenis === 'tambahan' ): ?>
                      <tr>
                        <td><?php echo e($data->created_at->format('d M Y')); ?></td>
                        <td><?php echo e($data->juz); ?></td>
                        <td><?php echo e($data->halaman); ?></td>
                        <td><?php echo e($data->jumlah_hafalan); ?></td>
                        <td>
                          <?php if( $data->status_hafalan === 1): ?>
                            <span class="badge badge-success">Lancar</span>
                          <?php else: ?>
                            <span class="badge badge-warning">Kurang Lancar</span>
                          <?php endif; ?>
                        </td>
                      </tr>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php echo $__env->make('component.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
		    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>