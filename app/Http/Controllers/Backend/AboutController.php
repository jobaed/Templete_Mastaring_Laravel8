<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'page_title' => 'About Us',
            'breadcumb' => [['link' => '/', 'name' => 'Dashboard'], ['name' => 'About Us']]
        ];
        return view('backend.pages.about.index', $data);
    }
}
