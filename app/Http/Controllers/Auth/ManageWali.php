<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use App\Wali;
Use App\User;

class ManageWali extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $level = 'user';
        $data = Wali::get();
        // $alamat = User::find(1)->wali('alamat');
        // var_dump($alamat);
        // die();

        return view('admin.manage_wali.table_user', [
            'data' => $data,
            'user' => $user
        ]);
    }

    public function new_data()
    {
        $user = Auth::user();
        return view('admin.manage_wali.form_create', [
            'user' => $user
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8|confirmed',
            'no_telp' => 'required|max:13',
            'alamat' => 'required|string|max:255',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password_confirmation);
        $user->created_at = date('Y-m-d H:i:s');
        $user->level = 'user';
        $user->save();

        $wali = new Wali();
        $wali->user_id = $user->id;
        $wali->nama = $request->name;
        $wali->no_telp = $request->no_telp;
        $wali->alamat = $request->alamat;
        $wali->jk = $request->jk;
        $wali->save();

        return redirect('/manage/wali');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'cari' => 'required|string|max:255'
        ]);

        $nama = $request->cari;

        $user = Auth::user();
        $level = 'user';
        $data = Wali::where('nama', 'like', "%".$nama."%")->get();

        return view('admin.manage_wali.table_user', [
            'user' => $user,
            'data' => $data 
        ]);
    }

    public function edit($id)
    {
        $user = Auth::user();
        $data1 = User::find($id);
        $data2 = Wali::where('user_id', $id);

        return view('admin.manage_wali.form_update', [
            'data1'=> $data1,
            'data2' => $data2,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8|confirmed',
            'no_telp' => 'required|max:13',
            'alamat' => 'required|string|max:255',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password_confirmation);
        $user->updated_at = date('Y-m-d H:i:s');
        $user->level = 'user';
        $user->save();

        $wali = Wali::where('user_id', $id);
        $wali->nama = $request->name;
        $wali->no_telp = $request->no_telp;
        $wali->alamat = $request->alamat;
        $wali->jk = $request->jk;
        $wali->save();

        return redirect('/manage/wali');
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('/manage/wali');
    }
}
