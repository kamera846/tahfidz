	  @extends('admin.dashboard')
	  @section('content')
		<div class="col-xl-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">List Santri</h3>
                </div>
                <form class="form-inline" action="/manage/santri/search" method="GET">
                  <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}">
                  <button class="btn btn-primary btn-sm mr-3" type="submit">Search</button>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                @foreach($santri as $s)
                <tbody>
                  <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->jk }}</td>
                    <td>
                      <a href="/manage/santri/delete/{{ $s->id_santri }}"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/santri/edit/{{ $s->id_santri }}"><i class="ni ni-curved-next text-primary"></i></a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
    @endsection
