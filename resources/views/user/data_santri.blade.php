  @extends('user.dashboard')
	  @section('content')
	    <div class="col-xl-4 mt-5">
        @foreach($santri as $s)
        <div class="card p-3">
          <div class="card-body">
            <h1 class="card-title">Data Santri</h1>
            <form class="ml-3">
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": {{ $s->nama }}"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">ID</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": {{ $s->murojaah->where('jenis', 'wajib')->first()->status_hafalan }}"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Kelas</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": {{ $s->kelas }}"></b>
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <b><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": {{ $s->jk }}"></b>
                </div>
              </div>
              @if ($s->murojaah->where('jenis', 'wajib')->first()->status_hafalan === 0)
              <div class="form-group row mb-1">
                <label for="staticEmail" class="col-sm-5 col-form-label">Status Kunjungan</label>
                <div class="col-sm-7">
                  <div class="badge-danger text-center p-2 mt-1">Tidak dapat dikunjungi</div>
                </div>
              </div>
              @endif
              
            </form>
            <!-- <a href="#" class="card-link btn btn-primary">Murojaah Santri</a>
            <a href="#" class="card-link btn btn-secondary">SPP Santri</a> -->
          </div>
        </div>
        @endforeach
      </div>
    @endsection
