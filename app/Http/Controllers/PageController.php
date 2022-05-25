<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('page', [
            'name' => 'Nora'
        ]);
    }
}