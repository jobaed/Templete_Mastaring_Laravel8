<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'page_title' => 'Blog',
            'breadcumb' => [['link' => '/', 'name' => 'Dashboard'], ['name' => 'Blog']]
        ];
        return view('backend.pages.blog.index', $data);
    }
}
