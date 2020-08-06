<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\BarPostRequest;
use App\Http\Controllers\Controller;
use App\Bar;

class BarController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Bar::all();
    }

    public function show(Request $request, Bar $bar)
    {
        return $bar;
    }

    public function store(BarPostRequest $request)
    {
        $data = $request->validated();
        $bar = Bar::create($data);
        return $bar;
    }

    public function update(BarPostRequest $request, Bar $bar)
    {
        $data = $request->validated();
        $bar->fill($data);
        $bar->save();

        return $bar;
    }

    public function destroy(Request $request, Bar $bar)
    {
        $bar->delete();
        return $bar;
    }

}
