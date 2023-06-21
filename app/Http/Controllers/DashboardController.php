<?php

namespace App\Http\Controllers;

use App\Models\ModelDataKonsultasi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cUser = User::count();
        $cKonsultasi = ModelDataKonsultasi::count();
        $cKACC = ModelDataKonsultasi::where('status', 'ACC')->count();
        $cKPENDING = ModelDataKonsultasi::where('status', 'PENDING')->count();
        $cKREJECT = ModelDataKonsultasi::where('status', 'REJECT')->count();
        return view('admin.index')->with([
            'cUser' => $cUser,
            'cKonsultasi' => $cKonsultasi,
            'cKACC' => $cKACC,
            'cKPENDING' => $cKPENDING,
            'cKREJECT' => $cKREJECT,
        ]);
    }
}
