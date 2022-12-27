<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Employe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home() // Metodo para la vista home
    {
        $employes = Employe::latest()->take(5)->get();  // Obtiene los ultimos 5 empleos de la base de datos
        return view('home', ['employes' => $employes]); // Devuelve la vista home con los empleos
    }

    public function advert(Request $request)
    {
        //$employes = Employe::get();
        $search = $request->search;
        $filter = $request->filter;
        $employes = Employe::where('title', 'LIKE', "%{$search}%")->where('category', 'LIKE', "%{$filter}%")->latest()->paginate(10);
        return view('advert', ['employes' => $employes]);
    }

    public function employe(Employe $employe, Apply $apply)
    {
        //dd($employe);
        if (Auth::check()) {
            return view('employe', ['employe' => $employe, 'apply' => Apply::where("user_id","=", Auth::user()->id)->get()]);
        } else {
            return view('employe', ['employe' => $employe]);
        }
    }
}
