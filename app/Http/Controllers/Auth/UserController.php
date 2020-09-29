<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Santri;
use App\Wali;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        // $data_wali = Santri::where('user_id', $id_user)->get();
        // $id = $data_wali->id;
        // $id_wali = $data_wali->id;
        $santri = Santri::where('wali_id', $id)->get();
        // dd($santri);
        // die();

        return view('user.data_santri', [
            'user' => $user,
            'santri' => $santri 
        ]);
    }

    public function data_santri()
    {
        $user = Auth::user();
        $id = $user->id;
        // $data_wali = Santri::where('user_id', $id_user)->get();
        // $id = $data_wali->id;
        // $id_wali = $data_wali->id;
        $santri = Santri::where('wali_id', $id)->get();
        // dd($santri);
        // die();

        return view('user.data_santri', [
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
        $santri = DB::table('santri')->where('nama', 'like', "%".$nama."%")->paginate();

        return view('user.dashboard_user.', [
            'user' => $user,
            'santri' => $santri 
        ]);
    }
}
