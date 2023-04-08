<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_login extends BaseController
{
    public function index()
    {
        return view('v_login');
    }
}
