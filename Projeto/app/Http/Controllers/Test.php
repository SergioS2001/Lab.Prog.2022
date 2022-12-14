<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function home()
    {
        //return "Test home Controller\nHello from my new test controller que aparece na pagina principal\n";
        return view('myview');
    }


    public function Test1()
    {
        return "Test Test1 Controller\nHello from my new test controller\n";
    }

    public function baba()
    {
        return "Test baba Controller\nHello from my new test controller que aparece na pagina baba\n";
    }

    public function test_advanced()
    {
        return "Test baba Controller\nHello from my new test controller que aparece na pagina baba\n";
    }




    //de aqui para baixo termos coisas mais em concreto para desenvolver para o projeto 

    public function login()
    {
        return view('home.login');
    }

    public function register(){
        return view('home.register');
    }
}
