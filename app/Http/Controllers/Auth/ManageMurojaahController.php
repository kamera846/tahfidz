<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use App\Santri;

class ManageMurojaahController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $level = 'user';
        $data = User::where('level', $level)->get();
        // $alamat = User::find(1)->wali('alamat');
        // var_dump($alamat);
        // die();

        return view('admin.manage_murojaah.table_murojaah', [
            'data' => $data,
            'user' => $user
        ]);
    }
}
