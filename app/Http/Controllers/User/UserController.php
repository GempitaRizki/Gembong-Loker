<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('user.index', compact('locations'));
    }
}
