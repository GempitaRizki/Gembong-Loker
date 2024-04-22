<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForbiddenController extends Controller
{
    public function index()
    {
        return view('components.403');
    }
}
