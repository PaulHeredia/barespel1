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
   
    public function listpreferencias(Request $request)
    {
        $buzons=Buzon::all();
        $preferencias=Preferencia::all();
        $menus=Preferencia::all();
        $bares= Bar::all()->sortBy('CAR_NOMBRE');
        $campues=Site::all(); 
        return view('reportes.listpreferencias',compact('campues','buzons','menus','bares','preferencias'));

        
    }
    public function buzon(Request $request)
    {
        $buzons=Buzon::all();
        $preferencias=Preferencia::all();
        $menus=Preferencia::all();
        $bares= Bar::all()->sortBy('CAR_NOMBRE');
        return view('reportes.buzon',compact( 'buzons','menus','bares','preferencias'));

    }
  
}
