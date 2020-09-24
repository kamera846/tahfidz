<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use App\Santri;
Use App\Murojaah;
Use App\Juz;

class ManageMurojaahController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_santri = Santri::all();
        $jenis = 'tambahan';
        $data = Murojaah::orderBy('created_at', $jenis)->first();
        // var_dump($data->created_at);
        // die();

        return view('admin.manage_murojaah.table_murojaah', [
            'user' => $user,
            'data_santri' => $data_santri,
            'data' => $data
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

    public function detail_murojaah($id)
    {
        $user = Auth::user();
        $data_santri = Santri::find($id);
        $jenis = "wajib";
        $data_murojaah = Murojaah::where('santri_id', $id)->get();
        // var_dump($data_murojaah);
        // die();
        
        return view('admin.manage_murojaah.detail_murojaah', [
            'data_santri' => $data_santri,
            'data_murojaah' => $data_murojaah,
            'user' => $user
        ]);
    }

    public function create_murojaah_wajib(Request $request, $id)
    {
    	$this->validate($request, [
	    	'halaman' => 'required',
	        'jumlah_hafalan' => 'required',
            'status_hafalan' => 'required'
        ]);

        if($request->status_hafalan === "Lancar") {
            if( $request->halaman === '20' || $request->jumlah_hafalan === '4/4') {
                $juz = Juz::where('santri_id', $id)->first()->juz_ke;
                $hafalan_juz = Juz::where('santri_id', $id);
                $hafalan_juz->juz_ke = $juz + 1;
                $hafalan_juz->updated_at = date('Y-m-d H:i:s'); 
                $hafalan_juz->save();

                $murojaah = new Murojaah();
                $murojaah->santri_id = $id;
                $murojaah->halaman = $request->halaman;
                $murojaah->jumlah_hafalan = $request->jumlah_hafalan;
                $murojaah->jenis = 'wajib';
                $murojaah->status_hafalan = 1; 
                $murojaah->created_at = date('Y-m-d H:i:s');
                $murojaah->save();
            } else {
                $murojaah = new Murojaah();
                $murojaah->santri_id = $id;
                $murojaah->halaman = $request->halaman;
                $murojaah->jumlah_hafalan = $request->jumlah_hafalan;
                $murojaah->jenis = 'wajib';
                $murojaah->status_hafalan = 1; 
                $murojaah->created_at = date('Y-m-d H:i:s');
                $murojaah->save();
            }

        } else if ($request->status_hafalan === "Belum Lancar") {
            $murojaah = new Murojaah();
            $murojaah->santri_id = $id;
            $murojaah->juz = $request->juz;
            $murojaah->halaman = $request->halaman;
            $murojaah->jumlah_hafalan = $request->jumlah_hafalan;
            $murojaah->jenis = 'wajib';
            $murojaah->status_hafalan = 0;
            $murojaah->created_at = date('Y-m-d H:i:s');
            $murojaah->save();
        } 
        // else {
        //     return view('auth.register_user', [
        //         'message' => 'Failed add user, try again or back to dashboard'
        //     ]);
        // }

    	return redirect('/manage/murojaah');
    }

    public function create_murojaah_tambahan(Request $request, $id)
    {
    	$this->validate($request, [
            'juz' => 'required',
	    	'halaman' => 'required',
	        'jumlah_hafalan' => 'required',
            'status_hafalan' => 'required'
        ]);

        if($request->status_hafalan === "Lancar") {
            $murojaah = new Murojaah();
            $murojaah->santri_id = $id;
            $murojaah->juz = $request->juz;
            $murojaah->halaman = $request->halaman;
            $murojaah->jumlah_hafalan = $request->jumlah_hafalan;
            $murojaah->jenis = 'tambahan';
            $murojaah->status_hafalan = 1; 
            $murojaah->created_at = date('Y-m-d H:i:s');
            $murojaah->save();
        } else if ($request->status_hafalan === "Belum Lancar") {
            $murojaah = new Murojaah();
            $murojaah->santri_id = $id;
            $murojaah->juz = $request->juz;
            $murojaah->halaman = $request->halaman;
            $murojaah->jumlah_hafalan = $request->jumlah_hafalan;
            $murojaah->jenis = 'tambahan';
            $murojaah->status_hafalan = 0;
            $murojaah->created_at = date('Y-m-d H:i:s');
            $murojaah->save();
        } 
        // else {
        //     return view('auth.register_user', [
        //         'message' => 'Failed add user, try again or back to dashboard'
        //     ]);
        // }

    	return redirect('/manage/murojaah');
    }
}
