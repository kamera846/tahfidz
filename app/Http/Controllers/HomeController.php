<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Wali;
use App\Santri;
use App\Murojaah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $level = $user->level;
        $data_user = User::all()->count();
        $data_santri = Santri::all()->count();
        $data_murojaah = Murojaah::all()->count();

        if($level === "admin"){
            return view('admin.main-content', [
                'user' => $user,
                'data_user' => $data_user,
                'data_santri' => $data_santri,
                'data_murojaah' => $data_murojaah,
            ]);
        } else {
            return redirect('/dashboard/user');
        }

        
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'cari' => 'required|string|max:255'
        ]);

        $nama = $request->cari;

        $user = Auth::user();
        $santri = DB::table('santri')->where('nama', 'like', "%".$nama."%")->paginate();

        return view('welcome', [
            'user' => $user,
            'santri' => $santri 
        ]);
    }
}
