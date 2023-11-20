<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    public function index(){
        $data = user::leftJoin('teachers','teachers.id_user','users.id')->get();
        return view('guru.data-guru', compact('data'));
    }
    public function add(){
        return view('guru.add');
    }

    public function insert(Request $request){
        $request->validate([
            'email'=> 'required',
            'nama' => 'required',
            'password' => 'required',
            'no_hp' => 'required|numeric',
        ], [
            'nama_siswa.required' => "Nama Siswa wajib diisi!",
            'no_hp.required' => 'Email wajib diisi!',
            'password.required' => 'password wajib diisi!',
            'no_hp.required' => 'No herus diisi'
        ]);
        
        
        $user = User::create([
                'email' => $request->email,
                'name' => $requets->nama,
                'no_hp' => $request->no_hp,
            ]);
            teacher::create([
                'id_user' => $user->id,
                'nama' => $request->nama,
                'no_hp' => $request->no_hp
            ]);
            
        
        


        return  redirect()->route('admin.dataguru')->with('sukses','berhasil menambahkan data');
    }

}
