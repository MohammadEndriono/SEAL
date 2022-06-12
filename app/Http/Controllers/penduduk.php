<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelpenduduk;

class penduduk extends Controller
{
    public function index()
    {
        $data = [
           'dataPenduduk' => Modelpenduduk::all()
        ];
        return View('penduduk.data', $data);
    }

    public function add()
    {
        return View('penduduk.formtambah');
    }

    public function save(Request $r)
    {
        $nik = $r->nik;
        $nama = $r->nama;
        $email = $r->email;
        $password = $r->password;

        try {
            $penduduk = new Modelpenduduk;
            $penduduk->nik = $nik;
            $penduduk->nama = $nama;
            $penduduk->email = $email;
            $penduduk->password = $password;
            $penduduk->save();

            //echo 'Data berhasil disimpan';
            $r->session()->flash('msg', 'Data dengan penduduk $nama berhasil tersimpan');
            return redirect('/penduduk/tambah');
        } catch (throwable $e) {
            echo $e;
        }
    }
}
