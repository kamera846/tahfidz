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
            'santri' => $santri 
        ]);
    }

    public function new_data()
    {
        $user = Auth::user();
        return view('admin.manage_santri.form', [
            'user' => $user
        ]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            // 'id_wali' => 'required',
	    	'nama' => 'required|string|max:255',
	        'kelas' => 'required|string|max:255',
	        'jk' => 'required|string|max:255'
        ]);

        // $nama = $request->nama_wali;
        // $data_wali = Wali::where("nama","like","%".$nama."%")->get();

        $santri = new Santri();
        // $santri->id_wali = $request->id_wali;
        $santri->nama = $request->nama;
        $santri->kelas = $request->kelas;
        $santri->jk = $request->jk;
        $santri->created_at = date('Y-m-d H:i:s');
        $santri->updated_at = date('Y-m-d H:i:s');
        $santri->save();

    	return redirect('/manage/santri');
    }

    public function get_data_wali(Request $request)
    {
        $this->validate($request, [
	    	'nama' => 'required|string|min:3'
        ]);

        $data = Wali::where("nama","like","%".$nama."%")->get();

        return response([ 'data_wali' => $data ]);
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
