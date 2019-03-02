<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class filterController extends Controller
{
    public function getCustomFilter()
    {
        return view('datatables.collection.custom-filter');
    }

    public function getCustomFilterData(Request $request)
    {
        $users = User::select(['first_name', 'last_name', 'nik', 'phone', 'photo','password','address','city','state','birth_date','email','created_at', 'updated_at'])->get();

        return Datatables::of($users)
            ->filter(function ($instance) use ($request) {
                if ($request->has('program')) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return Str::contains($row['first_name'], $request->get('first_name')) ? true : false;
                    });
                }

                if ($request->has('programs')) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return Str::contains($row['programs'], $request->get('programs')) ? true : false;
                    });
                }
            })
            ->make(true);
    }