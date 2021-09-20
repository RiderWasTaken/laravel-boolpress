<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function publicSection() {
        return view('public');
    }

    public function privateSection() {

        if(!Auth::check()) {
            return redirect()->route('login');
        }

        return view('workshop');
    }
}