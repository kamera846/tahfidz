	  @extends('admin.dashboard')
	  @section('content')
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
                  <li class="breadcrumb-item"><a href="/manage/santri">Manage Santri</a></li>
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
        <div class="col col-xl-5">
          <div class="card p-3 shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Form Santri Baru</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="/manage/santri/create" method="post">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input placeholder="Nama Santri" id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                  </div>
                </div>

                <!-- <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input placeholder="Id Wali" id="id_wali" type="number" class="form-control" name="id_wali" value="{{ old('id_wali') }}" required>
                  </div>
                </div> -->

                <!-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input placeholder="Nama Wali Santri" id="nama_wali" type="text" class="form-control" name="nama_wali" value="{{ old('nama_wali') }}" required>
                  </div>
                </div> -->

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="{{ old('kelas') }}" required>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    </div>
                    <!-- <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="{{ old('jk') }}" required> -->
                    <select id="jk" class="form-control" name="jk" value="{{ old('jk') }}" required>
                      <option value="">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <!-- <div class="form-group mb-3">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div> -->
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                    </div>
                    <input placeholder="Nama Lengkap Wali" id="nama_wali" type="text" class="form-control" name="nama_wali" value="{{ old('nama_wali') }}" required>
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
      @include('component.footer')
    </div>
		    
      @endsection