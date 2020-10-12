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
                    <th scope="col" colspan="2">Nama Santri</th>
                    <th scope="col">Minggu 1</th>
                    <th scope="col">Minggu 2</th>
                    <th scope="col">Minggu 3</th>
                    <th scope="col">Minggu 4</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_santri as $d)
                  <tr>
                    <th scope="row" rowspan="2">
                      {{ $d->nama }}
                    </th>
                    <th class="text-center bg-secondary" scope="col">T</th>
                    @foreach($d->murojaah->where('jenis', 'tambahan') as $t)
                      @if( $t->status_hafalan === 0 )
                      <td class="text-center bg-danger" scope="col">{{ $d->juz->juz_ke }}/{{ $t->halaman }}</td>
                      @else
                      <td class="text-center" scope="col">{{ $d->juz->juz_ke }}/{{ $t->halaman }}</td>
                      @endif
                    @endforeach
                  </tr>
                  <tr>
                    <th class="text-center bg-secondary" scope="col">M</th>
                    @foreach($d->murojaah->where('jenis', 'wajib') as $w)
                      @if( $t->status_hafalan === 0 )
                      <td class="text-center bg-danger" scope="col">{{ $d->juz->juz_ke }}/{{ $w->halaman }}</td>
                      @else
                      <td class="text-center" scope="col">{{ $d->juz->juz_ke }}/{{ $w->halaman }}</td>
                      @endif
                    @endforeach
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      @include('component.footer')
    </div>
		    
    @endsection
