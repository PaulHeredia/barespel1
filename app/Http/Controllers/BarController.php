<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BarPostRequest;
use App\Bar;


class BarController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'jefe','admin']);//usuario
       // $request->user()->authorizeRoles('jefe');//dueño de bar
        // $request->user()->authorizeRoles('admi');//super admin
         $bars = Bar::all();
        return view('bars.index', compact('bars'));
    }

    public function show(Request $request, Bar $bar)
    {
        return view('bars.show', compact('bar'));
    }

    public function create()
    {
        return view('bars.create');
    }

    public function store(BarPostRequest $request)
    {
        $data = $request->validated();
        $bar = Bar::create($data);
        return redirect()->route('bars.index')->with('status', 'Bar created!');
    }

    public function edit(Request $request, Bar $bar)
    {
        return view('bars.edit', compact('bar'));
    }

    public function update(BarPostRequest $request, Bar $bar)
    {
        $data = $request->validated();
        $bar->fill($data);
        $bar->save();
        return redirect()->route('bars.index')->with('status', 'Bar updated!');
    }

    public function destroy(Request $request, Bar $bar)
    {
        $bar->delete();
        return redirect()->route('bars.index')->with('status', 'Bar destroyed!');
    }
}
