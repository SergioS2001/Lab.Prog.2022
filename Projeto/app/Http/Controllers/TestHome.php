<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestHome extends Controller{

    public function TestHome(){
        return view('TestHome');
    }
}