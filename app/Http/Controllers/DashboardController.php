<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    public function status()
    {
        var_dump(Auth::user());
        return Auth::user();
    }
}
