<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SitePostRequest;
use App\Site;


class SiteController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    public function show(Request $request, Site $site)
    {
        return view('sites.show', compact('site'));
    }

    public function create()
    {
        return view('sites.create');
    }

    public function store(SitePostRequest $request)
    {
        $data = $request->validated();
        $site = Site::create($data);
        return redirect()->route('sites.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Site $site)
    {
        return view('sites.edit', compact('site'));
    }

    public function update(SitePostRequest $request, Site $site)
    {
        $data = $request->validated();
        $site->fill($data);
        $site->save();
        return redirect()->route('sites.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Site $site)
    {
        $site->delete();
        return redirect()->route('sites.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
