<?php

namespace Tiagoandrepro\Contacts\Controllers;

class ContactController extends \App\Http\Controllers\Controller
{

    public function index()
    {
        return view('contacts::index');
    }

}
