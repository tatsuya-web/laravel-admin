<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('cockpit.dashboard');
    }
}
