<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.home.index');
    }
}
