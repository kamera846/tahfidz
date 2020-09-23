<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Santri;
use App\Juz;

class ManageJuzController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
        $santri = Santri::all();

        return view('admin.manage_juz.table_juz', [
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

        return view('admin.manage_juz.table_juz', [
            'user' => $user,
            'santri' => $santri,
            'nama' => $nama 
        ]);
    }
}
