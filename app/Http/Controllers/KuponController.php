<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kupon;
use Illuminate\Support\Facades\Response;
use Image;

class KuponController extends Controller
{
    public function index() {
        $data = Kupon::latest()->paginate(5);
        return view('daftarKupon', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function insert_image(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|file|max:5120',
        ]);

        $image_file = $request->file('gambar');

        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
        'nama'  => $request->nama,
        'berlaku_sampai'  => $request->berlaku_sampai,
        'jumlah_poin'  => $request->jumlah_poin,
        'deskripsi'  => $request->deskripsi,
        'jumlah'  => $request->jumlah,
        'gambar' => $image
        );

        Kupon::create($form_data);

        return redirect('/daftarkupon');
    }

    function fetch_image($kupon_id)
    {
        $image = Kupon::findOrFail($kupon_id);

        $image_file = Image::make($image->gambar);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function ambil_kupon($id_user, $id_kupon) {
        $poin_user = DB::table('users')->where('id', $id_user)->value('poin');

        $poin_kupon = DB::table('kupon')->where('id', $id_kupon)->value('jumlah_poin');

        if($poin_user < $poin_kupon) {
            return redirect('/daftarkupon')->with('alert', 'Poin Anda tidak cukup');
        } else {

            DB::table('users')->where('id', $id_user)->decrement('poin', $poin_kupon);

            DB::table('kupon')->where('id', $id_kupon)->decrement('jumlah', 1);
            
            DB::table('kupon_user')->insert([
                'id_user' => $id_user,
                'id_kupon' => $id_kupon
            ]);

            DB::table('users')->where('id', $id_user)->update([
                'kupon' => DB::raw('kupon + 1'),
            ]);
        }
        return redirect('/kuponku')->with('alert', 'Kupon sudah ditambah!');
    }

    public function inputPoin($id_user) {
        $data = DB::table('users')->where('id', $id_user)->get();
        return view('inputPoin', compact('data'));
    }

    //Method untuk menambahkan poin
    //data -> berat sampah, 
    public function buatPoin(Request $data, $id_user) {
        $berat = $data->berat;
        $poin = $berat / 1;
        DB::table('users')->where('id', $id_user)->increment('poin', $poin);
        return redirect('/data-user');
    }
}
