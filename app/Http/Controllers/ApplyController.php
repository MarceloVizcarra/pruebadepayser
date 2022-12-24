<?php

namespace App\Http\Controllers;
use App\Models\Apply;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ApplyController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'employe_id' => 'required'
        ]);

        $apply = new Apply();
        $apply->user_id = $request->user_id;
        $apply->employe_id = $request->employe_id;
        $apply->save();

        return redirect()->route('dashboard');
    }
}
