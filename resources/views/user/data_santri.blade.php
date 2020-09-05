@extends('user.dashboard')
	  @section('content')
	    <div class="col-xl-10 mt-5">
          <div class="card p-3">
            @foreach($data as $d)
            <h3>Nama {{ $d->jk }}</h3>
            @endforeach
            
          </div>
        </div>
    @endsection
