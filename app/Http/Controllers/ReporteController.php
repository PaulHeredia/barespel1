<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bar;
use App\Buzon;
use App\Menu;
use App\Preferencia;
use App\Site;
use App\Snack;
class ReporteController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }
    public function index()
    {
        return view('reportes.index');
    }
    public function preferencias(Request $request)
    {
         $preferencias=Preferencia::all();
        $bares= Bar::all()->sortBy('CAR_NOMBRE'); 
        return view('reportes.preferencias',compact('bares','preferencias'));
    }


    

}
