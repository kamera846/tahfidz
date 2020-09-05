@extends('admin.dashboard')
	  @section('content')
		    <div class="col-xl-10 mt-5">
          <div class="card p-3">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <div class="row">
                    <h2 class="mb-0">Data Wali Santri</h2>
                    <a href="/manage/wali/new_data" class="btn btn-sm btn-primary ml-3">New
                    </a>
                  </div>
                </div>
                
                <form class="form-inline" action="/manage/wali/search" method="GET">
                  <input class="form-control form-control-sm mr-sm-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}">
                  <button class="btn btn-success btn-sm mr-3" type="submit">Search</button>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Wali Santri</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">JK</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->wali->no_telp }}</td>
                    <td>{{ $d->wali->alamat }}</td>
                    <td>{{ $d->wali->jk }}</td>
                    <td>
                      <a href="/manage/wali/delete/{{ $d->id }}"><i class="fas fa-trash text-danger mr-3"></i></a>
                      <a href="/manage/wali/edit/{{ $d->id }}"><i class="ni ni-curved-next text-primary"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    @endsection
