<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function __invoke(Request $request)
    {
        $addresses = Address::all();

        return view('home', compact('addresses'));
    }
}
