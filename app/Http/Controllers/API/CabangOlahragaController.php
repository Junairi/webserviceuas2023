<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CabangOlahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CabangOlahragaController extends Controller
{
    public function index() {
        $data = CabangOlahraga::with('products')->get();
        // $data = AtlitResource::collection($dataRaw);
        return response()->json($data, 200);
    }

    public function show ($id) {
        $data = CabangOlahraga::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'pesan' => 'Data Ditemukan',
            'data' => $data
        ], 200);
    }

    

    public function store(Request $request) {

        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'penanggung_jawab_id' => 'required',
            'wasit_id'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        $data = CabangOlahraga::create($request->all());
        return response()->json([
            'pesan'=> "data berhasil disimpan",
            'data'=> $data
        ], 201);

    }

    public function update(Request $request, $id) {
        $data = CabangOlahraga::where('id', $id)->first();

        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        // proses validasi
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'penanggung_jawab_id' => 'required',
            'wasit_id'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        // proses simpan perubahan data
        $data->update($request->all());

        return response()->json([
            'pesan' => 'Data berhasil di update',
            'data' => $data
        ], 201);
    }

    public function delete($id) {
        $data = CabangOlahraga::where('id', $id)->first();
        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        $data->delete();

        return response()->json([
            'pesan' => 'Data berhasil di hapus',
            'data' => $data
        ], 200);
    }
}
