<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
// use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // dd(Laptop::find(4));
        return inertia('Index/Index', [
            'message' => 'Hello from Laravel!'
        ]);
    }
    public function page()
    {
        return inertia('Index/Page');
    }
}
