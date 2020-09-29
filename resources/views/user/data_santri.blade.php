@extends('user.dashboard')
  @section('content')
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
              <li class="breadcrumb-item"><a href="/dashboard/user">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Santri</li>
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
        @foreach($santri as $s)
        <div class="card p-3">
          <div class="card-body">
            <h2 class="card-title">Data Santri</h2>
            <hr>
            <!-- <form class="ml-3">
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
            </form> -->
            <div class="table-responsive col-md-10">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" colspan="2"><h5>Biodata Santri</h5></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Nama Santri
                    </td>
                    <td class="col-4">
                      {{$s->nama}}
                    </td>
                  </tr>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Jenis Kelamin
                    </td>
                    <td class="col-4">
                      {{$s->jk}}
                    </td>
                  </tr>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Kelas
                    </td>
                    <td class="col-4">
                      {{$s->kelas}}
                    </td>
                  </tr>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Nama Wali Santri
                    </td>
                    <td class="col-4">
                      {{$s->wali->nama}}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive col-md-10">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" colspan="2"><h5>Data Murojaah Santri</h5></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Hafalan Juz
                    </td>
                    <td class="col-4">
                      Santri sudah mencapai Juz-{{$s->juz->juz_ke}}
                    </td>
                  </tr>
                  <tr class="row ml-1">
                    <td class="col-4">
                      Status Kunjungan Wali
                    </td>
                    <td class="col-4">
                      @if ($s->murojaah->where('jenis', 'wajib')->first()->status_hafalan === 0)
                        <span class="badge badge-danger">Santri tidak boleh dikunjungi</span>
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @include('component.footer')
  </div>

	    
    @endsection
