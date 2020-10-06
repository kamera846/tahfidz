	  @extends('admin.dashboard')
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
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Murojaah</li>
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
        <div class="col-xl-12 mt-5">
        <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Data Murojaah Santri</h2>
                </div>
                  <form class="form-inline" action="/manage/murojaah/search" method="GET">
                    <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}">
                    <button class="btn btn-primary btn-sm mr-3" type="submit">Search</button>
                  </form>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                  <tr>
                    <th scope="col" rowspan="2">Nama Santri</th>
                    <th scope="col" colspan="2">Minggu 1</th>
                    <th scope="col" colspan="2">Minggu 2</th>
                    <th scope="col" colspan="2">Minggu 3</th>
                    <th scope="col" colspan="2">Minggu 4</th>
                  </tr>
                  <tr>
                    <th scope="col">T</th>
                    <th scope="col">M</th>
                    <th scope="col">T</th>
                    <th scope="col">M</th>
                    <th scope="col">T</th>
                    <th scope="col">M</th>
                    <th scope="col">T</th>
                    <th scope="col">M</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_santri as $s)
                  <tr>
                    <th scope="row">
                      {{ $s->nama }}
                    </th>
                    <td class="text-center">{{ $s->juz->juz_ke }}/{{ $s->murojaah->where('jenis', 'tambahan')->last()->halaman }}</td>
                    <td class="text-center">{{ $s->juz->juz_ke }}/{{ $s->murojaah->where('jenis', 'wajib')->last()->halaman }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          <!-- <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <div class="row">
                    <a href="/manage/santri"><h2 class="mb-0">Murojaah Santri</h2></a>
                    </a>
                  </div>
                </div>
                
                <form class="form-inline" action="/manage/murojaah/search" method="GET">
                  <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}">
                  <button class="btn btn-primary btn-sm mr-3" type="submit">Search</button>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                  <tr>
                    <th scope="col" rowspan="3">Nama Santri</th>
                    <th scope="col" colspan="2">Murojaah</th>
                  </tr>
                  <tr>
                    <th scope="col">Tambahan</th>
                    <th scope="col">Wajib</th>
                  </tr>
                  <tr>
                    <th scope="col">(Juz/hal/ayat)</th>
                    <th scope="col">(Juz/hal/ayat)</th>
                  </tr>
                </thead>
                @foreach($data_santri as $s)
                <tbody>
                  <tr>
                    <td>
                      <a href="/manage/murojaah/detail/{{ $s->id }}">{{ $s->nama }}</a>
                    </td>
                    <td class="text-center">13/15/45 <span class="badge badge-success">Lancar</span></td>
                    <td class="text-center">12/20/183 <span class="badge badge-warning">Kurang Lancar</span></td>
                    <td>
                      <a href="/santri/hafalan/baru/{{ $s->id }}" class="btn btn-primary btn-sm">Murojaah</a>
                      <a href="/manage/santri/delete/{{ $s->id }}"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/santri/edit/{{ $s->id }}"><i class="ni ni-curved-next text-primary"></i></a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div> -->
        </div>
      </div>

      @include('component.footer')
    </div>
		    
    @endsection
