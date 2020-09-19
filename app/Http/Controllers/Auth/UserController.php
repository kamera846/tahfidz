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
        $id_user = $user->id;
        $data_wali = Wali::where('user_id', $id_user)->get();
        // $id = $data_wali->id;
        // dd($data_wali);
        // die();
        // $id_wali = $data_wali->id;
        // $santri = Santri::where('wali_id', $id_wali)->get();

        return view('user.data_santri', [
            'user' => $user,
            'santri' => $data_wali 
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
