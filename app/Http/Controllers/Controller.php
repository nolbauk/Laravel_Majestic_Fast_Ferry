<?php

namespace App\Http\Controllers;

use App\Models\tujuan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function admin()
    {
        $data_tujuan = tujuan::get()->count();
        return view('admin', compact( 'data_tujuan'));
    }
}
