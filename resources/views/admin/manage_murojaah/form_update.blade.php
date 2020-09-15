      @extends('admin.dashboard')
	    @section('content')
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col col-xl-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h2 class="mb-0 text-center">Form Update Data Santri</h2>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="/manage/santri/update/{{ $data->id }}" method="post">
                  
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

                  <div class="form-group mb-1">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input placeholder="Nama" id="nama" type="text" class="form-control" name="nama" value="{{ $data->nama }}" required autofocus>
                      @if($errors->has('nama'))
                        <div class="text-danger">
                          {{ $errors->first('nama')}}
                        </div>
                      @endif
                    </div>
                  </div>
                  <div class="form-group mb-1">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="{{ $data->kelas }}" required>
                    </div>
                  </div>
                  <div class="form-group mb-1">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                      </div>
                      <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="{{ $data->jk }}" required>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success mt-4">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        @include('component.footer')
      </div>
    	  
      @endsection