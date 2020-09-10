<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporte;
use App\Buzon;
use App\Preferencia;
class UsuarioReportesController extends Controller
{
    //
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('reportes.index');
    }
    public function reporte(Request $request)
    {
        $reportes = Reporte::all();
        return view('reportes.userreportes',compact('reportes'));

    }

}
