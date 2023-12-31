<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AtlitResource;
use App\Models\Atlit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AtlitController extends Controller
{
    public function index() {
        $data = Atlit::with('cabang_olahraga', 'team')->get();
        // $data = AtlitResource::collection($dataRaw);
        return response()->json($data, 200);
    }

    public function show ($id) {
        $data = Atlit::where('id', $id)->first();
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
            'alamat' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'cabang_olahraga' => 'required',
            'team' => 'required'
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        $data = Atlit::create($request->all());
        return response()->json([
            'pesan'=> "data berhasil disimpan",
            'data'=> $data
        ], 201);

    }

    public function update(Request $request, $id) {
        $data = Atlit::where('id', $id)->first();

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
            'alamat' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'cabang_olahraga' => 'required',
            'team' => 'required'
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
        $data = Atlit::where('id', $id)->first();
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
