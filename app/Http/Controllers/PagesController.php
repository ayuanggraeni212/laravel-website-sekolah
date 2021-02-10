<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absensi;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function program()
    {
        return view('program-keahlian');
    }
    public function kegiatan()
    {
        return view('kegiatan-sekolah');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function learning()
    {
        return view('e-learning');
    }
    public function informasi()
    {
        return view('informasi');
    }
    public function jadwal()
    {
        return view('jadwal');
    }
    public function login()
    {
        return view('login-page');
    }
    public function login2()
    {
        return view('login-page-siswa');
    }
    public function guru()
    {
        $absensi = DB::table('absensi')->get();
        return view('login-page-guru', ['absensi' => $absensi]);
    }
    public function cobaadmin()
    {
        return view('coba-login-admin');
    }
    public function cobaguru()
    {
        return view('coba-login-guru');
    }
    public function loginadmin()
    {
        $absensi = DB::table('absensi')->get();
        return view('dashboard', ['absensi' => $absensi]);
    }
}
