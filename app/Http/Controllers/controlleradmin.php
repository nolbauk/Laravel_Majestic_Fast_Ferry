<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlleradmin extends Controller
{
    public function index()
    {
        $data = admin::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('login', compact('data'));
    }

    public function add()
    {
        return view('register');
    }

    public function insertdata(Request $request)
    {
        admin::create($request->all());

        return redirect()->route('login');
    }

    public function readdata($id)
    {
        $data = tujuan::find($id);

        return view('tujuan/tujuanedit', compact('data'));
    }

    public function alldata($id)
    {
        $data = tujuan::find($id);

        return view('tujuan/tujuandata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = tujuan::find($id);
        $data->update($request->all());

        return redirect()->route('tujuanindex');
    }

    public function deletedata($id)
    {
        $data = tujuan::find($id);
        $data->delete();

        return redirect()->route('tujuanindex');
    }
}
