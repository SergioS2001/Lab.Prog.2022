<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use App\Models\Artigo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HomeController extends Controller
{



    public function homescreen() {
        return view('home');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $artigo = Artigo::all();
        return view('artigos.index');
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('artigos.create');
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
            'nome' => 'required',
            'tipo' => 'required',
            'tamanho' => 'required',
            'sexo' => 'required',
        ]);

        Artigo::create($request->all());

        return redirect()->route('artigos.index')
            ->with('success', 'Artigo creado com successo!');
    }

   
    public function show(Artigo $artigo)
    {
        return view('artigos.show', compact('artigos'));
    }

    
    public function edit(Artigo $artigo)
    {
        return view('artigos.edit', compact('artigos'));
    }

   
    public function update(Request $request, Artigo $artigo)
    {
        $artigo->update($request->all());

        return redirect()->route('artigos.index')
            ->with('success', 'Artigo atualizado com sucesso!');
    }


    public function destroy(Artigo $artigo)
    {
        $artigo->delete();

        return redirect()->route('artigos.index')
            ->with('success', 'Artigo removido com sucesso!');
    }

}
