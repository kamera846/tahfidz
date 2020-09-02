<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Santri;

class ManageSantriController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	$santri = Santri::all();

        return view('admin.component.table_santri', [
            'user' => $user,
            'santri' => $santri 
        ]);
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'cari' => 'required|string|max:255'
        ]);

        $nama = $request->cari;

        $user = Auth::user();
        $santri = Santri::where('nama', 'like', "%".$nama."%")->paginate();

        return view('admin.component.table_santri', [
            'user' => $user,
            'santri' => $santri 
        ]);
    }

    public function new_data()
    {
        $user = Auth::user();
        return view('admin.component.form', [
            'user' => $user
        ]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
	    	'nama' => 'required|string|max:255',
	        'kelas' => 'required|string|max:255',
	        'jk' => 'required|string|max:255'
        ]);

    	Santri::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk
        ]);

    	return redirect('/manage/santri');
    }

    public function edit($id)
    {
        $user = Auth::user();
    	$data = Santri::find($id);

        return view('admin.component.form_update', [
            'data' => $data,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
	    	'nama' => 'required|string|max:255',
	        'kelas' => 'required|string|max:255',
	        'jk' => 'required|string|max:255'
        ]);
    	
        $santri = Santri::find($id);
        $santri->nama = $request->nama;
        $santri->kelas = $request->kelas;
        $santri->jk = $request->jk;
        $santri->save();

    	return redirect('/manage/santri');
    }

    public function delete($id)
    {
    	$user = Auth::user();
    	$data = Santri::all();
    	Santri::find($id)->delete();

        return redirect('/manage/santri');
    }
}
