<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeController extends Controller
{
    //
    public function index (Employe $employe)
    {
        //dd(Auth::user()->id);
        //return view('employes.index', ['employes' => Employe::where("user_id","=", $employe->user_id)->paginate()]);
        return view('employes.index', ['employes' => Employe::where("user_id","=", Auth::user()->id)->paginate(2)]);
    }

    public function destroy (Employe $employe)
    {
        $employe->delete();
        return back();
    }
}
