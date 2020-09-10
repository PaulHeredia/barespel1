<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SnackPostRequest;
use App\Snack;


class SnackController extends Controller
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
        
        $snacks = Snack::all();
        return view('snacks.index', compact('snacks'));
    }

    public function show(Request $request, Snack $snack)
    {
        return view('snacks.show', compact('snack'));
    }

    public function create()
    {
        return view('snacks.create');
    }

    public function store(SnackPostRequest $request)
    {
        $data = $request->validated();
        $snack = Snack::create($data);
        return redirect()->route('snacks.index')->with('status', 'Snack created!');
    }

    public function edit(Request $request, Snack $snack)
    {
        return view('snacks.edit', compact('snack'));
    }

    public function update(SnackPostRequest $request, Snack $snack)
    {
        $data = $request->validated();
        $snack->fill($data);
        $snack->save();
        return redirect()->route('snacks.index')->with('status', 'Snack updated!');
    }

    public function destroy(Request $request, Snack $snack)
    {
        $snack->delete();
        return redirect()->route('snacks.index')->with('status', 'Snack destroyed!');
    }
}
