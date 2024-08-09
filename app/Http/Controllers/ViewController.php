<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function page_admin(){
        return view('admin_page.layouts.app');
    }
}
