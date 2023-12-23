<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $siswa = Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $siswa = Siswa::all();
        }

        return view('siswa.index', compact((['siswa'])));
    }

    public function create(Request $request)
    {
        $siswa = Siswa::all();
        Siswa::create($request->except(['_token']));
        return redirect('/siswa')->with('sukses', 'Data berhasil diinput');
        // return $request->all();
    }



    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }


    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        // dd($request->all());
        $siswa->update($request->all());

        if ($request->hasFile('gambar')) {

            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $siswa->gambar = $request->file('gambar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'data berhasil di hapus');
    }

    public function profile($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.profile', ['siswa' => $siswa]);
    }
}
