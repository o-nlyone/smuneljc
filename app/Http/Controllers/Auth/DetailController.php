<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sj;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Redirect;

class DetailController extends Controller
{
    public function securecode(Request $request){
        try {
            DB::table('details')->where('idtext', '2')->update([
                'pesan' => $request->pesan]);
                return back()->with('success', 'Security Code Sudah Di Perbaharui');
        } catch (Exception $err) {
            return back()->with('err-log', 'error')->withInput($request->input());
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

    public function wacontact(Request $request){
        try {
            DB::table('details')->where('idtext', '3')->update([
                'pesan' => $request->pesan]);
                return back()->with('success', 'Nomor Whatsapp Sudah Di Perbaharui');
        } catch (Exception $err) {
            return back()->with('err-log', 'error')->withInput($request->input());
        }
    }

    public function showmanga(){
        return view('manga');
    }
}
