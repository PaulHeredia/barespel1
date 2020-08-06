<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\SitePostRequest;
use App\Http\Controllers\Controller;
use App\Site;

class SiteController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Site::all();
    }

    public function show(Request $request, Site $site)
    {
        return $site;
    }

    public function store(SitePostRequest $request)
    {
        $data = $request->validated();
        $site = Site::create($data);
        return $site;
    }

    public function update(SitePostRequest $request, Site $site)
    {
        $data = $request->validated();
        $site->fill($data);
        $site->save();

        return $site;
    }

    public function destroy(Request $request, Site $site)
    {
        $site->delete();
        return $site;
    }

}
