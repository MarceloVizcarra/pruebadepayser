<?php

namespace App\Http\Controllers;
use App\Models\Apply;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        $employes = Employe::where('title', 'LIKE', "%{$search}%")->latest()->take(5)->get();
        return view('home', ['employes' => $employes]);
    }

    public function advert()
    {
        //$employes = Employe::get();
        $employes = Employe::latest()->paginate(10);
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
