<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Properties',
            'page_title' => 'Properties',
            'breadcumb' => [['link' => '/', 'name' => 'Dashboard'], ['name' => 'Properties']]
        ];
        return view('backend.pages.properties.index', $data);
    }
}
