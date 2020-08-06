<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\BuzonPostRequest;
use App\Http\Controllers\Controller;
use App\Buzon;

class BuzonController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Buzon::all();
    }

    public function show(Request $request, Buzon $buzon)
    {
        return $buzon;
    }

    public function store(BuzonPostRequest $request)
    {
        $data = $request->validated();
        $buzon = Buzon::create($data);
        return $buzon;
    }

    public function update(BuzonPostRequest $request, Buzon $buzon)
    {
        $data = $request->validated();
        $buzon->fill($data);
        $buzon->save();

        return $buzon;
    }

    public function destroy(Request $request, Buzon $buzon)
    {
        $buzon->delete();
        return $buzon;
    }

}
