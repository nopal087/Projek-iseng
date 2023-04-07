<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
