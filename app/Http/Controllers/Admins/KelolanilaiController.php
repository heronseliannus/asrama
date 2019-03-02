<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;

class KelolanilaiController extends Controller
{
    public function index()
    {
        return view('Kelolanilai', ['Admin' => Kelolanilai::all()]);
    }

    public function store(Request $request)
    {

        $admin = new admin;

        $admin->first_name = $request['form-firstname'];
        $admin->last_name = $request['form-lastname'];
        $admin->nilai1 = $request['form-nilai1'];
        $admin->nilai2 = $request['form-nilai2'];
        $admin->nilai3 = $request['form-nilai3'];
        $admin->nilai4 = $request['form-nilai4'];

        $admin->save();

        return view('testing', compact('request'));

    }
}
