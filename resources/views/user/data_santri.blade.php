  @extends('user.dashboard')
	  @section('content')
	    <div class="col-xl-10 mt-5">
        <div class="card p-3">
          <div class="card-body">
            <h1 class="card-title">Data Santri</h1>
            <form class="ml-3">
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Dwi Andika Darma Putra"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="12-IPA-3"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Laki-laki"></b>
                </div>
              </div>
            </form>
            <a href="#" class="card-link btn btn-primary">Murojaah Santri</a>
            <a href="#" class="card-link btn btn-secondary">SPP Santri</a>
          </div>
        </div>
      </div>
    @endsection
