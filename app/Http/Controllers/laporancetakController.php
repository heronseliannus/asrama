<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function laporan()
    {
        $user = new User;
        $user->program = $request['select-program'];
        $user->save();
    }
}