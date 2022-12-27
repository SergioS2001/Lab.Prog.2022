<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function HomeScreen(){
        return view('home.homescreen');

    }
    public function register(){
        return view('home.register');

    }
    public function login(){

        return view("auth.login");

    }
    public function Main(){

        return view('Main');

    }
    public function updatesala($id){
        $result =DB::table('salas')->where('id',$id)->first();

        return view('sala.update',["salas"=>$result]);

    }
    public function updateedificio($id){

        $result =DB::table('edificios')->where('id',$id)->first();
        return view('edificio.update',["edificios"=>$result]);

    }
    public function update_display($id)
    {
        $result =DB::table('requisitos')->where('id',$id)->first();
        return view('Requisito.update',["requisitos"=>$result]);
    }
}
