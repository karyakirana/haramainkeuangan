<?php

namespace App\Http\Controllers\Piutang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PiutangPenjualanController extends Controller
{
    public function index()
    {
        return view('pages.piutang.piutang-penjualan-index');
    }
}
