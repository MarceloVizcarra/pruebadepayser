<?php

namespace App\Http\Controllers;

use App\Models\Apply;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(Apply $apply)
    {
        return view('dashboard', ['applies' => Apply::where("user_id","=", Auth::user()->id)->paginate(5)]);
    }
}
