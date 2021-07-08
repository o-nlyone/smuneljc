<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sj;
use Illuminate\Support\Str;


class DaftarController extends Controller
{
    public function showDaftarForm(){
        return view("auth.daftar");
    }

    public function showlist(){
        return view("auth.list");
    }

    public function daftar(Request $request){

        try {
            DB::table('forms')->insert(
                array(
                    'name' => $request->name,
                    'stb' => $request->stb,
                    'gender' => $request->gender,
                    'kelas' => $request->kelas,
                    'phone' => $request->phone,
                    'pin' => $request->pin,
                    'tgl_daftar' => now()
            ));
            return back()->with('success', "Pendaftaran Sukses.");
        } catch (\Exception $e) {
            return back()->with('error', 'Stb Telah Terdaftar / Form Error')->withInput();
        }




}
}
