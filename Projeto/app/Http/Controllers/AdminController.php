<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Admin = User::paginate(5);
        return view('Utilizador.index', ['utilizador' => $Admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required',
            'Type' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ]);

         $Utilizador = new User();
         $Utilizador->Nome= $request->Nome;
         $Utilizador->Type= $request->Type;
         $Utilizador->Email= $request->Email;
         $Utilizador->Password= $request->Password;

        User::create($request->all());

        return redirect('/clients');


    }

    //confirmar mas não tenho a certeza de que devemos implementar esta parte

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function show(Utilizador $utilizador)
    {
        return view('Utilizador.show', ['utilizador' => $utilizador]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('User.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $utilizador)
    {
        $request->validate([
            'Nome' => 'required',
            'Type' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ]);

        $utilizador->update($request->all());

        return redirect('/Home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $utilizador)
    {
        $utilizador->delete();

        return redirect('/Home');
    }
}