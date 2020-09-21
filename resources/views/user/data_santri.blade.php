  @extends('user.dashboard')
	  @section('content')
	    <div class="col-xl-8 mt-5">
        @foreach($santri as $s)
        <div class="card p-3">
          <div class="card-body">
            <h1 class="card-title">Data Santri</h1>
            <form class="ml-3">
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $s->nama }}"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $s->kelas }}"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $s->jk }}"></b>
                </div>
              </div>
            </form>
            <a href="#" class="card-link btn btn-primary">Murojaah Santri</a>
            <a href="#" class="card-link btn btn-secondary">SPP Santri</a>
          </div>
        </div>
        @endforeach
      </div>
    @endsection
