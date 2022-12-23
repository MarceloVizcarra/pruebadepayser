<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EmployeController extends Controller
{
    //
    public function index (Employe $employe)
    {
        //dd(Auth::user()->id);
        //return view('employes.index', ['employes' => Employe::where("user_id","=", $employe->user_id)->paginate()]);
        return view('employes.index', ['employes' => Employe::where("user_id","=", Auth::user()->id)->paginate(2)]);
    }

    public function create (Employe $employe)
    {
        return view('employes.create', ['employe' => $employe]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'company' => 'required',
            'location' => 'required',
            'type' => 'required',
            'salary' => 'required',
            'category' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);

        $employe = new Employe();
        $employe->title = $request->title;
        $employe->slug = Str::slug($request->title);
        $employe->content = $request->content;
        $employe->company = $request->company;
        $employe->location = $request->location;
        $employe->type = $request->type;
        $employe->salary = $request->salary;
        $employe->category = $request->category;
        $employe->status = $request->status;
        $employe->image = $request->image;
        $employe->user_id = Auth::user()->id;
        $employe->save();

        return redirect()->route('employes.index');
    }

    public function edit (Employe $employe)
    {
        return view('employes.edit', ['employe' => $employe]);
    }

    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'company' => 'required',
            'location' => 'required',
            'type' => 'required',
            'salary' => 'required',
            'category' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);

        $employe->title = $request->title;
        $employe->slug = Str::slug($request->title);
        $employe->content = $request->content;
        $employe->company = $request->company;
        $employe->location = $request->location;
        $employe->type = $request->type;
        $employe->salary = $request->salary;
        $employe->category = $request->category;
        $employe->status = $request->status;
        $employe->image = $request->image;
        $employe->user_id = Auth::user()->id;
        $employe->save();

        return redirect()->route('employes.index');
    }

    public function destroy (Employe $employe)
    {
        $employe->delete();
        return back();
    }
}
