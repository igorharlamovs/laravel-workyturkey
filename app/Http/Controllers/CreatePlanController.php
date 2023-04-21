<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePlanController extends Controller
{
    public function index() {
        return view ('plans.createplan');
    }
}
