<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaTestController extends Controller
{
    public function index(Request $request){
        return Inertia::render("App", [
            'person' => [
                'name' => 'shiro',
                'city' => 'padang'
            ]
        ]);
    }
}
