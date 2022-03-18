<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function check(Request $request)
    {  
        $user = $request->username;
        $pass  = $request->password;

        if (auth()->attempt(array('name' => $user, 'password' => $pass)))
        {
            return view('index');
        } 
        else
        {  
            session()->flash('error', 'Login Inválido'); 
            return redirect()->route('login');
        }  
    }


    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect()->route('login');
    }

    public function notasaluno()
    {
        return $this->hasMany(Aluno::class, 'id_user');
    }

}