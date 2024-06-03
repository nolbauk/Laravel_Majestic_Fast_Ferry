<?php

namespace App\Http\Controllers;

use App\Models\tujuan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class controllertujuan extends Controller
{
    public function index()
    {
        $data = tujuan::where('id', 'LIKE', '%'.request()->search.'%')->get();

        return view('tujuan/tujuanindex', compact('data'));
    }

    public function add()
    {
        return view('tujuan/tujuancreate');
    }

    public function insertdata(Request $request)
    {
        tujuan::create($request->all());

        return redirect()->route('tujuanindex');
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

    public function exportpdf()
    {
        $data = tujuan::all();
        $PDF = PDF::loadView('tujuan/tujuanreport', ['data' => $data]);

        return $PDF->stream('tujuanreport.pdf');
    }
}
