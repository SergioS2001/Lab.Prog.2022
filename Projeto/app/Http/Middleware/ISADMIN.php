<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ISADMIN
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('user')){     //verifica se esta feito o login
            $user = session()->get('user');
            if(strcmp($user->Type, 'Admin') == 0){  //tira o user que fez login e tem a sessao iniciada
                return $next($request);                //se esse user for admin ele recebe o pedido
            }
            return redirect('home')->with('error', "You dont have admin acess!");       //senao for recebe uma mensagem a dizer que nao pode ver
        }
    }
}
