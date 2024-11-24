<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Show the class page.
     */
    public function index()
    {
        // Mengarahkan ke file resources/views/user/class.blade.php
        return view('user.class');
    }
}
