<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Site;
use App\Snack;
use App\Preferencia;
use App\Buzon;
class PublicController extends Controller
{
    //
    public function index()
    {   
        $menus = Menu::all();
        $snacks = Snack::all();
        $preferencias = Preferencia::all();
        $buzons = Buzon::all();
        $sites = Site::all();
        return view('welcome',compact('sites','menus','snacks','preferencias','buzons'));
    }
    
}
