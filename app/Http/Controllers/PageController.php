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

    public function advert(Request $request) // Metodo para la vista publicaciones
    {
        $search = $request->search;  // Obtiene el valor del input search
        $filter = $request->filter;  // Obtiene el valor del input filter
        $employes = Employe::where('title', 'LIKE', "%{$search}%")->where('category', 'LIKE', "%{$filter}%")->latest()->paginate(10);
        return view('advert', ['employes' => $employes]); // Devuelve la vista publicaciones con los empleos filtrados
    }

    public function employe(Employe $employe) // Metodo para la vista detalle de empleo
    {
        if (Auth::check()) { // Si el usuario esta autenticado
            $apply = Apply::where("user_id","=", Auth::user()->id)->get()->pluck('employe_id')->toArray();
        } else { // Si el usuario no esta autenticado
            $apply = [];
        }

        return view('employe', ['employe' => $employe, 'apply' => $apply]);
    }
}
