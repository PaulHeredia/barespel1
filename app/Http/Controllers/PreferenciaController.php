<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PreferenciaPostRequest;
use App\Preferencia;


class PreferenciaController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $preferencias = Preferencia::all();
        return view('preferencias.index', compact('preferencias'));
        
    }

    public function show(Request $request, Preferencia $preferencia)
    {
        return view('preferencias.show', compact('preferencia'));
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles('user');
        return view('preferencias.create');
    }

    public function store(PreferenciaPostRequest $request)
    {
        $data = $request->validated();
        $preferencia = Preferencia::create($data);
        return redirect()->route('preferencias.index')->with('status', 'Preferencia created!');
    }

    public function edit(Request $request, Preferencia $preferencia)
    {
        return view('preferencias.edit', compact('preferencia'));
    }

    public function update(PreferenciaPostRequest $request, Preferencia $preferencia)
    {
        $data = $request->validated();
        $preferencia->fill($data);
        $preferencia->save();
        return redirect()->route('preferencias.index')->with('status', 'Preferencia updated!');
    }

    public function destroy(Request $request, Preferencia $preferencia)
    {
        $preferencia->delete();
        return redirect()->route('preferencias.index')->with('status', 'Preferencia destroyed!');
    }
}
