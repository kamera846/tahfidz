<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Santri;
use App\Wali;
use App\Juz;
use App\Murojaah;

class ManageSantriController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
        $santri = Santri::all();

        return view('admin.manage_santri.table_santri', [
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
        $santri = Santri::where('nama', 'like', "%".$nama."%")->paginate(5);

        return view('admin.manage_santri.table_santri', [
            'user' => $user,
            'santri' => $santri,
            'nama' => $nama 
        ]);
    }

    public function new_data()
    {
        $user = Auth::user();
        $wali = Wali::all();

        return view('admin.manage_santri.form', [
            'user' => $user,
            'wali' => $wali
        ]);
    }

    public function search_nama_wali(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255'
        ]);

        $nama = $request->nama;
        $santri = Santri::where('nama', 'like', "%".$nama."%")->paginate(2);

        return view('admin.manage_santri.form', [
            'santri' => $santri 
        ]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'nama_wali' => 'required',
	    	'nama' => 'required|string|max:255',
	        'kelas' => 'required|string|max:255',
	        'jk' => 'required|string|max:255'
        ]);

        $nama = $request->nama_wali;
        $id = Wali::where("nama", $nama)->first()->id;

        $santri = new Santri();
        $santri->wali_id = $id;
        $santri->nama = $request->nama;
        $santri->kelas = $request->kelas;
        $santri->jk = $request->jk;
        $santri->created_at = date('Y-m-d H:i:s');
        $santri->save();
        
        $santri_id = $santri->id;
        $juz = new Juz();
        $juz->santri_id = $santri_id;
        $juz->juz_ke = 1;
        $juz->created_at = date('Y-m-d H:i:s');
        $juz->save();

        $murojaah = new Murojaah();
        $murojaah->santri_id = $santri_id;
        $murojaah->halaman = 0;
        $murojaah->jumlah_hafalan = 0;
        $murojaah->jenis = 'wajib';
        $murojaah->status_hafalan = 0; 
        $murojaah->created_at = date('Y-m-d H:i:s');
        $murojaah->save();

    	return redirect('/manage/santri');
    }

    public function edit($id)
    {
        $user = Auth::user();
    	$data = Santri::find($id);

        return view('admin.manage_santri.form_update', [
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

        // return view('admin.manage_santri.table_santri', [
        //     'user' => $user,
        //     'santri' => $santri 
        // ]);

        return redirect('/manage/santri');
    }
}
