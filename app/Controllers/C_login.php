<?php

namespace App\Controllers;

class C_login extends BaseController
{
    public function index(): string
    {
        return view('V_login');
		
    }
}
