<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\MenuPostRequest;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Menu::all();
    }

    public function show(Request $request, Menu $menu)
    {
        return $menu;
    }

    public function store(MenuPostRequest $request)
    {
        $data = $request->validated();
        $menu = Menu::create($data);
        return $menu;
    }

    public function update(MenuPostRequest $request, Menu $menu)
    {
        $data = $request->validated();
        $menu->fill($data);
        $menu->save();

        return $menu;
    }

    public function destroy(Request $request, Menu $menu)
    {
        $menu->delete();
        return $menu;
    }

}
