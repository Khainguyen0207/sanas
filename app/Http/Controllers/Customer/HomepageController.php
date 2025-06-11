<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $title = 'Homepage';

        return view('homepage', ['title' => $title]);
    }
}
