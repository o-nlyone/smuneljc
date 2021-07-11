<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sj;
use Illuminate\Support\Str;
use Exception;


class DaftarController extends Controller
{
    public function showDaftarForm(){
        return view("auth.daftar");
    }

    public function showlist(){
        return view("auth.list");
    }

    public function pincheck(Request $request){
        if ($request->pin == DB::table('forms')->value('pin')){
            return back()->with('match', 'match');
        }
    }


    public function daftar(Request $request){

        try {
            DB::table('forms')->insert(
                array(
                    'name' => $request->name,
                    'stb' => $request->stb,
                    'kelas' => $request->kelas,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'pin' => $request->pin,
                    'tgl_daftar' => now()
            ));
            return back()->with('success', "Pendaftaran Sukses.");
        } catch (\Exception $e) {
            return back()->with('error', 'Stb Telah Terdaftar / Form Error')->withInput();
        }
}
    public function updateAdmin(Request $request){
            try {
                DB::table('forms')->where('id', $request->id)->update([
                    'name' => $request->name,
                    'stb' => $request->stb,
                    'kelas' => $request->kelas,
                    'phone' => $request->phone,
                    'pin' => $request->pin]);
                    return back()->with('success', 'Profil Anda Sudah Di Perbaharui');
            } catch (Exception $err) {
                return back()->with('err-log', 'ID/Email Tidak Tersedia')->withInput($request->input());
            }
    }

    public function wamessage(Request $request){
            try {
                DB::table('details')->where('idtext', '1')->update([
                    'pesan' => $request->pesan]);
                    return back()->with('success', 'Pesan Sudah Di Perbaharui');
            } catch (Exception $err) {
                return back()->with('err-log', 'error')->withInput($request->input());
            }
    }
}
