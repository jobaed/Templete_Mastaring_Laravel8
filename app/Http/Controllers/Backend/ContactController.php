<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Contact',
            'page_title' => 'Contact',
            'breadcumb' => [['link' => '/', 'name' => 'Dashboard'], ['name' => 'Contact']]
        ];
        return view('backend.pages.contact.index', $data);
    }
}
