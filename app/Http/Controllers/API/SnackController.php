<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\SnackPostRequest;
use App\Http\Controllers\Controller;
use App\Snack;

class SnackController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Snack::all();
    }

    public function show(Request $request, Snack $snack)
    {
        return $snack;
    }

    public function store(SnackPostRequest $request)
    {
        $data = $request->validated();
        $snack = Snack::create($data);
        return $snack;
    }

    public function update(SnackPostRequest $request, Snack $snack)
    {
        $data = $request->validated();
        $snack->fill($data);
        $snack->save();

        return $snack;
    }

    public function destroy(Request $request, Snack $snack)
    {
        $snack->delete();
        return $snack;
    }

}
