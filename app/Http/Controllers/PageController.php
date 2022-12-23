<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function advert()
    {
        //$employes = Employe::get();
        $employes = Employe::latest()->paginate(10);
        return view('advert', ['employes' => $employes]);
    }

    public function employe(Employe $employe)
    {
        return view('employe', ['employe' => $employe]);
    }
}
