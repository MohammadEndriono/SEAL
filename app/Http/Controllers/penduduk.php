<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penduduk extends Controller
{
    public function index()
    {
            //$data=[
            //'datapenduduk' => Modelpenduduk::all()
        //];
        return View('penduduk.data', $data);
    }
}
