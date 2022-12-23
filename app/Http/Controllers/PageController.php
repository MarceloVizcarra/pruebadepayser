<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $employes = Employe::latest()->take(5)->get();
        return view('home', ['employes' => $employes]);
    }

    public function advert()
    {
        //$employes = Employe::get();
        $employes = Employe::latest()->paginate(10);
        return view('advert', ['employes' => $employes]);
    }

    public function employe(Employe $employe)
    {
        //dd($employe);
        return view('employe', ['employe' => $employe]);
    }
}
