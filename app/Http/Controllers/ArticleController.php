<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Show the article page.
     */
    public function index()
    {
        // Mengarahkan ke file resources/views/user/article.blade.php
        return view('user.article');
    }
}
