<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\UserSearch\UserSearch;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        return UserSearch::apply($request);
    }
}
