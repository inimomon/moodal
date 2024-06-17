<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Usaha;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::User() ? Auth::User()->name : "Guest";
        $data = Usaha::get();
        return view('templates/header')
            . view('page/home', ['user' => $user, 'data' => $data])
            . view('templates/footer');
    }

    public function create() {
        return view('templates/header')
            . view('page/create')
            . view('templates/footer');
    }

    public function detail($id) {
        $dataOnId = DB::table('usaha')->find($id);
        return view('templates/header')
            . view('page/detail', ['data' => $dataOnId])
            . view('templates/footer');
    }

    public function insert(Request $request) {
        $date = new \DateTime();
        $date->modify('+3 months');
        $tenggat = $date->format('Y-m-d');

        Usaha::create([
            'user_id' => Auth::id(),
            'judul_usaha' => $request->judul,
            'deskripsi_usaha' => $request->deskripsi,
            'target_biaya' => $request->target_biaya,
            'biaya' => 0,
            'jaminan' => $request->jaminan,
            'tenggat' => $tenggat,
        ]);

        return redirect('/');
    }

    public function kasihModal(Request $request) {
        $userId = Auth::id();
        $dataOnId = DB::table('usaha')->find($request->id);

        $targetBiaya = $dataOnId->target_biaya;
        $biayaSekarang = $dataOnId->biaya;
        $sisaModal = $targetBiaya - $biayaSekarang;

        if($request->biaya > $sisaModal) {
            // 
        } else {
            // Pemodal JSON data
            $pemodalArray = json_decode($dataOnId->pemodal, true);

            if(is_array($pemodalArray)) {
                $pemodalArray[] = $userId;
            } else {
                $pemodalArray = [$userId];
            }
            $newPemodal = json_encode($pemodalArray);


            // Jumlah Modal JSON data
            $jumlahModalArray = json_decode($dataOnId->jumlah_modal, true);

            if(is_array($jumlahModalArray)) {
                $jumlahModalArray[] = $request->biaya;
            } else {
                $jumlahModalArray = [$request->biaya];
            }
            $newJumlahModal = json_encode($jumlahModalArray);

            // UPDATING COMMAND TO DATABASE
            DB::table('usaha')->where('id', $request->id)->increment('biaya', $request->biaya);
            DB::table('usaha')->where('id', $request->id)->update(['pemodal' => $newPemodal]);
            DB::table('usaha')->where('id', $request->id)->update(['jumlah_modal' => $newJumlahModal]);
            return redirect('/');
        }
    }
}
