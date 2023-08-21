<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function getNama($nama)
    {
        return $nama;
    }

    public function index()
    {
        $data = "Ayo ngoding";
        return view('santri', ['nama' => $data]);
    }

    public function biodata()
    {
        $data = "Ayo ngoding";
        $mapel = ['Laravel', 'Codeigniter', 'PHP Native'];
        return view('biodata', ['nama' => $data, 'mapel' => $mapel]);
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        return 'Nama:' . $nama . ', Alamat : ' . $alamat;
    }
}
