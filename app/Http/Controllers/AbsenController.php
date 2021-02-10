<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absensi;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = DB::table('absensi')->get();
        return view('/absensi/index', ['absensi' => $absensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/absensi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'komentar' => 'required',
            'tanggal' => 'required',
        ]);

        $absensi = new absensi;
        $absensi->nama = $request->nama;
        $absensi->kelas = $request->kelas;
        $absensi->komentar = $request->komentar;
        $absensi->tanggal = $request->tanggal;

        $absensi->save();

        return redirect('login-page-siswa')->with('status', 'Absensi telah berhasil dilakukan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        return view('/absensi/edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'komentar' => 'required',
            'tanggal' => 'required',
        ]);

        Absensi::where('id', $absensi->id)
            ->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'komentar' => $request->komentar,
                'tanggal' => $request->tanggal,
            ]);
        return redirect('/absensi')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        Absensi::destroy($absensi->id);
        return redirect('/absensi')->with('status', 'Data berhasil dihapus!');
    }
}
