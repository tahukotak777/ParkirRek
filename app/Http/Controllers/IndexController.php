<?php

namespace App\Http\Controllers;

use App\Models\keluar;
use App\Models\masuk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    public function masuk( Request $request) {
        $plat = $request->plat;
        $now = Carbon::now("asia/jakarta");
        $validator = Validator::make([
            "plat"=>$plat
        ], [
            "plat"=>"required|string|uppercase|min:3|max:7"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $post = masuk::create([
            "plat"=>$request->plat,
            "tanggal"=>$now,
            "jam"=>$now,
        ]);
        $postId = $post->id;

        return redirect("/tiket")->withCookie("idMasuk", $postId);
    }

    public function submitScan(Request $request) {
        $id = $request->input('qrcode_result');
        $masuk = masuk::find($id);
        $now = Carbon::now("asia/jakarta");
        $lamaHari = date_diff(date_create($masuk->tanggal), date_create($now->format("y-m-d")))->d;
        $lamaJam = date_diff(date_create($masuk->jam), date_create($now->format("H:i:s")))->h;
        $biaya = 3000;
        
        for ($i = 1; $i <= $lamaHari; $i++) {
            $biaya += 20000;
        }

        for ($i = 1; $i <= $lamaJam; $i++) {
            $biaya += 2000;
        }

        $post = keluar::create([
            'plat'=>$masuk->plat,
            'tanggal'=>$now,
            'jam'=>$now,
            'biaya'=>$biaya,
        ]);

        $postId = $post->id;

        return redirect("/pembayaran")->withCookies([
            "idMasuk"=>cookie("idMasuk", $id),
            "idKeluar"=>cookie("idKeluar", $postId),
        ]);
    }

    public function tiket(Request $request) {
        $id = $request->cookie("idMasuk");
        $qrCode = QrCode::size(300)->generate($id);
        $sepeda = masuk::find($id);

        return view('tiket', [
            'qrCode'=>$qrCode,
            'plat'=>$sepeda->plat,
            'tanggal'=>$sepeda->tanggal,
            'jam'=>$sepeda->jam,
            'bayar'=>$sepeda->pembayaran,
        ]);
    }

    public function pembayaran(Request $request) {
        $id = $request->cookie("idKeluar");
        $pembayaran = keluar::find($id);

        return view('pembayaran', [
            'pembayaran'=>$pembayaran,
        ]);
    }

    public function bayar(Request $request) {
        $id = $request->cookie('idMasuk');
        $post = masuk::where("id", "=", $id)->update([
            "pembayaran"=>true,
        ]);
        Cookie::queue(Cookie::forget("idMasuk"));
        Cookie::queue(Cookie::forget("idKeluar"));

        return redirect("/scan");
    }
 
}
