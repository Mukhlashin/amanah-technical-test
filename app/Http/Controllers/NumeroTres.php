<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeroTres extends Controller
{
    public function index()
    {
        //Insert OK Statement here
        $statement = 1;
        $message = "Berhasil run";
        $errormsg = "Run1Err";
        if ($statement == 1) {
            return $this->run2();
        } else {
            return view('error', compact('message', 'errormsg'));
        }
    }

    public function run2()
    {
        $statement = 2;
        $message = "Berhasil run1";
        $errormsg = "Run2Err";
        if ($statement == 2) {
            return $this->run3();
        } else {
            return view('error', compact('message', 'errormsg'));
        }
    }

    public function run3()
    {
        $statement = 3;
        $message = "Berhasil sampai Run2";
        $errormsg = "Run3Err";
        if ($statement == 3) {
            return $this->run4();
        } else {
            return view('error', compact('message', 'errormsg'));
        }
    }

    public function run4()
    {
        $statement = 4;
        $message = "Berhasil sampai Run3";
        $errormsg = "Run4Err";
        if ($statement == 4) {
            return view('error', compact('message', 'errormsg'));
        }
    }
}
