<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageSantriController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $santri = DB::table('santri')->get();

        return view('user.dashboard_user', [
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
