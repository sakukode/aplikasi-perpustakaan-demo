<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('auth');

        if(logged_in() === true) {
            echo "Sudah login #".user()->email;
        } else {
            echo "Belum login";
        }
    }
}
