<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DataSiswa extends Controller
{
    public function dataSiswa(){
        $data = Student::orderBy('id','desc')->get();
        return view('siswa.data-siswa', compact('data'));
    }
    public function add(){
        return view ("siswa.add");
    }
    public function insert(Request $request){
            student :: create([
                    'nama_siswa' => $request->nama_siswa,
                    'no_hp' => $request->no_hp,
                    'jengkel' => $request->jengkel,
            ]);
            return redirect()->route('admin.datasiswa');

        }
        public function edit($id){
           $data = student::where('id', $id)->first();
            return view ("siswa.edit", compact('data'));
        }

        public function update(Request $request){
            student::where('id',$request->id)->update([
                'nama_siswa'=>$request->nama_siswa,
                'no_hp'=>$request->no_hp,
                'jengkel'=>$request->jengkel,
            ]);
            return redirect()->route('admin.datasiswa');
        }

        public function delete($id){
            student::where('id', $id)->delete();
            return redirect()->route('admin.datasiswa');
        }
}
